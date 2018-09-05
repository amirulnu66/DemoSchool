<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sendmessage;
use App\Contact;
use Session;

class ContactController extends Controller
{
    //
	    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

    	return view('admin.contact.create');
    }


    public function store(Request $request){
    	//return $requests->all();

    	$contactTitle=$request->input('contact_title');
		$contactRoute=$request->input('contact_slug');
		$breadcampName=$request->input('breadcamp');
		$title=$request->input('title');
		$summary=$request->input('summary');

			
		//background iamge storing
		 $photoFile = $request->file('con_bgimage');
		 $fileExtension = $photoFile->getClientOriginalExtension();
		$filename = str_random(30).".".$fileExtension;
		$destinationPath = 'asset/pages/';
		$uploaded = $photoFile->move($destinationPath, $filename);

		//Page model object hear........... 
		$contactus = new Contact;
    	 // input teacher deatails 
    	  
    	  $contactus->contact_title = $contactTitle;
    	  $contactus->contact_slug = $contactRoute;
    	  $contactus->breadcamp = $breadcampName;
    	  $contactus->title = $title;
    	  $contactus->summary = $summary;
    	 
    	  	// image file name
    	  $contactus->con_bgimage =$filename; 
    	  
    	  // saving teacher profile
    	 $contactData = $contactus->save(); 

    	 Session::flash('message','Successfully Posted');
    	 return redirect()->back();
    }


	public function contactShow(){
	 $contactInfo = Contact::all();
	 return view('admin.contact.show', compact('contactInfo'));
	}

	public function editContact($id){
		$contactData = Contact::where('id', $id)->first();
		return view('admin.contact.edit', compact('contactData'));
	
	}

		// update contact information............
	public function updateContact(Request $request){
		//return $request->all();

		$contactId = $request->input('id');
			if(!empty($contactId)) {

		if(!empty($request->file('con_bgimage'))) {
			//background iamge storing
			$photoFile = $request->file('con_bgimage');
			$fileExtension = $photoFile->getClientOriginalExtension();
			 $filename = str_random(30).".".$fileExtension;
			$destinationPath = 'asset/pages/';
			$uploaded = $photoFile->move($destinationPath, $filename);
			$contactData = Contact::findOrFail($contactId);
			$contactData->con_bgimage =$filename;
			 $contactData->update();

		}

			$contactData = Contact::findOrFail($contactId);
	        $contactData->contact_slug =$request->input('contact_slug');
	        $contactData->contact_title =$request->input('contact_title');
	        $contactData->breadcamp =$request->input('breadcamp');
	        $contactData->title =$request->input('title');   
	        $contactData->summary =$request->input('summary');
	        
	        $contactData->update();

	         Session::flash('message', 'Data updated successfully');

	         return redirect()->back();
			}
      
	}

	public function deleteContact($id){
		$contact = Contact::find($id)->delete();

		    Session::flash('message', 'Data deleted successfully');
	         return redirect()->back();
	}




	// received all mail show admin dashboard
		public function showEmail(){

			$usersendMails =Sendmessage::orderBy('id','desc')->paginate(25);
			return view('admin.mailbox.mailShow', compact('usersendMails'));

		}

		// send message delete
		public function deleteEmail($id){
			$deleteMail = Sendmessage::find($id)->delete();

			Session::flash('message', 'Data deleted successfully');
	        return redirect()->back();
		}

	
	
	

}
