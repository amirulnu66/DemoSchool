@extends('fontend.master')

@section('title')

@section('mainContent')
	
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>লগইন </h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->

			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Login</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->
			<!-- Latest News ___________________________ -->
	        <div class="latest-news wow fadeInUp theme-bg-color blog-v1">
	        	<div class="container">
	        		<div class="post-wrapper row">
	        			<div class="col-md-8 col-md-offset-2 col-xs-12">
	        				<div class="sidebar-box row contact-us-form std-info">
							<h2 class="ste-list-title login-cnt">লগইন ফরম </h2>
						
							<hr>
						<div class="course-item-wrapper">
							<div class="col-xs-12 student-database">
								<form id="" method="POST" action="{{URL::to('/applicant/login/store')}}" class="form-horizontal">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div class="row">
                                        <div class="col-md-6 col-md-offset-3">
                                          <label for="username" class="control-label">User Name</label>
                                          <input type="text" name="user_name" class="form-control" required>
                                      </div>
                                    </div>
									<div class="row">
									 <div class="col-md-6 col-md-offset-3">
                                          <label for="password" class="control-label">Password </label>
                                          <input type="text" name="password" class="form-control" required>
                                     
                                      </div>
                                  </div>
                                  <br>  
									<div class="form-group student-panel">
						            	<div class="routine-btn">
                                            <button type="submit" class="p-color-bg themehover letter-sp">Login</button>
                                        </div>
						            </div>
								</form>
							</div>
						</div> <!-- /.course-item-wrapper -->
					</div>
	        			</div>
	        		</div> <!-- /.post-wrapper -->	
	        	</div> <!-- /.container -->
	        </div> <!-- /.latest-news -->


@stop