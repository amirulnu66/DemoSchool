@extends('admin.layouts.master')
@section('title', 'School Home Slider ')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                        Manage Slider here..
                   
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
                                    
                                    <th>Slider Title</th>
                                    <th>Slider Image</th>
                                    <th>Postition</th>        
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                            @if(!empty($slideInfo))  
                               @foreach ($slideInfo as $slider)
                               <tr>
                                   <td>{{$slider->slide_text}}</td>
                                   
                                    <td><img src="{{url('asset/slide/'.$slider->slide_image)}}" class="img-rounded" alt="" width="100" height="60"/></td>

                                    <td>{{$slider->position}}</td>
                                   
                                   <td>
                                   
                                       <a  href="{{URL::to('/admin/slider/edit/'.$slider->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('admin/slider/delete/'.$slider->id)}}" onclick="return confirm('Are you sure you want to delete this slider..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                   </td>
                                </tr>

                               @endforeach
                            @else
                              <tr>
                                <td colspan="4"><strong>No Records Found</strong></td>
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


