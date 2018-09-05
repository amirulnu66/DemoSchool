@extends('admin.layouts.master')
@section('title', 'Institute Information Settings')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Institute Information Create
                    </header>

                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif

                    <div class="panel-body">
                        <form action="{{URL::to('/admin/institute/setting/store')}}" enctype="multipart/form-data" method="post" role="form">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Name</label>
                                <input class="form-control" name="scl_name" id="exampleInputEmail1"  type="text" required="">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Email</label>
                                <input class="form-control" name="scl_email" id="exampleInputEmail1"  type="text" required="">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Phone</label>
                                <input class="form-control" name="scl_phone" id="exampleInputEmail1"  type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Logo</label>

                                <input type="file" name="scl_logo" id="exampleInputFile"  required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Address</label>
                                <input class="form-control" name="scl_address" id="exampleInputEmail1"  type="text" required="">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Copyright</label>
                                <input class="form-control" name="copyright" id="exampleInputEmail1"  type="text" required="">
                            </div>

                            <div class="row">
                                
                                <div class="form-group col-md-3 col-xs-12">
                                    <label for="exampleInputEmail1">Facebook</label>
                                    <input class="form-control" name="institute_info[fb]" id="exampleInputEmail1"  type="text">
                                </div>
                                <div class="form-group col-md-3 col-xs-12">
                                    <label for="exampleInputEmail1">Twitter</label>
                                    <input class="form-control" name="institute_info[tw]" id="exampleInputEmail1"  type="text">
                                </div>
                                <div class="form-group col-md-3 col-xs-12">
                                    <label for="exampleInputEmail1">Google+</label>
                                    <input class="form-control" name="institute_info[gl]" id="exampleInputEmail1" type="text">
                                </div>
                                <div class="form-group col-md-3 col-xs-12">
                                    <label for="exampleInputEmail1">Linkedin</label>
                                    <input class="form-control" name="institute_info[ln]" id="exampleInputEmail1" type="text">
                                </div>
                              
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" name="scl_description" rows="3" required=""></textarea>
                                
                            </div>
                            
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop