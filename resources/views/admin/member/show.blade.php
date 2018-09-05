@extends('admin.layouts.master')
@section('title', 'Governing Member List ')
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
                        Manage Governing Members
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
                                    <th>Member Name</th>
                                    <th>Designation</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                              @if(!empty($members)) 
                               @foreach ($members as $index=>$member)
                               <tr>
                                   <td>{{ $index+1 }}</td>
                                   <td>{{$member->member_name}}</td>
                                   <td>{{$member->member_desi}}</td>
                                   <td>{{$member->member_desc}}</td>

                                    <td><img src="{{url('asset/members/'.$member->member_image)}}" class="img-rounded" alt="" width="60" height="60"/></td>
                                   
                                   <td>
                                   
                                    <a  href="{{URL::to('/admin/member/edit/'.$member->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="{{URL::to('/admin/member/delete/'.$member->id)}}" onclick="return confirm('Are you sure you want to delete this ..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                   </td>
                                </tr>

                               @endforeach
                            @else
                              <tr>
                                <td colspan="5"><strong>No Records Found</strong></td>
                              </tr>
                            @endif  

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

