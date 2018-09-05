@extends('admin.layouts.master')
@section('title', 'School Settings List ')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Institute Info Settings
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
                                    <th>Institute Name</th>
                                    <th>Institute Email</th>
                                    <th>Institute Phone</th>
                                    <th>Institute Logo</th>  
                                    <th>Institute Address</th>  
                                    <th width="15%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                            @if(!empty($settingsInfo))    
                               @foreach ($settingsInfo as $setting)
                               <tr>
                                  <td>{{$setting->scl_name}}</td>
                                  <td>{{$setting->scl_email}}</td>
                                  <td>{{$setting->scl_phone}}</td> 
                                  <!-- institute logo show hera -->
                                  <td><img src="{{url('asset/logos/'.$setting->scl_logo)}}" class="img-rounded" alt="" width="60" height="60"/></td>
                                  <td>{{$setting->scl_address}}</td> 
                                  <td>
                                    <a  href="{{URL::to('/admin/institute/setting/edit/'.$setting->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="{{URL::to('/admin/institute/setting/delete/'.$setting->id)}}" onclick="return confirm('Are you sure you want to delete..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                  </td>
                                </tr>

                               @endforeach
                              @else 
                               <tr>
                              <td colspan="6" class=" text-center" style="font-size: 16px; padding: 10px; letter-spacing: 1px;">
                                <strong>No Records Found</strong> 
                              </td>
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

