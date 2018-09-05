<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mission;
use Session;

class MissionController extends Controller
{
    //
	  public function __construct()
    {
        $this->middleware('auth');
    }

    // mision admin viwe page create
    public function create(){
    	return view('admin.mission.create');
    }

    	// data insert into database
    public function storeMission(Request $request){

		$title=$request->input('title');
		$sortTitle=$request->input('sort_title');		
		$missionDesc=$request->input('mission_desc');

		//Page model object hear........... 
		$missionDisc = new Mission();
    	 // input mission vission details 
    	  
		  $missionDisc->title = $title;
    	  $missionDisc->sort_title = $sortTitle;
    	  $missionDisc->mission_desc = $missionDesc;
    	  // saving teacher profile
    	 $missionData = $missionDisc->save(); 

    	 Session::flash('message','Data Posted Successfully');
    	 return redirect()->back();
    }
    	// all data get form mission table
    public function showMission(){
    	$missions= Mission::all();
    	return view('admin.mission.show', compact('missions'));
    }


    public function editMission($id){
    	 $mission = Mission::where('id',$id )->first();
    	 return view('admin.mission.edit')->with(['mission'=>$mission]);
    }
    	// data update & save database
    public function updateMission(Request $requests){

    	$missionId = $requests->input('id');
			if(!empty($missionId)) {

				//Mission model include
			$missioninfo = Mission::findOrFail($missionId);
	        $missioninfo->title =   $requests->input('title');
	        $missioninfo->sort_title = $requests->input('sort_title');
	        $missioninfo->mission_desc = $requests->input('mission_desc');
	        
	        //update information save in database
	        $misionUpdate = $missioninfo->update();

	         Session::flash('message', 'Data updated successfully');
	         return redirect()->back();
			}

    }

    public function deleteMission($id){
    	$deleteMission = Mission::find($id)->delete();

    	Session::flash('message', 'Data deleted successfully');
	    return redirect()->back();
    }
   

}
