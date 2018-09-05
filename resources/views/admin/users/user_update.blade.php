@extends('admin.layouts.master')
@section('title', 'User Update')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    User Update From
                </header>

                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif
                <div class="panel-body">
                    <form action="{{URL::to('/admin/users/update/'.$userInfo->id)}}" method="post" role="form">
                        <!-- <input type="hidden" name="id" value="{{$userInfo->id}}"> -->
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input class="form-control" value="{{$userInfo->name}}" name="name" id="exampleInputEmail1" type="text">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input class="form-control" name="email" value="{{$userInfo->email}}" id="email" type="email">
                        </div>

                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>

                </div>
            </section>
        </div>

    </div>
</section>
@stop