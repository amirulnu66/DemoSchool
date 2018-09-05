@extends('fontend.master')

@section('title')

@section('mainContent')
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>শিষ্টাচার</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>ক্যাম্পাস</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix stud-tope-list">
	        					<h2 class="text-center"> ABC ইন্টারন্যাশনাল স্কুল এন্ড কলেজ, ঢাকা  </h3>
	        						<div class="col-50 aligncenter" id="content">           
										<div class="welcome blank-wp">
											<div id="" class="ms-rtestate-field" style="display:inline"><p>&nbsp;</p>
												<p>
													শিক্ষক বা ওস্তাদদের ঋণ শোধ করার মতো অবস্থান কোনো ছাত্রেরই থাকে না, যার কারণে এত সম্মান করা হতো। এখন সেই অবস্থানে আমরা রয়েছি কিনা, তা ভেবে দেখার অবকাশ রয়েছে। বর্তমান প্রজন্মের বহুজনের হাতে শিক্ষক লাঞ্ছনার তথ্যগুলো যখন পত্রপত্রিকায় প্রকাশিত হয়, আমার মনটা দারুণ ভারাক্রান্ত হয়ে ওঠে। বিশ্ববিদ্যালয়ের ভাইস চ্যান্সেলরসহ প্রফেসরদের প্রায়ই ছাত্রদের দ্বারা অবরুদ্ধ হওয়া এখন অহরহই ঘটছে, যার উদাহরণ দেওয়ার খুব প্রয়োজন নেই। সংক্ষেপে বলতে হয়, আমরা অতীতের বাঙালি ভদ্রতা, নম্রতা এবং সম্মানী ব্যক্তিকে সম্মান দেওয়ার সংস্কৃতি ভুলে গেছি। এর ধাক্কা সর্বত্র লেগেছে বলতে হয়। 
												</p>
											</div>
							        </div>
	        					</div>		        						
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