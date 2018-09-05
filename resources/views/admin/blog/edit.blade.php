@extends('admin.layouts.master')
@section('title', 'School Gallery Photo')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Update Gallery Information here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/blog/update')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$blog->id}}">
                       <div class="form-group">
                        <label>Page Route</label>
                        <input type="text"  name="blog_slug" class="form-control" value="{{$blog->blog_slug}}">
                    </div>

                    <div class="form-group">
                        <label>Gallery Title</label>
                        <input type="text"  name="blog_title" class="form-control" value="{{$blog->blog_title}}">
                    </div>

                    <div class="form-group">
                        <label>Post Time</label>
                        <input type="text"  name="date_picker" class="form-control form_datetime" value="{{date('Y-m-d H:i',strtotime($blog->date_picker))}}">
                    </div>
                    <div class="form-group">
                        <label >Gallery Photo</label>
                        <input type="file"  name="blog_image">
                    </div>

                    <div class="form-group">
                        <label>Gallery Name </label>
                        <input type="text" id="order" name="title" class="form-control" value="{{$blog->title}}">
                    </div>

                    <div class="form-group">
                        <label >Description</label>
                        <textarea  name="blog_desc" class="form-control" rows="2">{{$blog->blog_desc}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>
                </section>
            </div>

        </div>
</section>
@stop


@section('js-script')

<script type="text/javascript">
        $(document).ready(function(){
             $('.form_datetime').datetimepicker({ 
                        pickTime: false,
                 });
            });

        </script>
@endsection