@extends('fontend.master')

@section('title')

@section('mainContent')
		<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>ব্যবস্থাপনা কমিটি</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum teacher-banner">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Governing Body</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

	        <!-- Event Section _______________________ -->
	        <div class="popular-course wow fadeInUp theme-bg-color teacher-course">

	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="row latest-news blog-v1 teachers-panel">
	        					<h2>স্কুল ব্যবস্থাপনা কমিটি</h2>
	        						<hr>
	        		@if(!empty($members))				
	        					<div class="course-item-wrapper">
	        			@foreach($members as $member)
	        					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
			        				<div class="hvr-float-shadow single-course-item">
				        				<div class="img-holder"><img src="{{URL::to('asset/members/'.$member->member_image)}}" alt="Image" width="250"></div>
				        				<div class="text">
				        					<h4><a href="javascript:">{{$member->member_desi}}</a></h4>
				        					<h6>{{$member->member_name}}</h6>
				        					<div class="clear-fix">
				        						<!-- <p>{{$member->member_desc}}</p> -->
				        						<a href="javascript:" class="tran3s p-color-bg themehover">View</a>
				        					</div>
				        				</div> <!-- /.text -->
			        				</div>
			        			</div> <!-- /.item -->
			        		
			        		@endforeach
			        		</div> <!-- /.course-slider -->
			        	@else
		        		<h5 class="text-center" style="font-size: 16px; padding: 10px; letter-spacing: 1px;">
							<strong>No Records Found</strong> 
						</h5>	
	        		@endif			
							</div>
	        			</div> <!-- /.col- -->
	        			
				<!-- _________________ SideBar _________________ -->
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne float-left faq wow fadeInRight">
	        				<div class="wrapper">
	        					
	        				<!-- Notice sidebar include -->
							@include('fontend.layouts.includes.sidebars.notice-sidebar')

							<!-- side bar downloads section include -->
							@include('fontend.layouts.includes.sidebars.download-sidebar')
							
							<!--importent link section include  -->
							@include('fontend.layouts.includes.sidebars.quicklink-sidebar')
	        					
	        				</div> <!-- /.wrapper -->
	        			</div> <!-- /.sidebarOne -->
	        		</div>
	        	</div>
	        </div>

@stop