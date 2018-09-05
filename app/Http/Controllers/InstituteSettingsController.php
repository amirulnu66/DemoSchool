<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class InstituteSettingsController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }

    //institute create method col
    public function create(){
    	return view('admin.settings.create');
    }

   //institute setting information store
    public function storeSettingInfo(Request $request){
    	// return $request->all();
    	$sclName=$request->input('scl_name');
    	$sclEmail=$request->input('scl_email');
    	$sclPhone=$request->input('scl_phone');
    	$sclAddress=$request->input('scl_address');
    	$copyright=$request->input('copyright');
    	$sclDesc=$request->input('scl_description');
    	//array to convart json file
    	$instituteInfo= json_encode($request->input('institute_info'));

    	//institute Logo/image storing
		$photoFile = $request->file('scl_logo');
		$fileExtension = $photoFile->getClientOriginalExtension();
		$filename = str_random(20).".".$fileExtension;
		$destinationPath = 'asset/logos/';
		$uploaded = $photoFile->move($destinationPath, $filename);

		//Setting model class object hear........... 
		$institutue = new Setting();
		
		$institutue->scl_name = $sclName;
		$institutue->scl_email = $sclEmail;
		$institutue->scl_phone = $sclPhone;
		$institutue->scl_address = $sclAddress;
		$institutue->copyright = $copyright;
		$institutue->scl_description = $sclDesc;
		$institutue->institute_info = $instituteInfo;
		// image file name
    	$institutue->scl_logo=$filename; 

    	// saving institute settings information
    	 $sclData = $institutue->save(); 
    	 Session::flash('message','Successfully posted');
    	 return redirect()->back();
    }

    //institute information red form database
    public function showInfo(){
    	$settingsInfo= Setting::all();
    	return view('admin.settings.show',compact('settingsInfo'));
    }
    //institute setting update
    public function editInfo(){
        $institute =Setting::first();
        if(!empty($institute)){
        return view('admin.settings.edit', compact('institute'));
        }else{
            return view('admin.settings.create');
        }
    }

    //institutue setting data update & insert
    public function updateInfo(Request $request){
        $settingId = $request->input('id');
            if(!empty($settingId)) {
            //cheaking empty file     
        if(!empty($request->file('scl_logo'))) {
            
            //settings logo updating & store
            $photoFile = $request->file('scl_logo');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(20).".".$fileExtension;
            $destinationPath = 'asset/logos/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            //Setting model class include......
            $settingsData = Setting::findOrFail($settingId);
            $settingsData->scl_logo =$filename;
            $settingsData->update();
        }
        if(!empty($request->file('holiday_list'))) {
            //settings logo updating & store
            $photoFile = $request->file('holiday_list');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(20).".".$fileExtension;
            $destinationPath = 'asset/logos/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            //Setting model class include......
            $settingsData = Setting::findOrFail($settingId);
            $settingsData->holiday_list =$filename;
            $settingsData->update();
        }
            //Setting model class include......
            $settingsData = Setting::findOrFail($settingId);

            $settingsData->scl_name =$request->input('scl_name');
            $settingsData->scl_email =$request->input('scl_email');
            $settingsData->scl_phone =$request->input('scl_phone');
            $settingsData->scl_address =$request->input('scl_address');   
            $settingsData->copyright =$request->input('copyright');
            $settingsData->scl_description =$request->input('scl_description');
            // json file json_encode update store
            $settingsData->institute_info = json_encode($request->input('institute_info'));            
            $settingsData->update();

            Session::flash('message', 'Data updated successfully');
            return redirect()->back();
        }

    }

    //settings data delete method
    public function deleteinfo($id){
        $deleted =Setting::find($id)->delete();
        Session::flash('message', 'Institute Information Deleted Successfully');
        return redirect()->back();
    }



}
