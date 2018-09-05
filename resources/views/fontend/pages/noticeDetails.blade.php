@extends('fontend.master')

@section('title')

@section('mainContent')
	<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>Notice Board</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/home') }}">Home</a></li>
						<li>-</li>
						<li>Notice</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

			<!-- Event Section _______________________ -->
	        <div class="event-details-page notice-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
	        				<div class="event-details-content clear-fix notice-panel">
	        					<div class="toptitle notice-title">
	        						<img class="notice-logo" src="{{asset('/fontend/images/logo/logobng.png')}}" width="120">
	        						<h2 class="notice-toptitle">ভেনাস স্কুল এবং  কলেজ</h2>
	        					</div>
	        					<div class="foundent text-center"><p><span>স্থাপিত</span><b> ২০১৭</b></p></div>
	        					<div class="notice-address">
	        						<p class="notice-add-details">Venus Complex, Kha-199/2-199/4 Bir Uttam Rafiqul Islam Ave, Dhaka-1212; <b>Phone:</b> +8801708872244; <b>Fax</b> 000000
									</p>
									<a href="http://venusitltd.com/">www.venusitltd.com</a>
									<hr/>
									<p class="date-no">সুত্র নং</p>
									<p class="notice-date pull-right">তারিখ: <b>৩১/০১/২০১৮</b>
									</p>
									<div class="clear-fix"></div>
	        					</div>

	        					<div class="notice-maincontent paddingtop90">
	        						<h2>ভেনাস স্কুলে ২০১৮ সালের ভর্তি বিজ্ঞপ্তি</h2>
	        						<hr/>
	        						<!-- <h2>ভর্তি নোটিশ</h2><br> -->
	        						<div class="sub-text">
	        							<p class="notice-text">
	        							As an IT company in Bangladesh, we offer outstanding IT-Enabled & Software Service in Dhaka, Chittagong, Rajshahi, Rangpur, Khulna, Barisal, Sylhet & Mymenshingh Division, even abroad and our Professional IT Services can give your brand a strong personality and leave a lasting impression on the mind of your target audience.
	        							</p>
	        							<p class="notice-text">
										As we all know today’s technology is so powerful that keeping pace with it without professional IT service is impossible for online business. Venus IT Ltd helps to hide that gap, in efficient and planned way. Our cutting-edge solutions including responsive & Google page speed test web design, website development, Website redesign, e-commerce design and development, web hosting, Search Engine Optimization, Social Media Marketing, Internet Marketing that are focused at increasing required outcomes and placing your businesses at the peak of competition.</p>
										<p class="notice-text">
										So if you are looking for an IT company which can get you a unique and exceptional quality IT Services at reasonable rates, then it is time for you to bring your entire search to an end with Venus IT Ltd, professional IT Company that has mastered the art and science of IT-Enabled Services.
	        						</p>

	        						</div>
	        						
	        					</div>
	        					
	        					<div class="notice-down">
	        						<div class="notice-downpdf pull-right">
	        						<p>Admission Result Class 2 (Badda) </p>
            						<a href="{{URL::to('/fontend/images/pdf/pdfview.pdf')}}" download>
									  <img border="0" src="{{asset('/fontend/images/pdf/pdf1.png')}}" alt="W3Schools" width="75" height="75">
									</a>
                        			</div>
	        					</div>
	        				</div> <!-- /.event-details-content -->
	        			</div> <!-- /.col- -->
	        		</div>
	        	</div>
	        </div>
	

@stop