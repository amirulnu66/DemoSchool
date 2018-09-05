@extends('fontend.master')

@section('title')

@section('mainContent')
	<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>যোগাযোগের ঠিকানা</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Contact Us</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


			<!-- Contact Us Form _____________________ -->
			<div class="contact-us-page">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 wow fadeInLeft">
					@if(!empty($contactUs))		
						<div class="contact-us-form">
						<h3>{{$contactUs->title}}</h3>
						<p>{{$contactUs->summary}}</p>
					@endif			
					@if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                   @endif
						<form action="{{URL::to('/user/message/store')}}" method="post" class="form-validation" >
									{{ csrf_field() }}

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input name="name" type="text" placeholder="আপনার নাম">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input name="email" type="email" placeholder="ইমেইল">
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<textarea name="message" placeholder="মেসেজ লিখুন"></textarea>
											<button class="tran3s p-color-bg themehover" title="Send">পাঠান</button>
										</div>
									</div>
								</form>

								<!-- Contact alert -->
								<div class="alert_wrapper" id="alert_success">
									<div id="success">
										<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
										<div class="wrapper">
							               	<p>Your message was sent successfully.</p>
							             </div>
							        </div>
							    </div> <!-- End of .alert_wrapper -->
							    <div class="alert_wrapper" id="alert_error">
							        <div id="error">
							           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
							           	<div class="wrapper">
							               	<p>Sorry!Something Went Wrong.</p>
							            </div>
							        </div>
							    </div> <!-- End of .alert_wrapper -->
							</div> <!-- /.contact-us-form -->
						</div> <!-- /.col- -->
						
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 wow fadeInRight">
							<div class="contactUs-address">
								<h3>যোগাযোগের ঠিকানা </h3>
			        			<p>আমাদের স্কুলে স্বাগতম, বিনা দ্বিধায় আমাদের সাথে যোগাযোগ করুন</p>
			        	@if(!empty(instituteSetting()))			
			        			<ul>
	        						<li>
	        							<i class="fa fa-envelope-o" aria-hidden="true"></i>
	        							<a href="javascript:" class="tran3s">{{ instituteSetting()->scl_email }}</a>
	        						</li>
	        						<li>
	        							<i class="fa fa-phone" aria-hidden="true"></i>
	        							<a href="javascript:" class="tran3s">{{ instituteSetting()->scl_phone }}  </a>
	        						</li>
	        						<li><i class="fa fa-map-marker" aria-hidden="true"></i> 
	        						{{ instituteSetting()->scl_address }}
									</li>
	        					</ul>
	        			@endif		
							</div> <!-- /.our-address -->
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.contact-us-page -->
			<br>
			<!-- Google Map -->
			<!-- <div id="googleMap" style="width:100%;height:460px;"></div> -->
			<div class="google-map">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29207.265350345293!2d90.41200266555657!3d23.786284212576756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b71894d7cb%3A0x725a1e9ba77a8744!2sBadda%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1531634218636" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
			</div>
	

@stop
