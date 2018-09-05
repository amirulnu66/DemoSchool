<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherMessage;

class TeacherMessageController extends Controller
{
    //
		// principal message
		public function index($page_route) {
			$teacherMessage=TeacherMessage::where('page_route',$page_route)->first();
			//$directoryMessage=TeacherMessage::where('page_route',$page_route)->first();
			return view('fontend.pages.principal-message',compact('teacherMessage'));
		}
		//directory Message
		public function directoryMessage() {
            $directoryMessage=TeacherMessage::where('page_route','director-message')->first();
            
            return view('fontend.pages.directory-message',compact('directoryMessage'));
        }


}
