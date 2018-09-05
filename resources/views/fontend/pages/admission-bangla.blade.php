@extends('fontend.master')

@section('title')

@section('mainContent')
	
	
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>এডমিশন</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Admission</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->



			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="event-details-content clear-fix stud-tope-list">
	        					<h2 class="text-center"> স্কুলে ভর্তি তথ্য শীঘ্রই আপলোড করা হবে</h3>
	        					<!-- <h3> স্কুলে ভর্তির জন্য তথ্য </h3> -->
<!-- 	        						<div class="col-50 aligncenter" id="content">
											<h4 class="ecc-rteElement-H2">এডমিশন ইনফরমেশন</h4>					
												            
												<div class="welcome blank-wp">
												    <div id="" class="ms-rtestate-field" style="display:inline"><p>&nbsp;</p>
												<ul><li><p><a href="javascript:"><font color="#d00f44">Applications - starting secondary school in September 2018 (Year 7)</font></a></p></li>
												<li><p><a href="javascript:">Applying to change your child's current school (mid-year admission)</a></p></li>
												<li><p><a href="javascript:"><font color="#d00f44">Catchment Area Finder</font></a></p></li>
												<li><p><a href="javascript:"><font color="#d00f44">Secondary and&nbsp;primary education&nbsp;in Essex&nbsp;booklets</font></a></p></li>
												<li><p><a href="javascript:"><font color="#d00f44">Find school information</font></a></p></li></ul>
												<ul><li><a href="javascript:">Home to school transport</a></li>
												<li><p><a href="javascript:"><font color="#d00f44">Transferring from year 2 to year 3</font></a></p></li>
												<li><p><a title="School admissions policies" href="javascript:">Supplementary information forms</a></p></li>
												<li><p><a href="javascript:">Grammar (selective) school information - Year 7 entry</a> </p></li>
												<li><p><a href="javascript:">Secondary&nbsp;and Primary 2017 waiting lists</a></p></li>
												<li><p><a href="javascript:"><font color="#d00f44">SEN placement process</font></a></p></li>
												<li><p><a href="javascript:"><font color="#d00f44">Appeals</font></a></p></li>
												<li><p><a href="javascript:"><font color="#d00f44">Paper application forms</font></a></p></li>
												<li><p><a href="javascript:"><font color="#d00f44">Districts and counties that border Essex</font></a></p></li>
												<li><p><a href="javascript:">When can my child start school?</a></p></li>
												<li><p><a href="javascript:"><font color="#d00f44">School admission arrangements</font></a>&nbsp;</p></li></ul>
												<div>&nbsp;</div>
												<h4 class="ecc-rteElement-H2">Secondary schools</h4>
												<p>If your child is in Year 6 of a primary or junior school during the 2017/18 academic year, you will need to apply for their secondary school place for September 2018.</p>
												<p>&nbsp;</p>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut velit augue, aliquet nec accumsan nec, condimentum nec enim. Aenean tincidunt mollis mi. Donec congue orci </p>
												<p>&nbsp;</p>
												
												<h4 class="ecc-rteElement-H2">Primary schools</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut velit augue, aliquet nec accumsan nec, condimentum nec enim. Aenean tincidunt mollis mi. Donec congue orci</p>
												<p>&nbsp;</p>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut velit augue, aliquet nec accumsan nec, condimentum nec enim. Aenean tincidunt mollis mi. Donec congue orci <a href="javascript:">apply online</a>.&nbsp;</p>
												<p>&nbsp;</p>
												<p>The closing date for applications is 15 January 2018.<br></p>
												<h4 class="ecc-rteElement-H2">Junior schools</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut velit augue, aliquet nec accumsan nec, condimentum nec enim. Aenean tincidunt mollis mi. Donec congue orci</p>
												<p>&nbsp;</p>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut velit augue, aliquet nec accumsan nec, condimentum nec enim. Aenean tincidunt mollis mi. Donec congue orci</p>
												<h4 class="ecc-rteElement-H2">Further information</h4>
												<ul><li><a title="opens in new window" href="javascript:" target="_blank">Home to school transport</a> Catchment Area Finder</li>
												<li>The Independent Schools Council&nbsp;has&nbsp;information on&nbsp;<a title="Opens in new window" href="javascript:" target="_blank">private or independent (fee paying) schools</a>&nbsp;&nbsp;</li>
												<li>For information about school transport see the <a href="javascript:">home to school transport pages</a> </li></ul>
											</div>
							        </div>
	        					</div>	 -->	        						
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