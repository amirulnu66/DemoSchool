@extends('admin.layouts.master')
@section('title', 'All Teachres ')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                        Manage Teachers
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
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>

                                    <th width="15%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                               @php
                                   $i = 1;
                               @endphp
                               @foreach($facilities as $facilitie)
                               <tr>
                                   <td>{{ $i++ }}</td>
                                   
                                   <td>{{ $facilitie->faci_name }}</td>
                                   <td><img src="{{asset('asset/gallery/'.$facilitie->faci_image) }}" class="img-rounded" alt="" width="60" height="60"/></td>

                                   <td> <span class="">{{ $facilitie->faci_desc }}</span></td>
                                   
                                   <td>
                                    <a  href="{{URL::to('/admin/teachers/edit/'.$facilitie->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="{{URL::to('/admin/teachers/delete/'.$facilitie->id)}}" onclick="return confirm('Are you sure you want to delete this..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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

