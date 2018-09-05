@extends('admin.layouts.master')
@section('title', 'Home slider')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Create Home Slider
                    </header>
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/slider/store')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}

                    <div class="form-group">
                        <label>Slider Text</label>
                        <input type="text" name="slide_text" class="form-control"  required="">
                    </div>
                    
                     <div class="form-group">
                        <label >Slider Image</label>
                        <input type="file" name="slide_image" required="">
                    </div>

                    <div class="form-group">
                        <label>Slider Post Time</label>
                        <input type="text" name="date_picker" class="form-control form_datetime" placeholder="post Time" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Slider Position </label>
                        <select class="form-control" name="position" required="">
                            <option value="">Select Position</option>
                            @for($i=0; $i<10; $i++)
                                  <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
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