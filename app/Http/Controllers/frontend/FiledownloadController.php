<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Downloads;
use Session;

class FiledownloadController extends Controller
{

    //download file view in download page
    public function index(){
        $importfiles =Downloads::orderBy('id','DESC')->get();
        return view('fontend.pages.downloads', compact('importfiles'));
    }

}
