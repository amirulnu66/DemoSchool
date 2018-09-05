<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sports;

class SportsController extends Controller
{
    //
    public function index($id){
       $sportslist= Sports::orderBy('id', 'asc')->paginate(10);
       return view('fontend.pages.sports-page', compact('sportslist'));
    }


}
