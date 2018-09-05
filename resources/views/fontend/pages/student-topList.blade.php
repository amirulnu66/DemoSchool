@extends('fontend.master')

@section('title')

@section('mainContent')
	
	<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2> আমাদের স্কুলের সেরা ছাত্র ছাত্রী</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->
			
			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Class Topper</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix stud-tope-list">
	        					<h3> ক্লাস টোপার</h3>
	        					<div class="col-md-12">
	        					  <div class="row">
	        						<div class="sub-text student-toper">
	        						@if($academicTopper AND count($academicTopper)>1)
                    					@foreach($academicTopper as $topper)		
		        						<div class="single-post col-lg-2 col-md-2 col-sm-4 col-xs-4">
				        					<div class="img-holder">
				        						<img src="{{$topper->photo}}" alt="Image">
				        						<a href="blog-details.html" class="tran4s"></a>
				        					</div>
				        					<div class="text-wrapper text-wrapper-name">
				        						<div class="text tran4s">
				        							<a href="javascript:">Name:{{$topper->name}} </a>
				        							<p>Roll:{{$topper->gr_no}} </p>
				        						</div> <!-- /.text -->
				        					</div> <!-- /.text-wrapper -->
		        						</div> <!-- /.single-post -->

		        					  @endforeach
                					@else   

						            <h5 class="text-center" style="font-size: 16px; padding: 10px; letter-spacing: 1px;">
						                <strong>No Records Found</strong> 
						            </h5>
						   
						        @endif
		        					</div> <!-- /.sub-text -->
	        					</div><!--//row-->	
	        					
	        					</div><!--//col-md-12-->
	        				</div> <!-- /.event-details-content -->
	        			</div> <!-- /.col- -->
	        			
				<!-- _________________ SideBar _________________ -->
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne">
	        				<div class="wrapper">
	        					<!-- Notice sidebar include -->
								@include('fontend.layouts.includes.sidebars.notice-sidebar')

								<!-- side bar downloads section include -->
								@include('fontend.layouts.includes.sidebars.download-sidebar')

	        				</div> <!-- /.wrapper -->
	        			</div> <!-- /.sidebarOne -->
	        		</div>
	        	</div>
	        </div>

@stop