@extends('admin.layouts.master')
@section('title', 'industry List ')
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
                      Show All Indrustry
                        <span class="tools pull-right">
                      }
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>SL. No.</th>
                                    <th>industry Name</th>
                                    <th>industry Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                               <tbody>
                               @php
                                   $i = 1;
                               @endphp
                               @foreach ($industrys as $key=>$industry)
                               <tr>
                                   <td>{{ $i++ }}</td>
                                    <td>{{$industry->page_name}}</td>
                                    <td>{{$industry->type}}</td>
                               

                                   <td>
                                       <a  href="{{URL::to('admin/industry/edit/'.$industry->page_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('admin/industry/delete/'.$industry->page_id)}}" onclick="return confirm('Are you sure you want to delete this industrys');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                   </td>
                                </tr>

                               @endforeach

                               </tbody>
                            </table>
                        </div>
                    </div>
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

