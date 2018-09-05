@extends('admin.layouts.master')
@section('title', 'Principal Message')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                        Update Teacher's Message
                    </header>

                    @if(Session::has('message'))
                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                   @php $teacher_info = json_decode($singelMessage->teacher_info);@endphp

                    <div class="panel-body">
                        <form action="{{URL::to('/admin/teachers/message/update/')}}"  enctype="multipart/form-data" method="post" role="form">
                            <input type="hidden" name="id" value="{{$singelMessage->id}}">
                            {{ csrf_field() }}
                              <div class="form-group">
                                <label for="exampleInputEmail1">Page Title</label>
                                <input class="form-control" name="page_title" value="{{$singelMessage->page_title}}"  id="exampleInputEmail1" type="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Breadcrumb</label>
                                <input class="form-control" name="breadcamp" id="exampleInputEmail1" value="{{$singelMessage->breadcamp}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 1</label>
                                <input class="form-control" name="heading_one" id="exampleInputEmail1" value="{{$singelMessage->heading_one}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Description 1</label>
                                <textarea class="form-control" name="paragraph_one" rows="3">{{$singelMessage->paragraph_one}}</textarea>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 2</label>
                                <input class="form-control" name="heading_two" id="exampleInputEmail1" value="{{$singelMessage->heading_two}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Description 2</label>
                                <textarea class="form-control" name="paragraph_two" rows="3">{{$singelMessage->paragraph_two}}</textarea>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="edit-image50">Profile Picture</label>
                                <input type="file" name="profile_picture" id="exampleInputFile">
                              
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Teacher Name</label>
                                <input class="form-control" name="teacher_info[name]" id="exampleInputEmail1" value="{{$teacher_info->name}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Department</label>
                                <input class="form-control" name="teacher_info[dept]" id="exampleInputEmail1" value="{{$teacher_info->dept}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Designation</label>
                                <input class="form-control" name="teacher_info[dgn]" id="exampleInputEmail1" value="{{$teacher_info->dgn}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input class="form-control" name="teacher_info[email]" id="exampleInputEmail1" value="{{$teacher_info->email}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input class="form-control" name="teacher_info[phone]" id="exampleInputEmail1" value="{{$teacher_info->phone}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input class="form-control" name="teacher_info[fb]" id="exampleInputEmail1" value="{{$teacher_info->fb}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Twitter</label>
                                <input class="form-control" name="teacher_info[tw]" id="exampleInputEmail1" value="{{$teacher_info->tw}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Google+</label>
                                <input class="form-control" name="teacher_info[gl]" id="exampleInputEmail1" value="{{$teacher_info->gl}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin</label>
                                <input class="form-control" name="teacher_info[ln]" id="exampleInputEmail1" value="{{$teacher_info->ln}}" type="text">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop