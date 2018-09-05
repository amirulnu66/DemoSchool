<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   public function create(){
    
    return view('admin.users.create_user');

   }


   public function storeUser(Request $request){
        $users = new User();

           $users->name=$request->input('name');
           $users->email=$request->input('email');
           $users->password=bcrypt($request->input('password'));
           $users->save();

           Session::flash('message','Data Inserted Successfully');
          return redirect('/admin/users/create');

   }

   public function showUser(){
        $userslist = User::all();
      return view('admin.users.user_list', compact('userslist'));
   }

   public function edit($id){
       $userInfo = User::find($id);
       return view('admin.users.user_update', compact('userInfo'));
   }

   public function updateUser(Request $requests, $id){
      $users= User::find($id);
      $users->name=$requests->input('name');
      $users->email=$requests->input('email');
      $users->update();
      Session::flash('message','Data updated Successfully');
      return redirect('/admin/users/show');

   }
   
   public function deleteUser($id){
      $userDelete=User::find($id)->delete();
      Session::flash('message', 'Data deleted successfully');
      return redirect()->back();
   }
   
   

}
