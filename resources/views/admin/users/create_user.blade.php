@extends('admin.layouts.master')
@section('title', 'User Create')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Create Admin User
                    </header>
                      @if(Session::has('message'))
                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif
                   
                    <div class="panel-body">
                        <form action="{{url('/admin/users/store')}}" method="post" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Full Name" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" name="email" id="email" placeholder="Enter Email Address" type="email" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" type="password" required="">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop