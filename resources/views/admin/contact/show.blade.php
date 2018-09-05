@extends('admin.layouts.master')
@section('title', 'Contact List ')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                        Contact List
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
                                    <th>Page Title</th>
                                    <th>Title</th>
                                    <th>Summary</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                               <tbody>
                            @if(!empty($contactInfo))  
                               @foreach ($contactInfo as $contact)
                               <tr>
                                   
                                   <td>{{$contact->contact_title}}</td>
                                   <td>{{$contact->title}}</td>
                                   <td>{{$contact->summary}}</td>

                                   <td>
                                   <a  href="{{URL::to('/admin/contact/update/'.$contact->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil icon-resize-small"></i></a>
                                       <a href="{{URL::to('admin/contact/delete/'.$contact->id)}}" onclick="return confirm('Are you sure you want to delete this contact..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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


