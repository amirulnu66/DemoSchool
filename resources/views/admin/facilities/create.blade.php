@extends('admin.layouts.master')
@section('title', 'Teacher Create')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                    Create Teacher's here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/teachers/store')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}

                       <div class="form-group">
                        <label>Page Route</label>
                        <input type="text"  name="faci_slug" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label>Name </label>
                        <input type="text"  name="faci_name" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label>Image input</label>
                        <input type="file"  name="faci_image" required="">
                    </div>

                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea  name="faci_desc" class="form-control" rows="2"></textarea>
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