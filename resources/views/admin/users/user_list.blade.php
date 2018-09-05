@extends('admin.layouts.master')
@section('title', 'User List ')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                        Admin Users List
                        <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                
             </span>
                    </header>
                    @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped text-center" id="dynamic-table">
                                <thead>
                                <tr>
                                    
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Create At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                               <tbody>
                             @if(!empty($userslist))    
                              @foreach($userslist as $userlist)
                               <tr>
                                    
                                   <td>{{$userlist->name}}</td>
                                   <td>{{$userlist->email}}</td>
                                   <td>{{$userlist->created_at}}</td>

                                   <td>
                                       <a  href="{{URL::to('admin/users/update',['id'=>$userlist->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       @if($userlist->type==0)
                                       <a href="{{URL::to('/admin/users/delete/'.$userlist->id)}}" onclick="return confirm('Are you sure you want to delete this users..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                       @endif
                                   </td>
                                </tr>

                               @endforeach
                            @else
                              <tr>
                                <td colspan="4"><strong>No Records Found</strong></td>
                              </tr>
                            @endif    

                               </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </section>
@stop


