<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sports;
use Session;

class SportsController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
    	return view('admin.sports.create');
    }

    public function showSports(){
   		$sportsData	=Sports::all();
   		return view('admin.sports.show')->with(['sportData'=>$sportsData]);
    }

    public function storeSports(Request $request){
   		//return $request->all();
    	$sportSlug=  $request->input('sports_slug');
		$sportTitle= $request->input('sports_title');
		$sportName=  $request->input('sports_name');
		$sportDesc=  $request->input('sports_desc');
		//sports iamge storing & empty cheaking
        if(!empty($request->file('sports_image'))){
    		$photoFile = $request->file('sports_image');
    		$fileExtension = $photoFile->getClientOriginalExtension();
    		$filename = str_random(30).".".$fileExtension;
    		$destinationPath = 'asset/gallery/';
    		$uploaded = $photoFile->move($destinationPath, $filename);
        }
		//Page model object hear........... 
		$sport = new Sports();
    	 // input teacher deatails 
    	$sport->sports_slug = $sportSlug;
    	$sport->sports_title = $sportTitle;
    	$sport->sports_name = $sportName;
    	$sport->sports_desc = $sportDesc;
    	// image file name
    	$sport->sports_image =$filename; 
    	// saving teacher profile
    	$sportsData = $sport->save(); 
    	Session::flash('message','posted Successfully');
    	return redirect()->back();

    }

    public function editSports($id){
    	 $singelData =Sports::where('id', $id)->first();

    	 return view('admin.sports.edit', compact('singelData'));
    }


    public function updateSports(Request $request){
        $sportId = $request->input('id');
            if(!empty($sportId)) {

        if(!empty($request->file('sports_image'))) {
            //Gallery iamge storing
            $photoFile = $request->file('sports_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(30).".".$fileExtension;
            $destinationPath = 'asset/gallery/';
            $uploaded = $photoFile->move($destinationPath, $filename);

            $sportList = Sports::findOrFail($sportId);
            $sportList->sports_image =$filename;
            $sportList->update();

        }

            $sportList = Sports::findOrFail($sportId);
            $sportList->sports_slug =$request->input('sports_slug');
            $sportList->sports_title =$request->input('sports_title');
            $sportList->sports_name =$request->input('sports_name');
            $sportList->sports_desc =$request->input('sports_desc');   
            $sportList->update();

            Session::flash('message', 'Data updated successfully');
            return redirect()->back();
            }
    }

    public function deleteSports($id){
        $blog = Sports::find($id)->delete();

            Session::flash('message', 'Data deleted successfully');
             return redirect()->back();
    }



}
