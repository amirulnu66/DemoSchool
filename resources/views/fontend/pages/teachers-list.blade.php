@extends('fontend.master')

@section('title')

@section('mainContent')

	<!-- Inner Page Main Banner __________________ -->
	<div class="inner-page-banner">
		<div class="opacity">
			<div class="container">
				<h2>আমাদের শিক্ষক </h2>
			</div> <!-- /.container -->
		</div> <!-- /.opacity -->
	</div> <!-- /.inner-page-banner -->


	<!-- Page Breadcrum __________________________ -->
	<div class="page-breadcrum teacher-banner">
		<div class="container">
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li>-</li>
				<li>Teachers</li>
			</ul>
		</div> <!-- /.container -->
	</div> <!-- /.page-breadcrum -->

	<!-- Event Section _______________________ -->
	<div class="popular-course wow fadeInUp theme-bg-color teacher-course">

		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="row latest-news blog-v1 teachers-panel">
						<h2> শিক্ষকবৃন্দ </h2>
						<hr>
						<div class="course-item-wrapper">
							@if(!empty($teacherList) AND count($teacherList)>0)
								@foreach($teacherList as $teacher)
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
										<div class="hvr-float-shadow single-course-item">
											<div class="img-holder"><img src="{{url($teacher->photo)}}" alt="Image" style="height: 250px;

   width: 100%;"></div>
											<div class="text">
												<br/>
												<h5>{{$teacher->name}}</h5>
												<h6><a>{{$teacher->designation}}</a></h6>

												<div class="clear-fix">
													<a href="javascript:" class="tran3s p-color-bg themehover">View</a>
												</div>
											</div> <!-- /.text -->
										</div>
									</div> <!-- /.item -->
								@endforeach
							@endif
						</div> <!-- /.course-slider -->
					</div>
				</div> <!-- /.col- -->

				<!-- _________________ SideBar _________________ -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne faq wow fadeInRight">
					<div class="wrapper">
						    <!-- Notice sidebar include -->
			            @include('fontend.layouts.includes.sidebars.notice-sidebar')
							<!-- download sidebar include -->
	                    @include('fontend.layouts.includes.sidebars.download-sidebar')

							<!--importent link section include  -->
		                @include('fontend.layouts.includes.sidebars.quicklink-sidebar')
					</div> <!-- /.wrapper -->
				</div> <!-- /.sidebarOne -->
			</div>
		</div>
	</div>

@stop