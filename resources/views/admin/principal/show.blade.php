@extends('admin.layouts.master')
@section('title', 'Principal Message ')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                        Manage Teacher's Messages
                        <span class="tools pull-right">
                      
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                
             </span>
                    </header>
                     @if(Session::has('message'))
                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                <div class="panel-body">    
                    
                    <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Id</th>
                                    <th>Page Title</th>
                                    <th>Header Content</th>
                                    <th>Headmaster's Name</th>
                                    <th>Profile Picture</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                            @if(!empty($principalMsg))        
                                    
                                @foreach($principalMsg as $index=>$message)
                                    @php $teacher_info = json_decode($message->teacher_info);@endphp
                                  <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$message->page_title}}</td>
                                    <td>{{$message->heading_one}}</td>
                                    <td>{{$teacher_info->name}}</td>
                                    <td><img src="{{url('asset/uploads/'.$message->profile_picture)}}" width="80" height="60"></td>
                                    
                                    <td>{{$teacher_info->dept}}</td>
                                    <td>
                                        <a href="{{url('/admin/teachers/message/update/'.$message->id)}}" name="btn" class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>

                                        <a href="{{url('/admin/teachers/message/delete/'.$message->id)}}" name="btn" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" title="Delete"><i class="fa fa-times"></i></a>

                                    </td>
                                  </tr>
                                  
                                  @endforeach
                            @else 
                               <tr>
                              <td colspan="7" class=" text-center" style="font-size: 16px; padding: 10px; letter-spacing: 1px;">
                                <strong>No Records Found</strong> 
                              </td>
                            </tr>
                            @endif   
                                </tbody>
                              </table>
                            <!-- <button type="submit" class="btn btn-info">Submit</button> -->
                        
                    </div>
                </section>
            </div>

        </div>
    </section>
@stop


