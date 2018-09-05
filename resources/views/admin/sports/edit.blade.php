@extends('admin.layouts.master')
@section('title', 'School Spors post update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Uudate Sports Information here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/sports/update')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       <input type="hidden" name="id" value="{{$singelData->id}}" name="">


                    <div class="form-group">
                        <label>Text Heading 1</label>
                        <input type="text"  name="sports_title" class="form-control" value="{{$singelData->sports_title}}">
                    </div>

                    <div class="form-group">
                        <label>Text Heading 2</label>
                        <input type="text"  name="sports_name" class="form-control" value="{{$singelData->sports_name}}">
                    </div>
                    
                    <div class="form-group">
                        
                        <label for="exampleInputEmail1" class="edit-image50">Photo</label>
                        
                        <input type="file"  name="sports_image">
                    </div>

                    <div class="form-group">
                        <label >Description</label>
                        <textarea  name="sports_desc" class="form-control" rows="3">{{$singelData->sports_desc}}</textarea>
                    </div>


                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>
                </section>
            </div>

        </div>
</section>
@stop
