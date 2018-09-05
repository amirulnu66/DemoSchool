@extends('fontend.master')

@section('title')

@section('mainContent')
	
	
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>দিনপুঞ্জিকা</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Calendar</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->



			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix">
	        					<h3>একাডেমিক দিনপুঞ্জি</h3>
	        					<div class="sub-text academic-calendar">
	        						<div class="a_calendar" id="calender">
                              			<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=mdamirul.venusitltd%40gmail.com&amp;color=%23125A12&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%2342104A&amp;src=1172qtefao6bcfbjalvdur8204%40group.calendar.google.com&amp;color=%23A32929&amp;src=jbqi7h6r7k32dj62aen2b8u8hs%40group.calendar.google.com&amp;color=%23711616&amp;src=en.bd%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FDhaka" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                            		</div>
	        					</div> <!-- /.sub-text -->
	        					
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