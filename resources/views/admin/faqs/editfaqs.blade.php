@extends('admin.layouts.master')
@section('title', 'Faqs Edit')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Update FAQs Information here..
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/faq/update')}}">
                       {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$faqs->id}}">
                       <div class="form-group">
                        <label>Faqs name</label>
                        <input type="text"  name="qus_name" class="form-control" value="{{ $faqs->qus_name }}">
                    </div>

                    <div class="form-group">
                        <label>Faqs Answer</label>
                        <textarea class="form-control" name="qus_ans">{{$faqs->qus_ans}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>
                </section>
            </div>

        </div>
</section>
@stop