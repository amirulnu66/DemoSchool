@extends('admin.layouts.master')
@section('title', 'Update governing member info')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Update Info of Governing Member
                    </header>
                 @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
               @endif

                    <div class="panel-body">
                <form role="form" method="post" action="{{URL::to('/admin/member/update')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $memberData->id}}">
                       <div class="form-group">
                        <label>Page Slug</label>
                    <input type="text"  name="name_slug" class="form-control" value="{{$memberData->name_slug}}">
                    </div>

                     <div class="form-group">
                        <label>Member Name</label>
                        <input type="text"  name="member_name" class="form-control" value="{{$memberData->member_name}}" >
                    </div> 

                    <div class="form-group">
                        <label>Designation</label>
                    <input type="text"  name="member_desi" class="form-control" value="{{$memberData->member_desi}}" >
                    </div>              

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="edit-image50">Member's Photo </label>
                        <input type="file"  name="member_image">
                    </div>

                    <div class="form-group">
                        <label> Position</label>
                        <select class="form-control" name="position">
                            <option value="{{$memberData->id}}">{{$memberData->position}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Update Position </label>
                        <select class="form-control" name="position" required="">
                            <option value="">Select Position</option>  
                            @for($i=0; $i<=15; $i++)
                               <option value="{{$i}}">{{$i}}</option>
                            @endfor                                       
                        </select>
                    </div>

                    <div class="form-group">
                        <label >Member Description</label>
                        <textarea  name="member_desc" class="form-control" rows="2">{{$memberData->member_desc}}</textarea>
                    </div>


                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>
                </section>
            </div>

        </div>
</section>
@stop