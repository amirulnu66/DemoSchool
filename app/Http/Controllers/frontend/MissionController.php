<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mission;

class MissionController extends Controller
{
    
    public function index(){
    	$missionInfo =Mission::all();
    	return view('fontend.pages.mission-vision', compact('missionInfo'));
    }
}
