<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Session;

class MemberController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    // governing member 
    public function create(){
    	return view('admin.member.create');

    }
    	//governing member data insert
    public function store(Request $request){
    	//return $request->all();
    	$nameslug=$request->input('name_slug');
		$memberDesi=$request->input('member_desi');
		$memberName=$request->input('member_name');
        $memberDesc=$request->input('member_desc');
		$position=$request->input('position');
			
		//bgoverning member iamge storing
		 $photoFile = $request->file('member_image');
		 $fileExtension = $photoFile->getClientOriginalExtension();
		$filename = str_random(30).".".$fileExtension;
		$destinationPath = 'asset/members/';
		$uploaded = $photoFile->move($destinationPath, $filename);

		//Page model object hear........... 
		$member = new Member;

    	 // input  governing member  deatails     	  
    	  $member->name_slug = $nameslug;
    	  $member->member_desi = $memberDesi;
    	  $member->member_name = $memberName;
          $member->member_desc = $memberDesc;
    	  $member->position = $position;
    	  
    	  	// image file name
    	  $member->member_image =$filename; 
    	  
    	  // saving teacher profile
    	 $blogtData = $member->save(); 

    	 Session::flash('message','Data inserted Successfuly');
    	 return redirect()->back();
    }

    public function show(){
    	$members =Member::all();
    	return view('admin.member.show', compact('members'));
    }

    public function editMem($id){
    	 $memberData =Member::where('id', $id)->first();
		return view('admin.member.edit', compact('memberData'));
	
    }

    public function updateMem(Request $request){

    		$memberId = $request->input('id');
			if(!empty($memberId)) {

		if(!empty($request->file('member_image'))) {
			
			//Gallery iamge storing
			$photoFile = $request->file('member_image');
			$fileExtension = $photoFile->getClientOriginalExtension();
			$filename = str_random(30).".".$fileExtension;
			$destinationPath = 'asset/members/';
			$uploaded = $photoFile->move($destinationPath, $filename);
				// model include
			$memberinfo = Member::findOrFail($memberId);
			$memberinfo->member_image =$filename;
			$memberinfo->update();

		}
				// model include
			$memberinfo = Member::findOrFail($memberId);
	        $memberinfo->name_slug =   $request->input('name_slug');
	        $memberinfo->member_name = $request->input('member_name');
	        $memberinfo->member_desi = $request->input('member_desi');
            $memberinfo->member_desc = $request->input('member_desc'); 
	        $memberinfo->position = $request->input('position'); 
              
	        
	        $memberinfo->update();

	         Session::flash('message', 'Data updated successfully');

	         return redirect()->back();
			}

    }

    public function deleteMem($id){
    	$deleteData=Member::find($id)->delete();
    	 Session::flash('message', 'Data deleted successfully');

	    return redirect()->back();
    }




}
