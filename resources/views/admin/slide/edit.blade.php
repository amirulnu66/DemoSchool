@extends('admin.layouts.master')
@section('title', 'Home Slider')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                      Update Slider Information here.......
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/slider/update')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$slider->id}}">

                       <div class="form-group">
                        <label>Slider Text</label>
                        <input type="text"  name="slide_text" class="form-control" value="{{$slider->slide_text}}">
                    </div>

                    <div class="form-group">
                        <label>Post Time</label>
                        <input type="text"  name="date_picker" class="form-control form_datetime" value="{{ date('Y-m-d H:i',strtotime($slider->date_picker)) }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="edit-image50">Slider Image</label>
                         
                        <input type="file" name="slide_image" id="exampleInputFile">                  
                   </div>

                    <div class="form-group">
                        <label>Position of Slider</label>
                        <input type="text"  name="position" class="form-control" value="{{$slider->position}}">
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