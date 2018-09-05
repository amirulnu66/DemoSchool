<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
    //
	public function index($id){	
				$blogs=Blog::orderBy('id', 'DESC')->get();
		  // $blogs = Blog::all();
		 return view('fontend.pages.gallery-page', compact('blogs'));
	}

}
