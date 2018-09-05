@extends('admin.layouts.master')
@section('title', 'Academic Fees Update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Manage Academic Fees
                    </header>
                        @if(Session::has('success'))
                       <div id="w0-success-0" class="alert-success alert-auto-hide alert fade in" style="opacity: 423.642;">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <h4><i class="icon fa fa-check"></i> {{ Session::get('success') }} </h4>
                       </div>
                       @elseif(Session::has('feiled'))
                           <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               <h4><i class="icon fa fa-check"></i> {{ Session::get('feiled') }} </h4>
                           </div>
                       @endif

                    <div class="panel-body">
                        <form role="form" method="post" action="{{URL::to('/academic/fees/update')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" value="{{$fees->id}}">

                            <div class="form-group">
                                <label>Class Name</label>
                                <input type="text"  name="class_name" class="form-control" value="{{$fees->class_name}}">
                            </div> 
                            <div class="form-group">
                                <label>Month Fee</label>
                                <input type="text" name="month_fees" class="form-control" value="{{$fees->month_fees}}">
                            </div>
                            <div class="form-group">
                                <label>Session Fee </label>
                                <input type="text"  name="session_fees" class="form-control" value="{{$fees->session_fees}}">
                            </div>
                            <div class="form-group">
                                <label>Admission Fee</label>
                                <input type="text"  name="admission_fees" class="form-control" value="{{$fees->admission_fees}}">
                            </div>
                            <div class="form-group">
                                <label>Admission Form </label>
                                <input type="text"  name="form_fees" class="form-control" value="{{$fees->form_fees}}">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop
