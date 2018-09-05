@extends('admin.layouts.master')
@section('title', 'Received all mail')
@section('stylesheet')
    <link href="{{URL::to('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/assets/data-tables/DT_bootstrap.css')}}" rel="stylesheet">

@stop
@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                       Public User's Mail list
                        <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                       
                     </span>
                    </header>
                      @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                  <th>SL. No.</th>
                                  <th>User Name</th>
                                  <th>User Email</th>
                                  <th>User Description</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                               <tbody>
                               @php
                                   $i = 1;
                               @endphp
                               @foreach ($usersendMails as $sendMail)
                               <tr>
                                   <td>{{ $i++ }}</td>
                                   <td>{{$sendMail->name}}</td>
                                   <td>{{$sendMail->email}}</td>
                                   <td>{{$sendMail->message}}</td>

                                    <td>
                                       <a href="{{URL::to('/admin/message/delete/'.$sendMail->id)}}" onclick="return confirm('Are you sure you want to delete this Mail..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                   </td>
                                </tr>

                               @endforeach

                               </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            {{ $usersendMails->render() }}
        </div>
    </section>
@stop
@section('js-script')
    <script src="{{URL::to('admin/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::to('admin/assets/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{URL::to('admin/js/dynamic_table_init.js')}}"></script>
@stop


