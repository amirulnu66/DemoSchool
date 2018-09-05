@extends('admin.layouts.master')
@section('title', 'Create Academic Fees')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Create Academic Fees
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
                        <form role="form" method="post" action="{{URL::to('/academic/fees/store')}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
 
                            <div class="form-group">
                                <label>Class Name</label>
                                <input type="text"  name="class_name" class="form-control" required="">
                            </div> 
                            <div class="form-group">
                                <label>Month Fees</label>
                                <input type="text" name="month_fees" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Session Fees </label>
                                <input type="text"  name="session_fees" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Admission Fees</label>
                                <input type="text"  name="admission_fees" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Admission Form Fees</label>
                                <input type="text"  name="form_fees" class="form-control" required="">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop
