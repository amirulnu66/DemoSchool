@extends('admin.layouts.master')
@section('title', 'Pages List ')
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
                     Displaying Related Pages List
                    <span class="tools pull-right">
                      
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                
             </span>
                    </header>
                    @if(Session::has('message'))
                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif 

                <div class="panel-body">    
                    
                    <table class="table table-striped text-center">
                                <thead>
                                  <tr>
                                    <th>Id</th>
                                    <th>Page Title</th>
                                    <th>Text Heading One</th>
                                    <th>Text Heading Two</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                            @if(!empty($pageInfo)) 
                                @foreach($pageInfo as $index=>$pagedata)
                                  <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$pagedata->page_title}}</td>
                                    <td>{{$pagedata->heading_one}}</td>
                                    <td>{{$pagedata->heading_two}}</td>
                                    <td>
                                        <a href="{{url('/admin/page/edit/'.$pagedata->id)}}" name="btn" class="btn btn-info" title="Edit"><i class="fa fa-pencil icon-resize-small"></i></a>

                                        <a href="{{url('/admin/page/delete', ['id' =>$pagedata->id])}}" name="btn" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" title="Delete"><i class="fa fa-times icon-resize-small"></i></a>

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

