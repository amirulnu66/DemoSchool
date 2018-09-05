<?php

use App\PublicResult;
use App\Setting;
use App\Downloads;
use App\Blog;
 
 	//download page & section helper function
   function downloadshelpers() 
   {     
   	return Downloads::where('position',1)->orderBy('id','DESC')->limit(3)->get();

   }
//institute setting helper function create
   function instituteSetting(){
   	$setting =Setting::all();
   	return $setting[0];
   }
//load home page gallery
   function galleryslide() {
   	return Blog::orderBy('id', 'DESC')->get();
   }

   // current date english to bangla 
   function getBanglaMonth($banglaDate){
      $engDATE = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
      $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
      $convertedDATE = str_replace($engDATE, $bangDATE, $banglaDate);
      return $convertedDATE;
}

// public exam cubrid_result
   // SSC public exam result
function sscPublicexamResult()
{
   return PublicResult::where('exam_type', '0')->orderBy('id', 'DESC')->limit(3)->get();
}

// JSC public exam result
function jscPublicexamResult()
{
   return PublicResult::where('exam_type', '1')->orderBy('id', 'DESC')->limit(3)->get();
}


