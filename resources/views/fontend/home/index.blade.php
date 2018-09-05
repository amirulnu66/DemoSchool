@extends('fontend.master')

@section('title', 'ABC International School')

@section('slider')
	@include('fontend.layouts.includes.slider')
@stop

@section('mainContent')
<div class="event-details-page homepaddingbot80">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 float-left">
				<div class="row latest-news blog-v1">
				@if(!empty(instituteSetting()))	
					<h2 class="mcon-titlepadd">{{instituteSetting()->scl_name}}</h2>
				@endif	
						<hr>
				@if(!empty($principalMsg))		
					<div class="single-post wow fadeInUp col-lg-6 col-md-6 col-sm-6 col-xs-6">
    					<div class="img-holder">
    						<img src="{{ asset('asset/uploads/'.$principalMsg->profile_picture) }}" alt="Image">
    						<a href="{{ URL::to('message/principal-message')}}" class="tran4s"></a>
    					</div>
    					<div class="text-wrapper">
    						<div class="text tran4s">
    							<a href="{{ URL::to('message/principal-message')}}">{{$principalMsg->heading_one}}</a>
    							<p>{{ str_limit($principalMsg->paragraph_one, 150)}}</p>
    						</div> <!-- /.text -->
    					</div> <!-- /.text-wrapper -->
    				</div> <!-- /.single-post -->
    			@endif	
    			@if(!empty($dictionarMsg))
    				<div class="single-post wow fadeInUp col-lg-6 col-md-6 col-sm-6 col-xs-6">
    					<div class="img-holder">
    						<img src="{{ asset('asset/uploads/'.$dictionarMsg->profile_picture) }}" alt="Image">
    						<a href="{{URL::to('/message/director-message')}}" class="tran4s"></a>
    					</div>
    					<div class="text-wrapper">
    						<div class="text tran4s">
    							<a href="{{URL::to('/message/director-message')}}">{{$dictionarMsg->heading_one}}</a>
    							<p>{{ str_limit($dictionarMsg->paragraph_one, 150)}}</p>
    						</div> <!-- /.text -->
    					</div> <!-- /.text-wrapper -->
    				</div> <!-- /.single-post -->
    			@endif	
    				
				</div>
				<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 cariculam-title">
							@if(!empty($history))
								<div class="sub-text">
									<h3>{{$history->heading_two}}</h3>
									<hr>
									<p>{{ str_limit($history->paragraph, 350)}}</p>
									<a href="{{URL::to('page/school-history')}}" class="tran3s p-color-bg themehover float-right">Read More</a>
								</div> <!-- /.sub-text -->
							@endif
						</div> <!-- /.col- -->
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 testimonial wow fadeInLeft extra-cariculam">
							<h4>
							      
							সংক্ষিপ্ত তথ্য
							
							</h4>
							<p class="cariculam-text">
							    মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার 
							    
							  </p>
							<ul class="school-info-list">
								<li><i class="fa fa-pencil" aria-hidden="true"></i>এক নজরে আমাদের স্কুল </li>
								<li><i class="fa fa-pencil" aria-hidden="true"></i>বিদ্যালয়ের কোন বিকল্প নেই</li>
								<li><i class="fa fa-pencil" aria-hidden="true"></i>আমাদের রয়েছে স্কুল ম্যানেজমেন্ট সফটওয়্যার</li>
								<li><i class="fa fa-pencil" aria-hidden="true"></i>আমাদের স্কুলে পড়াশোনার মান খুব ভাল</li>
								<li><i class="fa fa-pencil" aria-hidden="true"></i> এ
								স্কুলে ছোট বাচ্চাদের জন্য যানবাহন ব্যবস্থা রয়েছে </li>
								<li><i class="fa fa-pencil" aria-hidden="true"></i>
							    আমাদের রয়েছে মাল্টিমিডিয়া ক্লাস রুম
								</li>
								<li><i class="fa fa-pencil" aria-hidden="true"></i>
								ছাত্র-ছাত্রীদের জন্য রয়েছে সুবিশাল খেলার মাঠ
								</li>
								
							</ul>
	        				<!-- include('fontend.pages.includes.academic-teachers-list') -->
	        			</div> <!-- /.testimonial -->
				</div><!--//row-->
			</div> <!-- /.col- -->
	        			
<!-- _________________ SideBar _________________ -->
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne float-left faq wow fadeInRight">
			<div class="wrapper">
<!-- attendance sidebar include -->
            @include('fontend.layouts.includes.sidebars.attendance-sidebar')
				<!-- Notice sidebar include -->
			@include('fontend.layouts.includes.sidebars.notice-sidebar')	
			<!-- download sidebar include -->
	        <!-- include('fontend.layouts.includes.sidebars.download-sidebar') -->
	        <!-- important link sidebar include -->
	        @include('fontend.layouts.includes.sidebars.quicklink-sidebar')

			</div> <!-- /.wrapper -->
		</div> <!-- /.sidebarOne -->
		<!-- Latest Event Slider Section _______ -->
	<!-- student top list slider here.......... -->
@include('fontend.layouts.includes.themeSlider.classTopper')	
<!-- //student top list slider here..... -->
<!--last 3year public exam result-->
            <!--MAIN CONTENT-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row latest-news blog-v1 student-panel last3year-result">
                    <h3 class="class-routine-title public-result-title retext-left">বিগত তিন বছরের পাবলিক পরীক্ষার ফলাফল</h3>
                    @include('fontend.layouts.includes.result.public-exam-result')
                </div><!--//student-panel-->
            </div> <!-- /.col-12- -->
            <!--//MAIN CONTENT-->
<!--Home bootom gallery slider here.......... -->
@include('fontend.layouts.includes.themeSlider.galleryslide')	
<!-- //student top list slider here..... -->
	</div>
</div>
</div>

@stop