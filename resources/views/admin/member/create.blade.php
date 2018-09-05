@extends('admin.layouts.master')
@section('title', 'governing body')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Create Governing Member
                    </header>
                     @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/member/store')}}" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       <div class="form-group">
                        <label>Page Route</label>
                    <input type="text"  name="name_slug" class="form-control" required="">
                    </div>

                     <div class="form-group">
                        <label>Member Name</label>
                        <input type="text"  name="member_name" class="form-control" required="">
                    </div> 

                    <div class="form-group">
                        <label>Designation</label>
                    <input type="text"  name="member_desi" class="form-control" required="">
                    </div>              

                    <div class="form-group">
                        <label >Photo</label>
                        <input type="file"  name="member_image" required="">
                    </div>

                     <div class="form-group">
                        <label>Select Position</label>
                        <select class="form-control" name="position" required="">
                            <option value="">Select Position</option>
                            @for($i=0; $i<15; $i++)
                                  <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label >Description</label>
                        <textarea  name="member_desc" class="form-control" rows="2"></textarea>
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>
                </section>
            </div>

        </div>
</section>
@stop