<?php

namespace App\Http\Controllers\frontend;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherMessage;
use App\Facilitie;
use App\Subscribe;
use App\Topper;
use App\Slide;
use App\Page;
use Session;

use App\Http\Controllers\Helper\SchoolHelperController;



class HomeController extends Controller
{


   private $schoolHelper;

    // constructor
    public function __construct(SchoolHelperController $schoolHelper)
    {
        $this->schoolHelper = $schoolHelper;
    }


    public function index(){

        // school info
        $schoolInfo = (object)$this->schoolHelper->getSchoolInfo();

      //others facilities
      $facilities =Facilitie::orderBy('id','ASC')->get();
      $facilities=$facilities->toArray(); //toArray function use kora hoyce
    	// home slider display hear
      $sliders = Slide::orderBy('position', 'asc')->get();
      // principal message & pages show hear
      $principalMsg =TeacherMessage::where('page_route', 'principal-message')->first();
      //dictionar-speech
      $dictionarMsg =TeacherMessage::where('page_route', 'director-message')->first();
      //gallery image lode
      //student topper query
       // $classToppers = Topper::orderBy('st_class', 'ASC')->orderBy('st_roll','ASC')->orderBy('st_section', 'ASC')->get();
      // $gallery=Blog::orderBy('id', 'DESC')->get();
      $history =Page::where('history_route', 'school-history')->first();
             // json body information
        $json = ['institute'=>$this->schoolHelper->getInstituteId(), 'campus'=>$this->schoolHelper->getCampusId(), 'category'=>1, 'return_type'=>'json'];
        // academic employee list
       $teacherList = (object)$this->schoolHelper->getEmployeeList($json);

       // get academic class topper list using API call
         $academicTopper =(object) $this->schoolHelper->getAcademicClassTopperList(); 


      return view('fontend.home.index', compact('principalMsg','history','sliders','facilities','schoolInfo','dictionarMsg', 'teacherList', 'academicTopper'));
    }


    // subscribers store data in database
       public function storeEmail(Request $requests){       

    	  $subMail = $requests->input('sub_email');
    	  // subscribe profile 
    	  $subscribeProfile = Subscribe::where('sub_email', $subMail)->first();
    	 // checking
    	if($subscribeProfile){
			  return  ['status'=>'failed', 'msg'=>'You have already subscribed'];
    	}else{
    		// new subscription
			  $subscribe = new Subscribe();
	    	$subscribe->sub_email = $subMail;
	    	$subData = $subscribe->save();
	    	// checking
	    	if($subData){
	    		return  ['status'=>'success', 'msg'=>'Thanks for subscription'];
	    	}else{
	    		return  ['status'=>'failed', 'msg'=>'Unable to perfrom the Action'];
	    	}
    	}    	
    }

}
