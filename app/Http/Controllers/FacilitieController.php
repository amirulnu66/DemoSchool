<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facilitie;
use Session;

class FacilitieController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('admin.facilities.create');
    }

    public function storefaci(Request $request){  
    	// return $request->all();
    	$pageTitle=$request->input('faci_name');
		$faciRoute=$request->input('faci_slug');
		$faciDesc=$request->input('faci_desc');
			
		//iamge storing
		 $photoFile = $request->file('faci_image');
		 $fileExtension = $photoFile->getClientOriginalExtension();
		 $filename = str_random(30).".".$fileExtension;
		 $destinationPath = 'asset/gallery/';
		 $uploaded = $photoFile->move($destinationPath, $filename);

		//Facilitie model object hear........... 
		 $facilitie = new Facilitie();
    	 // input teacher deatails    	  
    	  $facilitie->faci_name = $pageTitle;
    	  $facilitie->faci_slug = $faciRoute;
    	  $facilitie->faci_desc = $faciDesc;
    	 
    	  // image file name
    	  $facilitie->faci_image =$filename; 
    	  
    	  // saving teacher profile
    	  $facilitiesData = $facilitie->save(); 
    	  Session::flash('message','Data posted successfully');
    	  return redirect()->back();

    }

        // all data show form database
    public function showfaci(){
        $facilities =Facilitie::all();
        return view('admin.facilities.show', compact('facilities'));
        }

        // edit one insert data
    public function editfaci($id){
        $facilitieinfo =Facilitie::where('id', $id)->first();
        return view('admin.facilities.edit', compact('facilitieinfo'));
    }    

        // update data insert into table
    public function updatefaci(Request $request){
        $facilitieId = $request->input('id');
            if(!empty($facilitieId)) {
        // image impty chaking
        if(!empty($request->file('faci_image'))) {
            
            //Gallery iamge storing
            $photoFile = $request->file('faci_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(30).".".$fileExtension;
            $destinationPath = 'asset/gallery/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            //including model class
            $faciData = Facilitie::findOrFail($facilitieId);
            $faciData->faci_image =$filename;
            $faciData->update();

        }
            //data updat & insert model
            $faciData = Facilitie::findOrFail($facilitieId);
            $faciData->faci_name =$request->input('faci_name');
            $faciData->faci_slug =$request->input('faci_slug');
            $faciData->faci_desc =$request->input('faci_desc');
            $faciData->update();

             Session::flash('message', 'Data updated successfully');
             return redirect()->back();
            }
    }
        // facilities delete
        public function deleteFaci($id){
            $deletefaci =Facilitie::find($id)->delete();
            Session::flash('message', 'Data deleted successfully');
            return redirect()->back();
        }



}
