<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FaqModel;

class FaqsController extends Controller
{
    //

    public function index(){

    	// postion 1 means left side 
    	 $faqsLeft =FaqModel::where('position','1')->orderBy('sort_list','asc')->get();

    	 // postion 2 means right side 
    	 $faqsRight =FaqModel::where('position','2')->orderBy('sort_list','asc')->get();
    	return view('fontend.pages.faqs',compact('faqsLeft','faqsRight'));
    }


}
