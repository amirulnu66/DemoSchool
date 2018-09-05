@extends('fontend.master')

@section('title')

@section('mainContent')
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>আবাসিক</h2>
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
	        					<h2 class="text-center"> আবাসিক ABC ইন্টারন্যাশনাল স্কুল এন্ড কলেজ, ঢাকা  </h3>
	        						<div class="col-50 aligncenter" id="content">           
										<div class="welcome blank-wp">
											<div id="" class="ms-rtestate-field" style="display:inline"><p>&nbsp;</p>
												<p>
													আবাসিক ABC ইন্টারন্যাশনাল স্কুল এন্ড কলেজ, ঢাকা। এ প্রতিষ্ঠানে শিশুদের শারীরিক ও মানসিক বিকাশের লক্ষ্যে পড়াশোনার পাশাপাশি রাখা হয়েছে খেলাধুলাসহ নানা সৃজনশীল ব্যবস্থা। স্কুলের প্রতিষ্ঠাতা জানান, দেশে ভালো মানের ইংলিশ মিডিয়াম স্কুল না থাকায় অনেক অভিভাবক ছেলে-মেয়েদের পড়াশোনার জন্য বিদেশে পাঠাচ্ছেন। বর্তমানে দেশের প্রায় ৫ লাখ ছাত্র (প্রথম শ্রেণী থেকে দ্বাদশ শ্রেণী পর্যন্ত) বিদেশে পড়াশোনা করেন। এতে দেশের মূল্যবান বৈদেশিক মুদ্রা ব্যয় হচ্ছে। অন্যদিকে বিদেশি স্কুলের বাড়তি খরচের চাপ পড়ছে পরিবারগুলোর ওপর। তাই দেশের মধ্যেই আন্তর্জাতিক মানের শিক্ষার সুযোগ দিতে স্কুলটি প্রতিষ্ঠা করা হয়েছে। তিনি আরো বলেন, বিদেশে এই মানের স্কুলে মাসিক বেতন আট থেকে ১০ হাজার ডলার হলেও এখানে তা এক হাজার ডলারের কম রাখা হয়েছে। স্কুলের ২৪ জন শিক্ষকের মধ্যে ২০ জনই বিদেশি। ৮০ বিঘা জমির ওপর প্রতিষ্ঠিত স্কুলে রয়েছে ক্রিকেট ও ফুটবল মাঠ, আধুনিক সুইমিংপুল। এছাড়া ভলিবল, বাস্কেট বল, টেবিল টেনিসসহ বিভিন্ন প্রকারের ১০টি খেলার জন্য আধুনিক সুবিধাসমৃদ্ধ ইনডোর সুবিধা আছে। প্রতিটি খেলার জন্য আছে আলাদা কোচ।
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