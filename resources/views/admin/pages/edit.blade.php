@extends('admin.layouts.master')
@section('title', 'Pages Update information here')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Update Page Information here.......
                    </header>

                    @if(Session::has('message'))
                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                        <form action="{{URL::to('/admin/page/update')}}"  enctype="multipart/form-data" method="post" role="form">
                            <input type="hidden" name="id" value="{{$pageData->id}}">
                            {{ csrf_field() }}
                              <div class="form-group">
                                <label for="exampleInputEmail1">Page Route</label>
                                <input class="form-control" name="history_route" value="{{$pageData->history_route}}"  id="exampleInputEmail1" type="text">
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Page Title</label>
                                <input class="form-control" name="page_title" value="{{$pageData->page_title}}"  id="exampleInputEmail1" type="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Page Breadcrumb</label>
                                <input class="form-control" name="breadcamp" id="exampleInputEmail1" value="{{$pageData->breadcamp}}" type="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="edit-image50">Background Image </label>
                                 
                                <input type="file" name="page_bgimage" id="exampleInputFile">
                              
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 1</label>
                                <input class="form-control" name="heading_one" id="exampleInputEmail1" value="{{$pageData->heading_one}}" type="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 2</label>
                                <input class="form-control" name="heading_two" id="exampleInputEmail1" value="{{$pageData->heading_two}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="edit-image50">Front Page Image</label>

                                 
                                <input type="file" name="main_image" id="exampleInputFile">                             
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Description</label>
                                <textarea class="form-control" name="paragraph" rows="3">{{$pageData->paragraph}}</textarea>
                                
                            </div>
                            
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop