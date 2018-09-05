@extends('admin.layouts.master')
@section('title', 'Faqs list ')

@section('content')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                        All Faqs list
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
                                    <th>Faqs Name</th>
                                    <th>Question Answer</th>
                                    <th>Order List</th>
                                    <th>Position</th>                                  
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                             @if(!empty($allfaqs))  
                               @foreach ($allfaqs as $index=>$faq)
                               <tr>
                                   <td>{{ $index+1 }}</td>
                                   <td>{{$faq->qus_name}}</td>
                                   <td>{{$faq->qus_ans}}</td>
                                   <td>{{$faq->sort_list}}</td>
                                   <td>{{$faq->position}}</td>
                                   
                                   <td>
                                   
                                       <a  href="{{URL::to('/admin/faq/edit/'.$faq->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                       <a href="{{URL::to('/admin/faq/delete/'.$faq->id)}}" onclick="return confirm('Are you sure you want to delete this ..?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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


