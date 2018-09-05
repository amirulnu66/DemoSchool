@extends('admin.layouts.master')
@section('title', 'Create Import file')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Excel / PDF / Doc File Post here
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/filedownloads/store')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}

                    <div class="form-group">
                        <label>Import File Name</label>
                        <input type="text"  name="title" class="form-control" placeholder="Import file  Name" required="">
                    </div>

                    <div class="form-group">
                        <label>Post Time</label>
                        <input type="text"  name="date_picker" class="form-control form_datetime" placeholder="post Time">
                    </div>
                    <div class="form-group">
                        <label>Select Position</label>
                        <select class="form-control" name="position" required="">
                            <option value="">Select Position</option>
                            @php $i=0; @endphp
                            
                            @for($i=0;$i<=1;$i++)
                                <option value="{{$i}}">{{$i}}</option> 
                            @endfor  

                        </select>
                    </div>

                    <div class="form-group">
                        <label >Import File  pdf/ excel / word</label>
                        <input type="file"  name="import_file" required="">
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