@extends('fontend.master')

@section('title')

@section('mainContent')
	
	<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>ডাউনলোড </h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{URL::to('/')}}">Home</a></li>
						<li>-</li>
						<li>Download Files</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->



			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix Syllabus-bg">
	        					<h3>ফাইল ডাউনলোড</h3>
	        				@if(!empty($importfiles))	 
	        					@foreach($importfiles as $importfile)
	        						
	        					<div class="sub-text margin-top10 white-bg import-showda notice">
	        						<div class="col-xs-3 col-sm-3 text-center down-left">
	        							<i class="fa fa-lg fa-file"></i>
	        							<br>
	        							<span>
	        								<small>{{$importfile->date_picker}}</small>
	        							</span>
	        						</div>
	        						<div class="col-xs-6 col-sm-6 download75">
	        							<span><strong><a class="notice-link" href="javascript:">
	        								{{$importfile->title}}
	        							</a></strong></span>
	        							
	        						</div>
	        						<div class="col-xs-3 col-sm-3 text-center download25">
	        							<a class="cloud-downloader" href="{{URL::to('asset/pdf/'.$importfile->import_file)}}" download="pdf">
	        								
	        								<i class="fa fa-cloud-download"></i>
	        							</a>
	        							<br><span class="">Download</span>
	        						</div>
	        					</div> <!-- /.sub-text -->
	        				@endforeach
	        			@endif	
	        				</div> <!-- /.event-details-content -->
	        			</div> <!-- /.col- -->
	        			
				<!-- _________________ SideBar _________________ -->
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne">
	        				<div class="wrapper">
	        					<!-- download sidebar include -->
	        				@include('fontend.layouts.includes.sidebars.download-sidebar')

	        				<!-- importent link sidebar include -->
	        				@include('fontend.layouts.includes.sidebars.quicklink-sidebar')
	        				
	        				</div> <!-- /.wrapper -->
	        			</div> <!-- /.sidebarOne -->
	        		</div>
	        	</div>
	        </div>

@stop