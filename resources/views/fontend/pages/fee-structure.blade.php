@extends('fontend.master')

@section('title')

@section('mainContent')
	<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>স্কুল ফিস</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum teacher-banner">
				<div class="container">
					<ul>
						<li><a href="{{URL::to('/')}}">Home</a></li>
						<li>-</li>
						<li>Fees</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

	        <!-- Event Section _______________________ -->
	        <div class="popular-course wow fadeInUp theme-bg-color teacher-course">

	        	<div class="container">
	        		<div class="row">
	        			<!--MAIN CONTENT-->
	        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	        				<div class="row latest-news blog-v1 student-panel">

					      <div class="tab-rutne">
					        <div class="panel panel-info routine-panel fees-panel">
					          <div class="panel-heading student-pane2">
					            <h3 class="class-routine-title">ফিস বিস্তারিত</h3>
					        	</div>
					        <div class="table-overflow">
					        	<div class="fees-title"><h3 class="feesub-title marginbtm10">Fee Structure For Classes VI-VIII</h3></div>
					          <table class="table table-bordered table-hover text-center">	
							    <thead>
							      <tr>
							        <th class="text-center">PARTICULARS</th>
							        <th class="text-center">Fees detaile</th>
							        <th class="text-center">2018-19</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>ADMISSION FEES</td>
							        <td>AT TIME OF ADM.</td>
							        <td> - </td>
							        
							      </tr>
							      <tr>
							        <td>ANNUAL CHARGES</td>
							        <td>ANNUAL</td>
							        <td>  </td>
							        
							      </tr>
							      <tr>
							        <td>TECHNOLOGY IN EDU. FEE</td>
							        <td>ANNUAL</td>
							        <td> - </td>
							        
							      </tr>
							      <tr>
							        <td>DEVELOPMENT FUND</td>
							        <td>ANNUAL</td>
							        <td> - </td>
							        
							      </tr>
							      <tr>
							        <td>TUITION FEES</td>
							        <td>QUATERLY</td>
							        <td> - </td>
							        
							      </tr>
							      <tr>
							        <td>TOTAL</td>
							        <td></td>
							        <td> - </td>
							        
							      </tr>
							    </tbody>
							  </table>
							</div><!--//table-overflow-->

					        <div class="table-overflow">
					        	<div class="fees-title"><h3 class="feesub-title marginbtm10">Fee Structure For Classes IX-X</h3></div>
					          <table class="table table-bordered table-hover text-center">	
							    <thead>
							      <tr>
							        <th class="text-center">PARTICULARS</th>
							        <th class="text-center">Fees detaile</th>
							        <th class="text-center">2018-19</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>ADMISSION FEES</td>
							        <td>AT TIME OF ADM.</td>
							        <td> - </td>
							        
							      </tr>
							      <tr>
							        <td>ANNUAL CHARGES</td>
							        <td>ANNUAL</td>
							        <td> - </td>
							        
							      </tr>
							      <tr>
							        <td>TECHNOLOGY IN EDU. FEE</td>
							        <td>ANNUAL</td>
							        <td> - </td>
							        
							      </tr>
							      <tr>
							        <td>DEVELOPMENT FUND</td>
							        <td>ANNUAL</td>
							        <td> - </td>
							        
							      </tr>
							      <tr>
							        <td>TUITION FEES</td>
							        <td>QUATERLY</td>
							        <td> - </td>
							        
							      </tr>
							      <tr>
							        <td>TOTAL</td>
							        <td></td>
							        <td> - </td>
							        
							      </tr>
							    </tbody>
							  </table>
							  
							  </div><!--//table-overflow-->
							</div>
						  </div><!--//tab-rutne-->
						  </div><!--//student-panel-->
	        			</div> <!-- /.col-12- -->
	        			<!--//MAIN CONTENT-->
				<!-- _________________ SideBar _________________ -->
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne float-left faq wow fadeInRight">
	        				<div class="wrapper">
	        					<!-- Notice sidebar include -->
								@include('fontend.layouts.includes.sidebars.notice-sidebar')

	        					<!-- side bar downloads section include -->
								@include('fontend.layouts.includes.sidebars.download-sidebar')

	        					<!--importent link section include  -->
								@include('fontend.layouts.includes.sidebars.quicklink-sidebar')
								
	        				</div> <!-- /.wrapper -->
	        			</div> <!-- /.sidebarOne -->
	        		</div>
	        	</div>
	        </div>
	

@stop