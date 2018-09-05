<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use Session;

class SubscribeController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }
    // frontend varification function search folder frontend\Homecontroller..............
    //all subscriber list show hear
    public function showEmail(){
    	$subscribers= Subscribe::orderBy('id', 'desc')->paginate(50);
    	return view('admin.subscriber.show')->with(['subscribers'=>$subscribers]);
    }
    //delete subscribe
    public function deleteSub($id){
    	 $subdelete =Subscribe::find($id)->delete();
    	 Session::flash('message', 'Data deleted successfully');
	     return redirect()->back();
    }
}
