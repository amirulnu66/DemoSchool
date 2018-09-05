
		<!-- <div class="container"> -->
			<div class="main-menu-wrapper clear-fix">
				<!-- mobile display login button -->
				<div class="mob-button login-area" style="z-index: 999">
					<a id="img-login" href="#" class="tran3s goems but-hover imlogbottom12" style="width: 75px;">
					</a>
				</div>
				<div class="container">
					@if(!empty(instituteSetting()->scl_logo))
					<div class="logo theme-logo0 float-left">
						<a href="{{ url('/') }}" style="vertical-align:middle;">
							<!-- website logo -->
						<img src="{{ url('asset/logos/'.instituteSetting()->scl_logo) }}" alt="LOGO" width="100%" height="100"></a></div>
					@endif	
					<!-- Menu -->
					<nav class="navbar margin-left160">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       <span class="icon-bar"></span>
					       <span class="icon-bar"></span>
					       <span class="icon-bar"></span>
					     </button>
					   </div>
					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <div class="collapse navbar-collapse" id="navbar-collapse-1">
					     <ul class="nav navbar-nav">
					       <li class="current-page-item"><a href="{{ url('/') }}"><i class="fa fa-home fa-2x"></i></a></li>
					       <li><a href="{{ url('/') }}">আমাদের কথা</a></li>
					       <li class="dropdown-holder"><a href="javascript:void(0)">প্রতিষ্ঠানিক তথ্য </a>
								<ul class="sub-menu">
									<li><a href="{{ url('/student/database/panel') }}" class="tran3s">শিক্ষার্থীর তথ্য </a></li>
									<li><a href="{{ url('/student/top/list') }}" class="tran3s">স্টুডেন্ট টপলিস্ট</a></li>
									<li><a href="{{ url('/academic/calendar') }}" class="tran3s">স্কুল ক্যালেন্ডার</a></li>
									<li><a href="{{ url('/page/school-history') }}" class="tran3s">প্রতিষ্ঠানের ইতিহাস</a></li>
									<li><a href="{{ url('/page/class-room') }}" class="tran3s">শ্রেণিকক্ষ</a></li>
									<li><a href="{{ url('/faqs/frequently-asked-questions') }}" class="tran3s">প্রশ্নাবলী</a></li>
								</ul>
					       </li> 
					       <li class="dropdown-holder"><a href="javascript:void(0)">একাডেমিক কার্যক্রম</a>
					       		<ul class="sub-menu">
									<li><a href="{{ url('/member/governing-body') }}" class="tran3s">ব্যবস্থাপনা কমিটি</a></li>
									<li><a href="#" class="tran3s">সিলেবাস</a></li>
									<li><a href="{{ url('/academic/exam/result') }}" class="tran3s">ফলাফল</a></li>
									<li><a href="{{ url('/public/exam/result') }}" class="tran3s">পাবলিক পরীক্ষার ফলাফল</a></li>
									<li><a href="{{ url('/routine/class-routine') }}" class="tran3s">ক্লাস রুটিন</a></li>
									<li><a href="{{ url('/gov/holiday/holiday-list') }}" class="tran3s"> ছুটির তালিকা </a></li>
									<li><a href="{{ url('/sport/school-sports') }}" class="tran3s">নিউজ এন্ড ইভেন্ট</a></li>	
									<li><a href="{{ url('/mission/mission-vision') }}" class="tran3s">মিশন-ভিশন</a></li>	
									<li><a href="#" class="tran3s">সামাজিক দায়বদ্ধতা</a></li>
								</ul>
					       </li>
					       <li><a href="{{ url('/academic/house-place')}}">আবাসিক</a>
					       	<li class="dropdown-holder"><a href="javascript:">ভর্তি প্রক্রিয়া</a>
					       		<ul class="sub-menu">
					       			<li><a href="{{ url('/admission/admission-online') }}" class="tran3s">অ্যাডমিশন </a></li>
					       			<li><a href="{{ url('/applicant/login') }}" class="tran3s">এপ্লিক্যান্ট লগইন </a></li>
									<li><a href="{{ url('/admission/info/bangla') }}" class="tran3s">ভর্তি তথ্য </a></li>
									<li><a href="{{ url('/academic/fees-payment') }}" class="tran3s">একাডেমিক ফিস </a></li>
									<li><a href="{{url('/admission/result')}}" class="tran3s">ভর্তি ফলাফল</a></li>
									
								</ul>
					       </li>

					        <li class="dropdown-holder"><a href="javascript:">শিক্ষকবৃন্দ </a>
								<ul class="sub-menu">
									<li><a href="{{url('/message/director-message')}}" class="tran3s">সভাপতির বাণী</a></li>
									<li><a href="{{ url('/message/principal-message') }}" class="tran3s">প্রধান শিক্ষকের বাণী </a></li>
									<li><a href="{{ url('/teachers') }}" class="tran3s">শিক্ষকবৃন্দ </a></li>	
									<!-- <li><a href="#" class="tran3s">শিক্ষকবৃন্দ </a></li>	 -->
								</ul>
					       </li>

					       <li><a href="{{url('/student/respect-etiquette')}}">শিষ্টাচার </a></li>
					       <li class="dropdown-holder"><a href="javascript:">গ্যালারি</a>
					       		<ul class="sub-menu">
									<li><a href="{{ url('/blog/gallery-page') }}" class="tran3s">ফটো গ্যালারি</a></li>
									<li><a href="{{ url('/blog/gallery-page') }}" class="tran3s">ভিডিও</a></li>
									
								</ul>
					       </li>
					       <li><a href="{{ url('/contact/contact-us') }}">যোগাযোগ</a></li>

					     </ul>
					   </div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</div> <!-- /.main-menu-wrapper -->
		<!-- </div> -->