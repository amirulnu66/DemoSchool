@extends('admin.layouts.master')
@section('title', 'Faqs Create')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Create FAQs Post
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/faq/store')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}

                       <div class="form-group">
                        <label>Faqs Name</label>
                        <input type="text"  name="qus_name" class="form-control"  required="">
                    </div>

                     <div class="form-group">
                        <label>Position</label>
                        <select class="form-control" name="sort_list" required="">
                            <option value="">Select Position</option>
                            <option value="1">Left</option>
                            <option value="2">Right</option>
                        </select>
                    </div>

                      <div class="form-group">
                        <label>Sorting Order</label>
                        <select class="form-control" name="position" required="">
                            <option value="">Select Position</option>
                            @for($i=0; $i<20; $i++)
                                  <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Faqs Answer</label>
                        <textarea class="form-control" name="qus_ans" required=""></textarea>
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>
                </section>
            </div>

        </div>
</section>
@stop