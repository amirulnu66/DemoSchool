@extends('fontend.master')

@section('title')

@section('mainContent')
	
	
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>শ্রেণিকক্ষ</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Class Room</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->



			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix">
	        					<img src="{{ url('fontend')}}/images/inner-page/21.jpg" alt="Image">
	        					<h3>ক্লাস রুম</h3>

	        					<div class="sub-text">
	        						<h4>ভেনাস স্কুলের ডিজিট্যাল ক্লাস রুম</h4>
	        						<p>ডিজিটাল বাংলাদেশ গড়ার প্রথম শর্ত হচ্ছে শিক্ষার গুনগতমান নিশ্চিত করতে শিক্ষায় তথ্য ও যোগাযোগ প্রযুক্তির সমন্বয় অপরিহার্য । বাংলাদেশ সরকার এই সত্যকে উপলদ্ধি করে গত দশক থেকে শিক্ষায় তথ্য ও যোগাযোগ প্রযুক্তির ব্যবহার বৃদ্ধিতে ব্যাপক হারে কাজ করছে । গনপ্রজাতন্ত্রী বাংলাদেশ সরকারেরর মাননীয় প্রধানমন্ত্রী তথ্য ও যোগাযোগ প্রযুক্তির ব্যবহার করে বাংলাদেশ কে  একটি স্বচ্ছ  জবাব দিহি মূলক ও দূর্নীতি মুক্ত দেশ হিসাবে গড়ে তোলার লক্ষে রুপকল্প ২০২১ ঘোষানা করেন </p>
	        					</div> <!-- /.sub-text -->
	        					<div class="sub-text">
	        						<h4>মাল্টিমিডিয়া ক্লাস রুম</h4>
	        						<p> ডিজিটাল বাংলাদেশ গড়ার প্রথম শর্ত হচ্ছে শিক্ষার গুনগতমান নিশ্চিত করতে শিক্ষায় তথ্য ও যোগাযোগ প্রযুক্তির সমন্বয় অপরিহার্য । বাংলাদেশ সরকার এই সত্যকে উপলদ্ধি করে গত দশক থেকে শিক্ষায় তথ্য ও যোগাযোগ প্রযুক্তির ব্যবহার বৃদ্ধিতে ব্যাপক হারে কাজ করছে । গনপ্রজাতন্ত্রী বাংলাদেশ সরকারেরর মাননীয় প্রধানমন্ত্রী তথ্য ও যোগাযোগ প্রযুক্তির ব্যবহার করে বাংলাদেশ কে  একটি স্বচ্ছ  জবাব দিহি মূলক ও দূর্নীতি মুক্ত দেশ হিসাবে গড়ে তোলার লক্ষে রুপকল্প ২০২১ ঘোষানা করেন । তারই আলোকে তথ্য ও প্রযুক্তি ব্যবহারে দক্ষ একটি আধুনিক প্রজন্ম গড়ে তোলার লক্ষে সারা দেশে শিক্ষামন্ত্রনালয় এবং প্রাথমিক ও গনশিক্ষা মন্ত্রনালয়ের মাধ্যমে তেইশ হাজারের বেশী প্রতিষ্ঠানে মাল্টিমিডিয়া ক্লঅসরুম  স্থাপন করা হয়েছে । প্রতিটি প্রতিষ্টানে  একটি ল্যাবটপ, ইন্টার নেট, মডেম, মাল্টিমিডিয়া প্রজেক্টর প্রেআজেক্টর স্কিন, সাউন্ড সিস্টেম প্রদান করেছেন । </p>
	        						<h4>২০১৭ সালে শিক্ষক বাতায়নে সপ্তাহের সেরা শিক্ষক হিসাবে নিবাচিতরা হলেন</h4>
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