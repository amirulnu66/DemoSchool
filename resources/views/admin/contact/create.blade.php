@extends('admin.layouts.master')
@section('title', 'Contact page Create')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Contact Page 
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/contact/store')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}

                    <div class="form-group">
                        <label>Page Route</label>
                        <input type="text"  name="contact_slug" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Page Title</label>
                        <input type="text"  name="contact_title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label >Background Image</label>
                        <input type="file"  name="con_bgimage">
                    </div>

                   <div class="form-group">
                   <label>Breadcrumb</label>
                       <input name="breadcamp" id="tagsinput" class="form-control" required  />
                   </div>

                    <div class="form-group">
                        <label>Contact Title</label>
                        <input type="text" id="Meta-title" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Contact summary</label>
                        <input type="text" id="Meta-title" name="summary" class="form-control">
                    </div>                

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>
                </section>
            </div>

        </div>
</section>
@stop