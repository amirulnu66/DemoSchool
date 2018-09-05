@extends('admin.layouts.master')
@section('title', 'Dashboard Panel')

@section('content')
          <section class="wrapper site-min-height" style="background-color: #fff">
              <!-- page start-->
			
			  <!--//state-overview-->

              <div class="dashboard-inner" style="">
              <div class="row">
              	<div class="col-lg-12 col-md-12">             		
              		 <div class="row state-overview">
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/teachers/message/show')}}"><i class="fa fa-user"></i></a>
                          	<h4>Headmaster</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/member/show')}}"><i class="fa fa-users"></i></a>
                            <h4>Managing Committee</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                         <div class="panel-inner">
                              <a href="{{URL::to('/admin/slider/show')}}" ><i class="fa fa-th-large"></i></a>
                            <h4>Home Slide</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/page/show')}}"><i class="fa fa-sitemap"></i></a>
                            <h4>Class</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                         <div class="panel-inner">
                              <a href="{{URL::to('/admin/blog/show')}}" ><i class="fa fa-th-large"></i></a>
                            <h4>Gallery</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/page/show')}}" ><i class="fa fa-truck"></i></a>
                            <h4>Transport</h4>      
                          </div>
                      </section>
                  </div>
              </div><!--//state-overview-->
              	</div>
              </div>

              <div class="row">
              	<div class="col-lg-12 col-md-12">             		
              		 <div class="row state-overview">
                  
                  <div class="col-lg-2 col-sm-4">
                    <section class="panel shadow-line">
                          <div class="panel-inner">
                              <a href="{{URL::to('/admin/sports/show')}}" ><i class="fa fa-tasks"></i></a>
                            <h4>Sports</h4>      
                          </div>
                      </section>
                     
                  </div>
                  
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                        <div class="panel-inner">
                              <a href="{{URL::to('/admin/page/show')}}" ><i class="fa fa-outdent"></i></a>
                            <h4>Library</h4>      
                          </div>
                          
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                           <div class="panel-inner">
                              <a href="{{URL::to('/admin/page/show')}}" ><i class="fa fa-h-square"></i></a>
                            <h4>Hospital</h4>      
                          </div>
                      </section>
                  </div>
                   <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                           <div class="panel-inner">
                              <a href="{{URL::to('/admin/faq/show')}}" ><i class="fa fa-question"></i></a>
                            <h4>Faqs</h4>      
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                         <div class="panel-inner">
                            <a href="{{URL::to('/admin/subscribe/show')}}" ><i class="fa fa-check-square-o"></i></a>
                            <h4>Subscribers</h4>      
                          </div>
                          
                      </section>
                  </div>
                   <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                           <div class="panel-inner">
                              <a href="{{URL::to('/admin/message/show')}}" ><i class="fa fa-envelope"></i></a>    
                            <h4>Users Mail</h4>      
                          </div>
                      </section>
                  </div>
              </div><!--//state-overview-->
              	</div>
              </div>

              <div class="row">
              	<div class="col-lg-12 col-md-12">             		
              		 <div class="row state-overview">
                   <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                           <div class="panel-inner">
                              <a href="{{URL::to('/academic/fees/list')}}" ><i class="fa fa-money"></i></a>    
                            <h4>Academic Fees</h4>      
                          </div>
                      </section>
                  </div>
                   <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                           <div class="panel-inner">
                              <a href="{{URL::to('/admin/users/show')}}" ><i class="fa fa-user"></i></a>    
                            <h4>Users</h4>      
                          </div>
                      </section>
                  </div> 
                  <div class="col-lg-2 col-sm-4">
                      <section class="panel shadow-line">
                         <div class="panel-inner">
                            <a href="{{URL::to('/admin/institute/setting/edit')}}" ><i class="fa fa-wrench"></i></a>
                            <h4>Settings</h4>      
                          </div>
                      </section>
                    </div>
                  </div><!--//state-overview-->
              	</div>
              </div><!--.//row-->
            </div><!--//dashboard-inner-->
              <!-- page end-->
          </section>
@stop