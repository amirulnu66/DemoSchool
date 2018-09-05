<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
class MemberController extends Controller
{
    //
    public function index($id){
    		 $members = Member::orderBy('position','asc')->get();
    	return view('fontend.pages.governing-body', compact('members'));
    }
    
}
