<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topper;
use Session;
class ClasstopperController extends Controller
{

    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //student class topper create
    public function createToper(){

    return view('admin.classTopper.create');
    }

    //student class topper insert
    public function storeToper(Request $request){
    	// return $request->all();
		$stname=$request->input('st_name');
        $stroll=$request->input('st_roll');
		$stclass=$request->input('st_class');
		$stsection=$request->input('st_section');
		$status=$request->input('status');
			
		// image storing
		$photoFile = $request->file('st_image');
		$fileExtension = $photoFile->getClientOriginalExtension();
		$filename = str_random(30).".".$fileExtension;
		$destinationPath = 'asset/profile/';
		$uploaded = $photoFile->move($destinationPath, $filename);

		//Page model object hear........... 
		$topper = new Topper;
    	 // input Student deatails   
    	  $topper->st_name = $stname;
          $topper->st_roll = $stroll;
    	  $topper->st_class = $stclass;
    	  $topper->st_section = $stsection;
    	  $topper->status = $status;
    	 
    	  // image file name
    	  $topper->st_image =$filename; 
    	  
    	 // saving Student topper
    	 $classToper = $topper->save(); 

    	 Session::flash('message','Data Posted Successfully');
    	 return redirect()->back();
    }

     //student show all here
    public function showToper() {
        $classToppers = Topper::orderBy('st_class', 'ASC')->orderBy('st_roll','ASC')->orderBy('st_section', 'ASC')->get();
        return view('admin.classTopper.show', compact('classToppers'));
    }


     //student edit information here
    public function editToper($id) {
        $topper =Topper::where('id',$id)->first();
        return view('admin.classTopper.edit', compact('topper'));
    }

    // update data insert into table
    public function updateToper(Request $request){
        $topperId = $request->input('id');
            if(!empty($topperId)) {

        if(!empty($request->file('st_image'))) {
            
            //Gallery iamge storing
            $photoFile = $request->file('st_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(30).".".$fileExtension;
            $destinationPath = 'asset/profile/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            //include model class Toppers
            $topperData = Topper::findOrFail($topperId);
            $topperData->st_image =$filename;
            $topperData->update();

        }

            $topperData = Topper::findOrFail($topperId);
            $topperData->st_name =$request->input('st_name');
            $topperData->st_roll =$request->input('st_roll');
            $topperData->st_class =$request->input('st_class');
            $topperData->st_section =$request->input('st_section'); 
            $topperData->status =$request->input('status'); 
            
            $topperData->update();

             Session::flash('message', 'Data updated successfully');

             return redirect()->back();
            }
    }

    // Classtopper information delete method
    public function deleteToper($id){
        $deleteTopper =Topper::find($id)->delete();
        Session::flash('message', 'Data updated successfully');
        return redirect()->back();
            
    }

    

}
