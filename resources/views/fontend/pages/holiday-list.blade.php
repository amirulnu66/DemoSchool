@extends('fontend.master')

@section('title')

@section('mainContent')
	
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>  ছুটির তালিকা</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/')}}">Home</a></li>
						<li>-</li>
						<li> Holiday List</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->
			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix">
	        					<h3>ছুটির তালিকা </h3>

	        					<div class="sub-text">
	        						<h4 style="text-align: justify;">
							        ১. স্কুলে প্রবেশের পর থেকে ছুটি হবার আগ পর্যন্ত শিক্ষার্থীদের স্কুলের বাইরে যেতে দেয়া হয় না ।<br>
							      ২. বাড়ীতে জরুরী কোন প্রয়োজন হলে উপযুক্ত গার্জিয়ান এসে প্রয়োজনীয় কারণ দর্শায়ে দরখাস্ত জমা দিয়ে বাচ্চাকে নিয়ে যেতে পারবেন ।<br>
							      ৩. অভিভাবকের সম্মতিসূচক মন্তব্য ছাড়া কেবলমাত্র ছাত্র/ছাত্রীর লেখা দরখাস্ত গ্রহণযোগ্য হবে না ।<br>
							      ৪. প্রতিষ্ঠানে আসার পর ছাত্রীদের কোন জরুরী প্রয়োজন হলে সেক্ষেত্রে কর্তৃপক্ষ সহযোগিতা করবে ।<br>
							      </h4>
	        					</div> <!-- /.sub-text -->
	        				@if(!empty(instituteSetting()->holiday_list))	
	        					<div class="holyday-inner">
						          <h4 class="holyday-title">সরকারি ছুটির তালিকা {{getBanglaMonth(date('Y'))}} </h4>
						          <iframe class="holyday-box" src="{{URL::to('/asset/logos/'.instituteSetting()->holiday_list)}}"></iframe>
						      </div>
	        				@endif	
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