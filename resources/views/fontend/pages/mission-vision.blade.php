@extends('fontend.master')

@section('title')

@section('mainContent')
	<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>মিশন ও ভিশন</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Mission & Vision</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix">
	        					<h3>মিশন ও ভিশন</h3>
	        			@if(!empty($missionInfo))		
	        				@foreach($missionInfo as $mission)	
	        					<div class="sub-text">
	        						<h4>{{$mission->title}}</h4>
	        						<h5 style="font-style: italic;">{{$mission->sort_title}} </h5>
	        						<p>{{$mission->mission_desc}}</p>
	        					</div> <!-- /.sub-text -->
	        					@endforeach
	        			@endif		
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