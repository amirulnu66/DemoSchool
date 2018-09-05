@extends('fontend.master')

@section('title')

@section('mainContent')
	<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>খেলাধুলা</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Sports</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->



			<div class="course-page-single course-v1">
				

		        <!-- Popular Course _________________________ -->
		        <div class="popular-course wow fadeInUp theme-bg-color">
		        	<div class="container">
		        		<div class="row">
			        		<div class="course-item-wrapper">
			        	@if(!empty($sportslist))		
			        		@foreach($sportslist as $sport)	
			        			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
			        				<div class="hvr-float-shadow single-course-item">
				        				<div class="img-holder"><img src="{{ asset('asset/gallery/'.$sport->sports_image) }}" alt="Image" width="370" height="250"></div>
				        				<div class="text">
				        					<h4><a href="javascript:">{{$sport->sports_title}}</a></h4>
				        					
				        					<h6>{{$sport->sports_name}}</h6>
				        					<ul>
				        						<li><i class="fa fa-star" aria-hidden="true"></i></li>
				        						<li><i class="fa fa-star" aria-hidden="true"></i></li>
				        						<li><i class="fa fa-star" aria-hidden="true"></i></li>
				        						<li><i class="fa fa-star" aria-hidden="true"></i></li>
				        						<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				        					</ul>
				        					<p>{{$sport->sports_desc}}</p>

				        				</div> <!-- /.text -->
			        				</div>
			        			</div> <!-- /.item -->
			        		@endforeach	
			        	@endif		
			        		</div> <!-- /.course-slider -->
			        		{{ $sportslist->render() }}
			        	</div> <!-- /.row -->

			        	<!-- __________________________ Page Indicator __________________ -->
			        	<!-- <div class="page-indicator">
			        		
			        	</div> -->
		        	</div> <!-- /.container -->
		        </div> <!-- /.popular-course -->
			</div> <!-- /.course-page-single -->


@stop