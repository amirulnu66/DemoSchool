@extends('admin.layouts.master')
@section('title', 'Update Import file')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Update PDF/ Excel Import File here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/filedownloads/update')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       <input type="hidden" name="id" value="{{ $import->id }}">
                    <div class="form-group">
                        <label>Import File Name</label>
                        <input type="text"  name="title" class="form-control" value="{{ $import->title }}">
                    </div>

                    <div class="form-group">
                        <label>Post Time</label>
                        <input type="text"  name="date_picker" class="form-control form_datetime" value="{{date( 'Y-m-d H:i',strtotime($import->date_picker))}}">
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <select class="form-control" name="position">                           
                            <option value="{{$import->position}}">{{$import->position}}</option>                     
                        </select>
                    </div>
                     <div class="form-group">
                        <label>Update Position</label>
                        <select class="form-control" name="position" required="">
                            <option value="">Select Position</option> 
                            @for($i=0; $i<=1; $i++)
                               <option value="{{$i}}">{{$i}}</option>
                            @endfor                                       
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="edit-image50">Update pdf/ excel/ word Import File</label>
                        
                        <input type="file"  name="import_file">
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