<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class PageController extends Controller
{
    //

    public function index($history_route) {

		 $pageInfo =Page::where('history_route',$history_route)->first();
		 return view('fontend.pages.academic-history-page', compact('pageInfo'));
			
		}

}
