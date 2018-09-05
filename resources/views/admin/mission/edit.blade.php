@extends('admin.layouts.master')
@section('title', 'Mission/Vision Information')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Update Mission-Vision Info here...
                    </header>

                   @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif
                    <div class="panel-body">
                        <form action="{{URL::to('/admin/mission/vision/update')}}" method="post" role="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            
                            <input type="hidden" name="id" value="{{$mission->id}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 1</label>
                                <input class="form-control" name="title" id="exampleInputEmail1" value="{{$mission->title}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Text Heading 2</label>
                                <input class="form-control" name="sort_title" id="exampleInputEmail1" value="{{$mission->sort_title}}">
                            </div>
                            <div class="form-group">
                              <label >Description</label>
                              <textarea  name="mission_desc" class="form-control" rows="5" required="">{{$mission->mission_desc}}</textarea>
                          </div>


                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop