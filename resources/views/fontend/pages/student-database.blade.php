@extends('fontend.master')
@section('title')
@section('mainContent')

	<!-- Inner Page Main Banner __________________ -->
	<div class="inner-page-banner">
		<div class="opacity">
			<div class="container">
				<h2>আমাদের স্টুডেন্ট </h2>
			</div> <!-- /.container -->
		</div> <!-- /.opacity -->
	</div> <!-- /.inner-page-banner -->


	<!-- Page Breadcrum __________________________ -->
	<div class="page-breadcrum teacher-banner">
		<div class="container">
			<ul>
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li>-</li>
				<li>Our Students</li>
			</ul>
		</div> <!-- /.container -->
	</div> <!-- /.page-breadcrum -->

	<!-- Event Section _______________________ -->
	<div class="popular-course wow fadeInUp theme-bg-color teacher-course contact-us-page padding-bott">

		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 sidebarOne float-left faq wow fadeInRight">
					<div class="sidebar-box row contact-us-form std-info">
						<h2 class="ste-list-title">শিক্ষার্থীর তথ্য </h2>
						
						<hr>
						<div class="course-item-wrapper">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 student-database">
								<form id="std_list_search_form" class="form-horizontal">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div class="row">
                                        <div class="col-md-3">
                                          <label for="firstname" class="control-label">Academic Year</label>
                                          <select class="form-control academicYear" id="academic_year" name="academic_year">
                                            <option value="" disabled selected>Select Academic Year</option>
                                            @if(!empty($academicYearList) AND count($academicYearList)>0)
                                                @foreach($academicYearList as $year)
                                                    <option value="{{$year->id}}">{{$year->year_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                      </div>
										
									 <div class="col-md-3">
                                          <label for="firstname" class="control-label">Academic Level</label>
                                          <select class="form-control academicLevel" id="academic_level" name="academic_level">
                                                <option value="" disabled selected>Select Level</option>
                                            </select>
                                     
                                      </div>
									 <div class="col-md-3">
                                          <label for="firstname" class="control-label">Class</label>
                                          <select class="form-control academicBatch" id="batch" name="batch">
                                                <option value="" disabled selected>Select Class</option>
                                            </select>
                 
                                    </div>	
									<div class="col-md-3">
                                      <label for="firstname" class="control-label">Section</label>
                                        <select class="form-control academicSection" id="section" name="section">
                                            <option value="" disabled selected>Select Section</option>
                                        </select> 
                                    </div>
                                  </div><br>  
									<div class="row">
										<div class="col-md-12 col-lg-12 student-data-btn">
											<button id="std_list_search_button" type="button" class="tran3s p-color-bg themehover">View Students</button>
										</div>
									</div>
								</form>
							</div>
						</div> <!-- /.course-item-wrapper -->
					</div>
					{{--std list container--}}
					<div id="std_list_container_row" class="row"> </div>
				</div> <!-- /.col- -->

				<!-- _________________ SideBar _________________ -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne float-right">
					<div class="wrapper">
            @include('fontend.layouts.includes.sidebars.notice-sidebar')    
                
            <!-- download sidebar include -->
            @include('fontend.layouts.includes.sidebars.download-sidebar')
					</div> <!-- /.wrapper -->
				</div> <!-- /.sidebarOne -->
			</div>
		</div>
	<script>
            $(document).ready(function () {
                var campus_id = {{env('CAMPUS_ID')}};
                var institute_id = {{env('INSTITUTE_ID')}};


                // request for parent list using batch section id
                $('#std_list_search_button').click(function () {
                    // section
                    var section = $('#section').val();
                    // checking
                    if(campus_id && institute_id && section){
                        // ajax request
                        $.ajax({
                             url: "{{URL::to('/student-list/search')}}",
                            type: 'POST',
                            cache: false,
                            data: $('form#std_list_search_form').serialize(),
                            datatype: 'html',

                            beforeSend: function() {
                                // show waiting dialog
                                 waitingDialog.show('Loading...');
                            },

                            success:function(data){
                                // hide waiting dialog
                                 waitingDialog.hide();
                                // append data
                                var std_list_container_row = $('#std_list_container_row');
                                std_list_container_row.html('');
                                std_list_container_row.append(data);
                            },

                            error:function(data){
                                // hide waiting dialog
                                waitingDialog.hide();
                                alert('No response form server');
                            }
                        });
                    }else{
                        // alert
                        alert('Please check all inputs are selected');
                    }
                });

                // request for batch list using level id
                jQuery(document).on('change','.academicYear',function(){
                    // console.log("hmm its change");

                    // get academic year id
                    var year_id = $(this).val();
                    var div = $(this).parent();
                    var op="";

                    // checking
                    if(campus_id && institute_id){
                        $.ajax({
                            url: "{{env("EMS_URL")}}/api/get-academic-level-list",
                            type: 'POST',
                            cache: false,
                            data: {
                                "institute":institute_id,
                                "campus":campus_id,
                                "id":year_id
                            }, //see the $_token
                            datatype: 'application/json',

                            beforeSend: function() {
                                // clear std list container
                                $('#std_list_container_row').html('');
                            },

                            success:function(response){
                                // checking
                                if(response.status=='success'){
                                    var data = response.data;
                                    //console.log(data.length);
                                    op+='<option value="0" selected>--- Select Level ---</option>';
                                    for(var i=0;i<data.length;i++){
                                        // console.log(data[i].level_name);
                                        op+='<option value="'+data[i].id+'">'+data[i].level_name+'</option>';
                                    }

                                    // set value to the academic secton
                                    $('.academicSection').html("");
                                    $('.academicSection').append('<option value="" selected>--- Select Section ---</option>');

                                    // set value to the academic batch
                                    $('.academicBatch').html("");
                                    $('.academicBatch').append('<option value="" selected>--- Select Class ---</option>');

                                    // set value to the academic batch
                                    $('.academicLevel').html("");
                                    $('.academicLevel').append(op);
                                }else{
                                    alert(response.msg);
                                }
                            },

                            error:function(){
                                alert(JSON.stringify(data));
                            }
                        });
                    }else{
                        // alert
                        alert('School Information not found');
                    }
                });

                // request for batch list using level id
                jQuery(document).on('change','.academicLevel',function(){
                    // console.log("hmm its change");

                    // get academic level id
                    var level_id = $(this).val();
                    var div = $(this).parent();
                    var op="";

                    // checking
                    if(campus_id && institute_id){
                        $.ajax({
                            url: "{{env("EMS_URL")}}/api/get-academic-batch-list",
                            type: 'POST',
                            cache: false,
                            data: {
                                "institute":institute_id,
                                "campus":campus_id,
                                "id":level_id
                            }, //see the $_token
                            datatype: 'application/json',

                            beforeSend: function() {
                                // clear std list container
                                $('#std_list_container_row').html('');
                            },

                            success:function(response){
                                if(response.status=='success') {
                                    var data = response.data;

                                    //console.log(data.length);
                                    op += '<option value="" selected>--- Select Class ---</option>';
                                    for (var i = 0; i < data.length; i++) {
                                        op += '<option value="' + data[i].id + '">' + data[i].batch_name + '</option>';
                                    }

                                    // set value to the academic batch
                                    $('.academicBatch').html("");
                                    $('.academicBatch').append(op);

                                    // set value to the academic secton
                                    $('.academicSection').html("");
                                    $('.academicSection').append('<option value="0" selected>--- Select Section ---</option>');
                                }else {
                                    alert(response.msg);
                                }
                            },

                            error:function(){
                                alert(JSON.stringify(data));
                            }
                        });
                    }else{
                        // alert
                        alert('School Information not found');
                    }
                });

                // request for section list using batch id
                jQuery(document).on('change','.academicBatch',function(){
                    console.log("hmm its change");

                    // get academic level id
                    var batch_id = $(this).val();
                    var div = $(this).parent();
                    var op="";
                    // checking
                    if(campus_id && institute_id){
                        $.ajax({
                            url: "{{env("EMS_URL")}}/api/get-academic-section-list",
                            type: 'POST',
                            cache: false,
                            data: {
                                "institute":institute_id,
                                "campus":campus_id,
                                "id":batch_id
                            }, //see the $_token
                            datatype: 'application/json',

                            beforeSend: function() {
                                // clear std list container
                                $('#std_list_container_row').html('');
                            },

                            success:function(response){
                                if(response.status=='success') {
                                    var data = response.data;

                                    //console.log(data.length);
                                    op+='<option value="" selected>--- Select Section ---</option>';
                                    for(var i=0;i<data.length;i++){
                                        op+='<option value="'+data[i].id+'">'+data[i].section_name+'</option>';
                                    }

                                    // set value to the academic batch
                                    $('.academicSection').html("");
                                    $('.academicSection').append(op);
                                }else {
                                    alert(response.msg);
                                }
                            },

                            error:function(){
                                alert(JSON.stringify(data));
                            }
                        });
                    }else{
                        // alert
                        alert('School Information not found');
                    }
                });


                // request for section list using batch id
                jQuery(document).on('change','.academicSection',function(){
                    // clear std list container
                    $('#std_list_container_row').html('');
                });

            });
    </script>	
@endsection