@extends('admin.layouts.master')
@section('title', 'Teacher update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                    Update Information here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/teachers/update')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       <input type="hidden" name="id" value="{{ $facilitieinfo->id }}">

                    <div class="form-group">
                        <label>Page Route</label>
                        <input type="text" name="faci_slug" class="form-control" value="{{ $facilitieinfo->faci_slug }}">
                    </div>
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" name="faci_name" class="form-control" value="{{ $facilitieinfo->faci_name }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="edit-image50">Picture</label>
                         <img src="{{url('asset/gallery/'.$facilitieinfo->faci_image)}}" width="60" height="60">
                        <input type="file" name="faci_image">
                    </div>

                    <div class="form-group">
                        <label>Short Description </label>
                        <textarea  name="faci_desc" class="form-control" rows="1">{{ $facilitieinfo->faci_desc }}</textarea>
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