@extends('admin.layouts.master')
@section('title', 'Create School Gallery')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Create School Gallery
                    </header>
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/blog/store')}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">

                       <div class="form-group">
                        <label>Page Route</label>
                        <input type="text"  name="blog_slug" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label>Gallery Title</label>
                        <input type="text"  name="blog_title" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label>Post Time</label>
                        <input type="text"  name="date_picker" class="form-control form_datetime" required="">
                    </div>

                    <div class="form-group">
                        <label >Gallery Photo</label>
                        <input type="file"  name="blog_image" required="">
                    </div>

                    <div class="form-group">
                        <label>Gallery Name </label>
                        <input type="text" id="order" name="title" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label >Description</label>
                        <textarea  name="blog_desc" class="form-control" rows="4" required=""></textarea>
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