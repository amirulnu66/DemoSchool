<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Session;
class SliderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function create(){

    	return view('admin.slide.create');
    }

    public function storeSlide(Request $request){
    	//return $request->all();
    	$slideTitle=$request->input('slide_text');
		$slidepicker=$request->input('date_picker');
		$position=$request->input('position');
		//background iamge storing
        if(!empty($request->file('slide_image'))){
		$photoFile = $request->file('slide_image');
		$fileExtension = $photoFile->getClientOriginalExtension();
		$filename = str_random(30).".".$fileExtension;
		$destinationPath = 'asset/slide/';
		$uploaded = $photoFile->move($destinationPath, $filename);
        }
		//Page model object hear........... 
		$slider = new Slide();
    	 // input teacher deatails 
    	  
    	  $slider->slide_text = $slideTitle;
    	  $slider->date_picker = $slidepicker;
    	  $slider->position = $position;
    	 
    	  	// image file name
    	  $slider->slide_image =$filename; 
    	  
    	  // saving teacher profile
    	 $sliderData = $slider->save(); 

    	 Session::flash('message','Successfully posted');
    	 return redirect()->back();
    }
    	
    	// slider data how/read hear
    public function showSlide(){
		 $slideInfo = Slide::all();
	 return view('admin.slide.show', compact('slideInfo'));
	}

	public function editSlide($id){
		 $slider =Slide::where('id',$id)->first();
		 return view('admin.slide.edit', compact('slider'));

	}

    public function updateSlide(Request $request){
       // return $request->all();
        $slideId = $request->input('id');
            if(!empty($slideId)) {

        if(!empty($request->file('slide_image'))) {
            
            //Gallery iamge storing
            $photoFile = $request->file('slide_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(30).".".$fileExtension;
            $destinationPath = 'asset/slide/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            $slideData = Slide::findOrFail($slideId);
            $slideData->slide_image =$filename;
            $slideData->update();

        }

            $slideData = Slide::findOrFail($slideId);
            $slideData->slide_text =$request->input('slide_text');
            $slideData->date_picker =$request->input('date_picker');
            $slideData->position =$request->input('position');   
            
            $slideData->update();

             Session::flash('message', 'Data updated successfully');

             return redirect()->back();
            }

    }


    public function deleteSlide($id){
        $slideDestory = Slide::find($id)->delete();

        Session::flash('message', 'Slider deleted successfully');
        return redirect()->back();
    }






}
