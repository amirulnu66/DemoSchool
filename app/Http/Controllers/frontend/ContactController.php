<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Sendmessage;
use Session;

class ContactController extends Controller
{
    //
     public function index($id) {

		 $contactUs =Contact::where('contact_slug',$id)->first();
		 return view('fontend.pages.contact-us', compact('contactUs'));
			
		}

			// Normal user send mail
		public function storeEmail(Request $request){
			$userName=$request->input('name');
			$userEmail=$request->input('email');
			$message=$request->input('message');

		    //Page model object hear...........
		    $sendMail = new Sendmessage;

    	    // input teacher deatails
		    $sendMail->name = $userName;
		    $sendMail->email = $userEmail;
		    $sendMail->message = $message;
    	  // saving teacher profile
    	    $usermail = $sendMail->save();
    	    Session::flash('message','Message sended Successfully');
    	    return redirect()->back();
		}

}
