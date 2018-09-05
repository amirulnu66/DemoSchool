@extends('admin.layouts.master')
@section('title', 'Principal Message')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                     Chairman or Principal's Speech
                    </header>

                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif

                    <div class="panel-body">
                        <form action="{{URL::to('/admin/teacherinfo/store')}}"  enctype="multipart/form-data" method="post" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Page Route</label>
                                <input class="form-control" name="page_route" id="exampleInputEmail1" type="text" required="" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Page Title</label>
                                <input class="form-control" name="page_title" id="exampleInputEmail1" type="text" required="">
                            </div>
                             <div class="form-group">
                                <label>Select Teacher</label>
                                <select class="form-control" name="tech_celect" required="">
                                    <option value="">Select</option>   
                                    <option value="1">Principal's Message</option>
                                    <option value="2">Chairman's Message</option>
                                    <option value="3">Director's Message</option>
                                    
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Breadcrumb</label>
                                <input class="form-control" name="breadcamp" id="exampleInputEmail1"  type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Background Image</label>

                                <input type="file" name="page_bgimage" id="exampleInputFile" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 1</label>
                                <input class="form-control" name="heading_one" id="exampleInputEmail1"  type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Description 1</label>
                                <textarea class="form-control" name="paragraph_one" rows="3"  required=""></textarea>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 2</label>
                                <input class="form-control" name="heading_two" id="exampleInputEmail1"  type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Description 2</label>
                                <textarea class="form-control" name="paragraph_two" rows="3"  required=""></textarea>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Profile Picture</label>

                                <input type="file" name="profile_picture" id="exampleInputFile" required="">
                               
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Teacher's Name</label>
                                <input class="form-control" name="teacher_info[name]" id="exampleInputEmail1"  type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Department</label>
                                <input class="form-control" name="teacher_info[dept]" id="exampleInputEmail1" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Designation</label>
                                <input class="form-control" name="teacher_info[dgn]" id="exampleInputEmail1" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input class="form-control" name="teacher_info[email]" id="exampleInputEmail1" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input class="form-control" name="teacher_info[phone]" id="exampleInputEmail1" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input class="form-control" name="teacher_info[fb]" id="exampleInputEmail1"  type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Twitter</label>
                                <input class="form-control" name="teacher_info[tw]" id="exampleInputEmail1" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Google+</label>
                                <input class="form-control" name="teacher_info[gl]" id="exampleInputEmail1" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin</label>
                                <input class="form-control" name="teacher_info[ln]" id="exampleInputEmail1" type="text">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop