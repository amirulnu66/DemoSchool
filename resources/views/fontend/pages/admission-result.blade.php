@extends('fontend.master')

@section('title')

@section('mainContent')
	
	
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>ভর্তি ফলাফল </h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Admission Result</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->



			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix stud-tope-list">
	        					<h2 class="text-center">ভর্তি ফলাফল শীঘ্রই আপলোড করা হবে </h3>
	        					<!-- <h3> স্কুলে ভর্তির জন্য তথ্য </h3> -->
			
	        				</div> <!-- /.event-details-content -->
	        			</div> <!-- /.col- -->
	        			
				<!-- _________________ SideBar _________________ -->
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne">
	        				<div class="wrapper">
	        					
		        				<!--importent link section include  -->
								@include('fontend.layouts.includes.sidebars.quicklink-sidebar')

	        					<!-- events sidebar include -->
	        					@include('fontend.layouts.includes.sidebars.event-sidebar')

	        					
	        				</div> <!-- /.wrapper -->
	        			</div> <!-- /.sidebarOne -->
	        		</div>
	        	</div>
	        </div>

@stop