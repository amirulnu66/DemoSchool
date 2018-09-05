@extends('admin.layouts.master')
@section('title', 'Create Pages here')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Create Pages here...
                    </header>

                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                        <form action="{{URL::to('/admin/page/store')}}"  enctype="multipart/form-data" method="post" role="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Page Route</label>
                                <input class="form-control" name="page_route" id="exampleInputEmail1" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Page Title</label>
                                <input class="form-control" name="page_title" id="exampleInputEmail1" type="text" required="">
                            </div>                            

                            <div class="form-group">
                                <label for="exampleInputEmail1">Background Image</label>
                                <input type="file" name="page_bgimage" id="exampleInputFile" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Page Breadcrumb</label>
                                <input class="form-control" name="breadcamp" id="exampleInputEmail1" type="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Front Page Image</label>

                                <input type="file" name="main_image" id="exampleInputFile" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 1</label>
                                <input class="form-control" name="heading_one" id="exampleInputEmail1" type="text" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 2</label>
                                <input class="form-control" name="heading_two" id="exampleInputEmail1" type="text" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Description</label>
                                <textarea class="form-control" name="paragraph" rows="3" required=""></textarea>
                                
                            </div>

                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop