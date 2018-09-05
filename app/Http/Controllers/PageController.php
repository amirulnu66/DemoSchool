<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Session;
class PageController extends Controller
{
    //
	    public function __construct()
    {
        $this->middleware('auth');
    }


	public function create(){
		return view('admin.pages.create');
	}

	// page or history page data store database
	public function store(Request $request){
		//return $request->all();
		$pageTitle=$request->input('page_title');
		$routeTitle=$request->input('page_route');
		$breadcampName=$request->input('breadcamp');
		$headingOne=$request->input('heading_one');
		$headingTwo=$request->input('heading_two');
		$paragraph=$request->input('paragraph');
		
			
		//background iamge storing
	if(!empty($request->file('page_bgimage'))){
		$photoFile = $request->file('page_bgimage');
		$fileExtension = $photoFile->getClientOriginalExtension();
		$filename = str_random(30).".".$fileExtension;
		$destinationPath = 'asset/pages/';
		$uploaded = $photoFile->move($destinationPath, $filename);
	}
	if(!empty($request->file('main_image'))){
		//page Main iamge storing
		$profilePikFile = $request->file('main_image');
		$fileExtension =$profilePikFile->getClientOriginalExtension();
		$profilePikFileName = str_random(30).".".$fileExtension;
		$destinationPath = 'asset/pages/';
		$uploaded = $profilePikFile->move($destinationPath, $profilePikFileName);
	}	
		//Page model object hear........... 
		$pagesInfo = new Page;
    	 // input teacher deatails 
    	  // $prductProfile->page_title = $pageTitle;
    	  $pagesInfo->page_title = $pageTitle;
    	  $pagesInfo->history_route = $routeTitle;
    	  $pagesInfo->breadcamp = $breadcampName;
    	  $pagesInfo->heading_one = $headingOne;
    	  $pagesInfo->heading_two = $headingTwo;
    	  $pagesInfo->paragraph = $paragraph;
    	 
    	  	// image file name
    	  $pagesInfo->page_bgimage =$filename;
    	  $pagesInfo->main_image =$profilePikFileName;  
    	  
    	  // saving teacher profile
    	 $pagesData = $pagesInfo->save(); 

    	 Session::flash('message','Successfuly Posted');
    	 return redirect()->back();

	}

		// get & show pages data form database 
	public function showData(){
		 $pageInfo = Page::all();
		 return view('admin.pages.show', compact('pageInfo'));

	}

	 // get data for edit form database
	public function editPage($id){
		$pageData = Page::where('id', $id)->first();
		return view('admin.pages.edit', compact('pageData'));
	
	}

		// paga all data update 
	public function updatePage(Request $request){

			$pageId = $request->input('id');
			if(!empty($pageId)) {

		if(!empty($request->file('page_bgimage'))) {
			//background iamge storing
			$photoFile = $request->file('page_bgimage');
			$fileExtension = $photoFile->getClientOriginalExtension();
			 $filename = str_random(30).".".$fileExtension;
			$destinationPath = 'asset/pages/';
			$uploaded = $photoFile->move($destinationPath, $filename);
			$pageData = Page::findOrFail($pageId);
			$pageData->page_bgimage =$filename;
			 $pageData->update();

		}
		if(!empty($request->file('main_image'))) {
			//front page main iamge storing
			$pagefilePikFile = $request->file('main_image');
			$fileExtension = $pagefilePikFile->getClientOriginalExtension();
			 $pagefilename = str_random(30).".".$fileExtension;
			$destinationPath = 'asset/pages/';
			$uploaded = $pagefilePikFile->move($destinationPath, $pagefilename);
			$pageData = Page::findOrFail($pageId);
			$pageData->main_image =$pagefilename;
			 $pageData->update();
		}

			$pageData = Page::findOrFail($pageId);
	        $pageData->history_route =$request->input('history_route');
	        $pageData->page_title =$request->input('page_title');
	        $pageData->breadcamp =$request->input('breadcamp');
	        $pageData->heading_one =$request->input('heading_one');   
	        $pageData->heading_two =$request->input('heading_two');
	        $pageData->paragraph =$request->input('paragraph');
	        $pageData->update();

	         Session::flash('message', 'Data updated successfully');

	         return redirect()->back();
			}
      

		}

		public function deletePage($id){
		    $pageData = Page::find($id)->delete();

		    Session::flash('message', 'Data deleted successfully');
	         return redirect()->back();
		}


}
