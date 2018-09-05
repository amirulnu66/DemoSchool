@extends('admin.layouts.master')
@section('title', 'Contact information update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Update Contact Information here..
                    </header>
                    
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{ URL::to('/admin/contact/update')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       <input type="hidden" name="id" value="{{$contactData->id}}">
                    <div class="form-group">
                        <label>Contact slug</label>
                        <input type="text"  name="contact_slug" class="form-control" value="{{$contactData->contact_slug}}">
                    </div>
                    <div class="form-group">
                        <label>Page Title</label>
                        <input type="text"  name="contact_title" class="form-control" value="{{$contactData->contact_title}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="edit-image50">Background Image</label>
                         <img src="{{url('asset/pages/'.$contactData->con_bgimage)}}" width="60" height="60">
                        <input type="file" name="con_bgimage" id="exampleInputFile">
                      
                    </div>

                   <div class="form-group">
                   <label>Breadcrumb</label>
                       <input name="breadcamp" id="tagsinput" class="form-control" value="{{$contactData->breadcamp}}" />
                   </div>

                    <div class="form-group">
                        <label>Contact Title</label>
                        <input type="text" id="Meta-title" name="title" class="form-control" value="{{$contactData->title}}">
                    </div>
                    <div class="form-group">
                        <label>Contact summary</label>
                        <input type="text" id="Meta-title" name="summary" class="form-control" value="{{$contactData->summary}}">
                    </div>                

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>
                </section>
            </div>

        </div>
</section>
@stop