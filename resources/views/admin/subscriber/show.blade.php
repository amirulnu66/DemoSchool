@extends('admin.layouts.master')
@section('title', 'subcriber List ')
@section('stylesheet')
    <link href="{{URL::to('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/assets/data-tables/DT_bootstrap.css')}}" rel="stylesheet">

@stop
@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Subscribers List here...
                        <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                
             </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                  <th>SL. No.</th>
                                  <th>Email</th>
                                  <th>Time </th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                               <tbody>
                               @php
                                   $i = 1;
                               @endphp
                              @foreach($subscribers as $subscriber)
                               <tr>
                                 <td>{{ $i++ }}</td>
                                 <td>{{$subscriber->sub_email}}</td>
                                 <td>{{$subscriber->created_at}}</td>
                                 <td>
                                  <a href="{{URL::to('/admin/subscribe/delete/'.$subscriber->id)}}" onclick="return confirm('Are you sure you want to delete this subcriber');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                 </td>
                               </tr>
                              @endforeach 
                               </tbody>
                            </table>
                        </div>
                   </div>
                  {{ $subscribers->render()}}
                </section>
            </div>

        </div>
    </section>
@stop
@section('js-script')
    <script src="{{URL::to('admin/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::to('admin/assets/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{URL::to('admin/js/dynamic_table_init.js')}}"></script>
    @stop


