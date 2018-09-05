@extends('fontend.master')

@section('title')

@section('mainContent')
	
	<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>পাবলিক পরীক্ষার ফলাফল</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum teacher-banner">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Result</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

	        <!-- Event Section _______________________ -->
	        <div class="popular-course wow fadeInUp theme-bg-color teacher-course">

	        	<div class="container">
	        		<div class="row">
	        			<!--MAIN CONTENT-->
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="row latest-news blog-v1 student-panel last3year-result">
	        				  <h3 class="class-routine-title public-result-title">বিগত তিন বছরের পাবলিক পরীক্ষার ফলাফল</h3>
					      		@include('fontend.layouts.includes.result.public-exam-result')
						  </div><!--//student-panel-->
	        			</div> <!-- /.col-12- -->
	        			<!--//MAIN CONTENT-->
				<!-- _________________ SideBar _________________ -->
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne float-left faq wow fadeInRight">
	        				<div class="wrapper">
	        					
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
