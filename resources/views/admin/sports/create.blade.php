@extends('admin.layouts.master')
@section('title', 'School Spors Create')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                        Create Sports Post 
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/sports/store')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}

                       <div class="form-group">
                        <label>Page Route</label>
                        <input type="text"  name="sports_slug" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label>Text Heading 1</label>
                        <input type="text"  name="sports_title" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label>Text Heading 2</label>
                        <input type="text"  name="sports_name" class="form-control" required="">
                    </div>
                    

                    <div class="form-group">
                        <label >Photo</label>
                        <input type="file"  name="sports_image" required="" required="">
                    </div>

                    <div class="form-group">
                        <label >Description</label>
                        <textarea  name="sports_desc" class="form-control" rows="3" required=""></textarea>
                    </div>


                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>
                </section>
            </div>

        </div>
</section>
@stop
