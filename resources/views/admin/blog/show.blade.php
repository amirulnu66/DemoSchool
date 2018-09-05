@extends('admin.layouts.master')
@section('title', 'School Gallery List ')
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
                        Gallery Post List
                        <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        
                     </span>
                    </header>
                      @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                     @endif
               
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped text-center" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>SL. No.</th>
                                    <th>Photo</th>
                                    <th>Gallery Title</th>
                                    <th>Short Title</th>                                   
                                    
                                    <th>Description</th>

                                    <th width="15%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                             @if(!empty($galleryInfo))   
                               @foreach($galleryInfo as $index=>$gallery)
                               <tr>
                                  <td>{{ $index+1 }}</td>
                                  <td>
                                    <img src="{{url('asset/gallery/'.$gallery->blog_image)}}" class="img-rounded" alt="" width="60" height="60"/></td>
                                  <td>{{ $gallery->blog_title }}</td>
                                  <td>{{ $gallery->title }}</td>
                                  <td> <span class="">{{$gallery->blog_desc}}</span></td>
                                   
                                  <td>                                   
                                    <a  href="{{URL::to('/admin/blog/update/'.$gallery->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="{{URL::to('/admin/blog/delete/'.$gallery->id)}}" onclick="return confirm('Are you sure you want to delete this..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                  </td>
                                </tr>

                               @endforeach

                            @else
                              <tr>
                                <td colspan="6"><strong>No Records Found</strong></td>
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

