@extends('fontend.master')

@section('title')

@section('mainContent')
	
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
					@if(!empty($pageInfo))
						<h2>{{ $pageInfo->page_title}}</h2>
						@endif
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						@if(!empty($pageInfo))
						<li>{{$pageInfo->breadcamp}}</li>
						@endif
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				@if(!empty($pageInfo))
	        				<div class="event-details-content clear-fix">
	        					@if(!empty($pageInfo->main_image))
	        						<img src="{{url('/asset/pages/'.$pageInfo->main_image)}}" alt="Image">
	        					@endif
	        					<h3>{{$pageInfo->heading_one}}</h3>

	        					<div class="sub-text">
	        						<h4>{{$pageInfo->heading_two}}</h4>
	        						<p>{{$pageInfo->paragraph}}</p>
	        					</div> <!-- /.sub-text -->
	        					
	        				</div> <!-- /.event-details-content -->
	        				@endif
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
