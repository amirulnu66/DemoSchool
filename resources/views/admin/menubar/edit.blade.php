@extends('admin.layouts.master')
@section('title', 'User Create')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Create Menubar
                    </header>

                    @if(Session::has('msg'))
                        {{Session::get('msg')}}
                    @endif
                    <div class="panel-body">
                        <form action="{{URL::to('admin/menubar/store')}}"  enctype="multipart/form-data" method="post" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Menu Name:</label>
                                <input class="form-control" name="menu_name" id="exampleInputEmail1" placeholder="Enter menubar Name" type="text">
                            </div>

                            <div class="form-group">
                             <label for="exampleInputEmail1">Select Menu:</label>
                               <select name="parent_id" class="form-control m-bot15">
                                 <option value="0">Main Menu</option>
                                 @foreach($menus as $menu)
                                <option value="{{$menu->id}}">{{$menu->menu_name}}</option>
                                 @endforeach
                               </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Menu Link:</label>
                                <input class="form-control" name="menu_link" id="exampleInputEmail1" placeholder="Enter menubar Name" type="text">
                            </div>

                            <div class="form-group">
                             <label for="exampleInputEmail1">Select Page:</label>
                               <select name="select_page_id" class="form-control m-bot15">
                                  <option value="0">Select Page Name</option>
                                  <option value="3">Nayon</option>
                                  <option value="5">Sero Category</option>
                                  </select>
                            </div>


                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop