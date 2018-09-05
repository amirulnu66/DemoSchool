<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeacherMessage;
use Session;
class TeacherMessageController extends Controller
{
    //

	    public function __construct()
    {
        $this->middleware('auth');
    }

		public function create(){
			return view('admin.principal.create');
		}

		public function store(Request $request){
			//return $request->all();
			$techCelect =$request->input('tech_celect');

			$techType =TeacherMessage::where('type',$techCelect)->first();
			//check message type 
			if(empty($techType)){
			$pageTitle=$request->input('page_title');
			$routeTitle=$request->input('page_route');
			$breadcampName=$request->input('breadcamp');
			$headingOne=$request->input('heading_one');
			$paragraphOne=$request->input('paragraph_one');
			$headingTwo=$request->input('heading_two');
			$paragraphTwo=$request->input('paragraph_two');
				// object conversetion
			//$teacherInfo=(object)$request->input('teacher_info');
			// json conversetion
			$teacherInfo= json_encode($request->input('teacher_info'));
			 
	
			//background iamge storing
			$photoFile = $request->file('page_bgimage');
			$fileExtension = $photoFile->getClientOriginalExtension();
			$filename = str_random(30).".".$fileExtension;
			$destinationPath = 'asset/uploads/';
			$uploaded = $photoFile->move($destinationPath, $filename);

			//background iamge storing
			$profilePikFile = $request->file('profile_picture');
			$fileExtension = $profilePikFile->getClientOriginalExtension();
			 $profilePikFileName = str_random(30).".".$fileExtension;
			$destinationPath = 'asset/uploads/';
			$uploaded = $profilePikFile->move($destinationPath, $profilePikFileName);

			//teacher profile iamge storing

			$teacherMessage = new TeacherMessage;
    	 // input teacher deatails 
    	  // $prductProfile->page_title = $pageTitle;
    	  $teacherMessage->type = $techCelect;
    	  $teacherMessage->page_title = $pageTitle;
    	  $teacherMessage->page_route = $routeTitle;
    	  $teacherMessage->breadcamp = $breadcampName;
    	  $teacherMessage->heading_one = $headingOne;
    	  $teacherMessage->paragraph_one = $paragraphOne;
    	  $teacherMessage->heading_two = $headingTwo;
    	  $teacherMessage->paragraph_two = $paragraphTwo;
    	  $teacherMessage->teacher_info = $teacherInfo;
    	  // $teacherMessage->profile_picture = 'profile iamge';
    	  	// image file name
    	  $teacherMessage->profile_picture =$profilePikFileName;  

    	  $teacherMessage->page_bgimage = $filename;
    	  
    	  // saving teacher profile
    	 $teacherMessageSave = $teacherMessage->save(); 
    	 Session::flash('message','Message successfuly posted');
    	}else{

    	 Session::flash('message','Sorry.! Message Already Exists');
    	 
		}
			return redirect()->back();
		}
		

		//principal data get from database
		public function showData(){
			 $principalMsg = TeacherMessage::all();

		 return view('admin.principal.show', compact('principalMsg'));
		}

		// principal message show for edit 
		public function editMessage($id){
			 $singelMessage = TeacherMessage::where('id', $id)->first();
			return view('admin.principal.edit', compact('singelMessage'));
		}



		public function updateMessage(Request $request){

			// return $request->all();
			$messageId = $request->input('id');
			if(!empty($messageId)) {

		if(!empty($request->file('page_bgimage'))) {
			//background iamge storing
			$photoFile = $request->file('page_bgimage');
			$fileExtension = $photoFile->getClientOriginalExtension();
			 $filename = str_random(30).".".$fileExtension;
			$destinationPath = 'asset/uploads/';
			$uploaded = $photoFile->move($destinationPath, $filename);
			$message = TeacherMessage::findOrFail($messageId);
			$message->page_bgimage =$filename;
			 $message->update();

		}
		if(!empty($request->file('profile_picture'))) {
			//background iamge storing
			$profilePikFile = $request->file('profile_picture');
			$fileExtension = $profilePikFile->getClientOriginalExtension();
			 $profilePikFileName = str_random(30).".".$fileExtension;
			$destinationPath = 'asset/uploads/';
			$uploaded = $profilePikFile->move($destinationPath, $profilePikFileName);
			$message = TeacherMessage::findOrFail($messageId);
			$message->profile_picture =$profilePikFileName;
			 $message->update();
		}

			$message = TeacherMessage::findOrFail($messageId);
	        $message->page_title =$request->input('page_title');
	        $message->breadcamp =$request->input('breadcamp');
	        $message->heading_one =$request->input('heading_one');
	        $message->paragraph_one =$request->input('paragraph_one');
	        $message->heading_two =$request->input('heading_two');
	        $message->paragraph_two =$request->input('paragraph_two');
	        $message->teacher_info = json_encode($request->input('teacher_info'));
	        $message->update();

	         Session::flash('message', 'Data updated successfully');

	         return redirect()->back();
			}
      

		}


		public function deleteMessage($id){
			 $messageDelete =TeacherMessage::find($id)->delete();

		    Session::flash('message', 'Data deleted successfully');
	         return redirect()->back();
		}


}
