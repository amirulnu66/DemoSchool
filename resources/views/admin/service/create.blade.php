@extends('admin.layouts.master')
@section('title', 'User Create')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Create User From
                    </header>

                    @if(Session::has('msg'))
                        {{Session::get('msg')}}
                    @endif
                    <div class="panel-body">
                        <form action="{{URL::to('admin/service/store')}}"  enctype="multipart/form-data" method="post" role="form">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Page Name</label>
                                <input class="form-control" name="page_name" id="exampleInputEmail1" placeholder="Enter Full Name" type="text">
                            </div>
                            <input type="file" name="image_one">
                            
                            <input type="file" name="image_two">


                            <h1>Section One</h1>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Name</label>
                                <input class="form-control" name="section[1][service_name]" id="exampleInputEmail1" placeholder="Enter Full Name" type="text">
                            </div>

                            <div class="form-group">
                                <label for="email">Service Short Desc</label>
                                <textarea class="form-control"  name="section[1][service_slug]"></textarea>
                            </div>

                            <!--  <div class="form-group">
                                <label for="email">Image Upload</label>
                                <input type="file" class="form-control"  name="test">
                            </div> -->


                           <h1>Seciton Two</h1>
                           <div class="form-group">
                            <label >Summary</label>
                                 <textarea  name="section[2][service_content]" class="summary"></textarea>
                                 </div>

                            <div class="form-group">
                                <label for="email">Feature Section Name</label>
                                <input class="form-control" name="section[3][feature_name]" id="email" placeholder="Enter Email Address" type="text">
                            </div>

                            <div class="form-group">
                                <label for="email">Key One</label>
                                <input  type="text" class="form-control"  name="section[4][one]">
                            </div>
                                  <div class="form-group">
                                <label for="email">Key Two</label>
                                <input  type="text"class="form-control"  name="section[4][two]">
                            </div>


                            <div class="form-group">
                                <label for="email">Key Three</label>
                               <input  type="text" class="form-control"  name="section[4][three]">
                            </div>


                            <div class="form-group">
                                <label for="email">Key Four</label>
                                <input  type="text" class="form-control"  name="section[4][four]">
                            </div>

                             <div class="form-group">
                                <label for="email">Key Five</label>
                                <input  type="text" class="form-control"  name="section[4][five]">
                            </div>

                             <div class="form-group">
                                <label for="email">Key Six</label>
                                <input  type="text" class="form-control"  name="section[4][six]">
                            </div>

                             <div class="form-group">
                                <label for="email">Key Seven</label>
                                <input  type="text" class="form-control"  name="section[4][seven]">
                            </div>

                                <div class="form-group">
                                <label for="email">Key Eight</label>
                                <input  type="text" class="form-control"  name="section[4][eight]">
                            </div>

                            <h2>Section Three </h2>

                              <div class="form-group">
                                <label for="email">Why Venus IT</label>
                                <textarea class="form-control"  name="section[4][why_venus]"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="email">Benefits With Us</label>
                                <textarea class="form-control"  name="section[4][benefits]"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop