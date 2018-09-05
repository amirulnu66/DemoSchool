@extends('fontend.master')

@section('title')

@section('mainContent')
	
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>স্কুল ল্যাবরেটরি</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Laboratory</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->



			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix">
	        					<img src="{{ asset('fontend') }}/images/inner-page/22.jpg" alt="Image">
	        					<h3>ভেনাস স্কুল ল্যাবরেটরি</h3>

	        					<div class="sub-text">
	        						<h4>খেলার বিবরণ</h4>
	        						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	        					</div> <!-- /.sub-text -->
	        					<div class="sub-text">
	        						<h4>খেলার ফলাফল</h4>
	        						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
	        						<ul class="event-output-list">
	        							<li><i class="fa fa-graduation-cap" aria-hidden="true"></i> A delightful way to teach kids about computers</li>
	        							<li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Our campaign to ban plastic bags in Bali</li>
	        							<li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Over 43 lectures and 60 hours of content </li>
	        						</ul>
	        					</div> <!-- /.sub-text -->
	        					
	        				</div> <!-- /.event-details-content -->
	        			</div> <!-- /.col- -->
	        			
				<!-- _________________ SideBar _________________ -->
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne">
	        				<div class="wrapper">
	        					<div class="sidebar-box sidebar-search">
		        						<div class="box-wrapper">
		        							<form action="#">
		        								<input type="text" placeholder="Search">
		        								<button><i class="fa fa-search" aria-hidden="true"></i></button>
		        							</form>
		        						</div> <!-- /.box-wrapper -->
		        					</div> <!-- /.sidebar-box.sidebar-search -->
	        					
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