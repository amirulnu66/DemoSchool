@extends('admin.layouts.master')
@section('title', 'Mission Vision List')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                        Manage Mission Vision here..
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
                                    <th>Text Heading 1</th>
                                    <th>Text Heading 2</th>
                                    <th>Description</th>
                                    <th width="8%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                            @if(!empty($missions))   
                               @foreach ($missions as $index=>$mission)
                               <tr>
                                   <td>{{ $index+1 }}</td>
                                   <td>{{$mission->title}}</td>
                                   <td>{{$mission->sort_title}}</td>
                                   <td>{{$mission->mission_desc}}</td>  
                                   <td>
                                        <!-- pass tha id into edit page -->
                                       <a  href="{{URL::to('/admin/mission/vision/update/'.$mission->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('/admin/mission/vision/delete/'.$mission->id)}}" onclick="return confirm('Are you sure you want to delete this..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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


