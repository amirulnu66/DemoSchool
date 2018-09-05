@extends('fontend.master')

@section('title')

@section('mainContent')
	
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>ফটো গ্যালারি </h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Gallery</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->



			<!-- Latest News ___________________________ -->
	        <div class="latest-news wow fadeInUp theme-bg-color blog-v1">
	        	<div class="container">
	        	@if(!empty($blogs))
	        		<div class="post-wrapper row">
				
	        			@foreach($blogs as $blog)

	        			<div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
	        					<div class="img-holder">
	        						
	        						<img src="{{url('asset/gallery/'.$blog->blog_image)}}" alt="Image">
	        						<a href="javascript:" class="tran4s"></a>
	        					</div>
	        					<div class="text-wrapper gallery">
	        						<div class="text tran4s">
	        							<a href="javascript:">{{$blog->blog_title}} </a>
	        							<p>অনুষ্ঠানের নাম: {{$blog->title}}</p><br>
	        							
	        						</div> <!-- /.text -->
	        					</div> <!-- /.text-wrapper -->
	        			</div> <!-- /.single-post -->

	        			@endforeach
	        		</div> <!-- /.post-wrapper -->
	        		@else
	        		<h5 class="text-center" style="font-size: 16px; padding: 10px; letter-spacing: 1px;">
						<strong>No Records Found</strong> 
					</h5>
	        	@endif	
	        	</div> <!-- /.container -->
	        </div> <!-- /.latest-news -->


@stop