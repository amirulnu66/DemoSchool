@extends('fontend.master')

@section('title')

@section('mainContent')

	<!-- Inner Page Main Banner __________________ -->
	<div class="inner-page-banner">
		<div class="opacity">
			<div class="container">
				<h2>ক্লাস রুটিন</h2>
			</div> <!-- /.container -->
		</div> <!-- /.opacity -->
	</div> <!-- /.inner-page-banner -->


	<!-- Page Breadcrum __________________________ -->
	<div class="page-breadcrum teacher-banner">
		<div class="container">
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li>-</li>
				<li>Class Routine</li>
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
						<div class="panel panel-info routine-panel">
							<div class="panel-heading">
								<h3 class="class-routine-title">ক্লাস রুটিন</h3>
							</div>
							<br>
							<form id="time_table_search_form" class="form-horizontal">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
                                     <div class="col-md-3">
                                          <label for="firstname" class="control-label">Level</label>
                                          <select class="form-control academicLevel" id="academic_level" name="academic_level">
                                                <option value="" disabled selected>-- Select Level --</option>
                                                @if(!empty($academicLevelList) AND count($academicLevelList)>0)
                                                    @foreach($academicLevelList as $level)
                                                        <option value="{{$level->id}}">{{$level->level_name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                      </div>

                                       <div class="col-md-3">
                                          <label for="firstname" class="control-label">Class </label>
                                          <select class="form-control academicBatch" id="batch" name="batch">
                                                <option value="" disabled selected>-- Select Class --</option>
                                            </select>
                                     
                                      </div>
                                      <div class="col-md-3">
                                          <label for="firstname" class="control-label">Section</label>
                                          <select class="form-control academicSection" id="section" name="section">
                                                <option value="" disabled selected>-- Select Section --</option>
                                            </select>
                 
                                    </div>

									<div class="col-md-3">
                                      <label for="firstname" class="control-label">Shift</label>
                                        <select class="form-control academicShift" id="shift" name="shift">
                                            <option value="" disabled selected>-- Select Shift --</option>
                                            <option value="0">Day</option>
                                            <option value="1">Morning</option>
                                         </select>
                                    </div>
								<br>
								<div class="form-group">
									<div class="col-sm-12">
										<div class="routine-btn">
											<button id="time_table_search_button" type="button" class="p-color-bg themehover">View Routine</button>
										</div>
									</div>
								</div>
							</form> <!-- /form -->
						</div><!--//routine-panel-->

						<div id="academic_class_routine_container" class="tab-rutne">

						</div><!--//tab-rutne-->
					</div><!--//student-panel-->
				</div> <!-- /.col-8- -->

				<!--//MAIN CONTENT-->
				<!-- _________________ SideBar _________________ -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebarOne float-left faq wow fadeInRight">
					<div class="wrapper">

            @include('fontend.layouts.includes.sidebars.notice-sidebar')    
                
            <!-- download sidebar include -->
            @include('fontend.layouts.includes.sidebars.download-sidebar')


					</div> <!-- /.wrapper -->
				</div> <!-- /.sidebarOne -->
			</div>
		</div>
	</div>

	<script>
        $(document).ready(function () {
            var campus_id = {{env('CAMPUS_ID')}};
            var institute_id = {{env('INSTITUTE_ID')}};

            // request for parent list using batch section id
            $('#time_table_search_button').click(function () {
                // section
                var section = $('#section').val();
                var shift = $('#shift').val();
                // checking
                if(campus_id && institute_id && section && shift){
                    // ajax request
                    $.ajax({
                        url: "{{URL::to('/routine/timetable/search')}}",
                        type: 'POST',
                        cache: false,
                        data: $('form#time_table_search_form').serialize(),
                        datatype: 'html',

                        beforeSend: function() {
                            // show waiting dialog
                              waitingDialog.show('Loading...');
                        },

                        success:function(data){
                            // hide waiting dialog
                             waitingDialog.hide();
                            // append data
                            var academic_class_routine_container = $('#academic_class_routine_container');
                            academic_class_routine_container.html('');
                            academic_class_routine_container.append(data);
                        },

                        error:function(data){
                            // hide waiting dialog
                            waitingDialog.hide();
                            // alert
                            alert('No response form server');
                        }
                    });
                }else{
                    // alert
                    alert('Please check all inputs are selected');
                }
            });

            // request for batch list using level id
            jQuery(document).on('change','.academicLevel',function(){
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
                            // clear academic_class_routine_container
                            $('#academic_class_routine_container').html('');
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
                                // shift reset
                                $('#shift option:first').prop('selected', true);
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
                            // clear academic_class_routine_container
                            $('#academic_class_routine_container').html('');
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
                                // shift reset
                                $('#shift option:first').prop('selected', true);
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
                $('#academic_class_routine_container').html('');
                // shift reset
                $('#shift option:first').prop('selected', true);
            });

        });
	</script>

@stop