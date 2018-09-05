@extends('fontend.master')

@section('title')

@section('mainContent')
			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>আপডেট হেয়ার</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->

			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>Applicant Information</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

			<!-- Event Section _______________________ -->
	        <div class="event-details-page">
	        	<div class="container">
	        		@if(Session::has('success'))
		                   <div id="w0-success-0" class="alert-success alert-auto-hide alert fade in" style="opacity: 423.642;">
		                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                       <h4><i class="icon fa fa-check"></i> {{ Session::get('success') }} </h4>
		                   </div>
		               @elseif(Session::has('feiled'))
		                   <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
		                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                       <h4><i class="icon fa fa-check"></i> {{ Session::get('feiled') }} </h4>
		                   </div>
		               @elseif(Session::has('error'))
		                   <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
		                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                       <h4><i class="icon fa fa-check"></i> {{ Session::get('warning') }} </h4>
		                   </div>
		               @endif

	        			<div class="col-lg-12 col-xs-12 well">
	        				<div class="event-details-content clear-fix stud-tope-list">
	        					<h2 class="text-center">আপডেট  ফরম</h2>
	        					<div class="admission-pdf pull-right">
						            <a href="{{url('asset/pdf/pdf.docx')}}" download>PDF</a>
						            <a class="btn btn-success applicant-logout" href="javascript:">Log Out</a>	
						        </div>
	        						<form class="update-form-top60" method="post" action="{{URL::to('/admission/update/data/store')}}">
	        							<input type="hidden" name="_token" value="{{csrf_token()}}">
	        							<input type="hidden" name="campus_id" value="{{env('CAMPUS_ID')}}">
	        							<input type="hidden" name="institute_id" value="{{env('INSTITUTE_ID')}}">
	        							<input type="hidden" name="email" value="{{env('CAMPUS_ID').env('INSTITUTE_ID').rand(10,100).rand(101,1000)}}@gmail.com">
	        							<input type="hidden" name="password" value="123456">
	        							<input type="hidden" name="confirm_password" value="123456">

						          <div class="col-sm-12">
						            <div class="row">
						              <div class="col-md-12">
						                <legend>
						                <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
						                  <i class="fa fa-user"></i>
						                  শিক্ষার্থীর তথ্য
						                </abbr>
						              </legend>
						              </div>
						              <div class="col-lg-9 col-sm-8">
						              	<div class="row">
							              <div class="col-sm-6 form-group">
							                <label>বাংলায়</label>
							                <input type="text" name="std_name_bn" class="form-control" >
							              </div>
							              <div class="col-sm-6 form-group">
							                <label>ইংরেজী</label>
							                <input type="text" name="std_name" class="form-control" >
							              </div>
						              </div>
						              <div class="row">
							              <div class="col-sm-6 form-group">
							                <label>জন্ম তারিখ (জন্ম সনদ অনুযায়ী) </label>
							                <input type="text" name="birth_date" class="form-control datepicker" >
							              </div>
							              <div class="col-sm-6">
						                    <label for="firstname" class="control-label">লিঙ্গ</label>
						                    <select class="form-control" id="gender" name="gender" >
					                            <option value="">---Select Gender---</option>
					                          	<option value="0" >Male</option>
	                                            <option value="1">Female</option>
						                     </select>
						                  </div>
					                  </div>
						              </div>
						              <div class="col-lg-3 col-sm-4">
						              	<div class="applicant-img">
						              	<img src="{{url('asset/profile/st1.jpg')}}" alt="profile" width="180" height="200">
						              	
						              	<input class="browse-btn" type="file" name="profile-img" >
						              	</div>
						              </div>
						            </div> 
						            <div class="row">
						              <div class="col-md-12">
						                <legend>
						                <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
						                  <i class="fa fa-user"></i>
						                  পিতার নাম
						                </abbr>
						              </legend>
						              </div>
						              <div class="col-sm-3 form-group">
						                <label>বাংলায়</label>
						                <input type="text" name="father_name_bn" class="form-control" >
						              </div>
						              <div class="col-sm-3 form-group">
						                <label>ইংরেজী</label>
						                <input type="text" name="father_name" class="form-control" >
						              </div>
						              <div class="col-sm-3 form-group">
						                <label>পেশা</label>
						                <input type="text" name="father_occupation" class="form-control" >
						              </div>
						              <div class="col-sm-3 form-group">
						                <label>শিক্ষাগত যোগ্যতা</label>
						                <input type="text" name="father_education" class="form-control" r>
						              </div>
						            </div> 
						            <div class="row">
						              <div class="col-md-12">
						                <legend>
						                <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
						                  <i class="fa fa-user"></i>
						                  মাতার নাম
						                </abbr>
						              </legend>
						              </div>
						              <div class="col-sm-3 form-group">
						                <label>বাংলায়</label>
						                <input type="text" name="mother_name_bn" class="form-control" >
						              </div>
						              <div class="col-sm-3 form-group">
						                <label>ইংরেজী</label>
						                <input type="text" name="mother_name" class="form-control" >
						              </div>
						              <div class="col-sm-3 form-group">
						                <label>পেশা</label>
						                <input type="text" name="mother_occupation" class="form-control" >
						              </div>
						              <div class="col-sm-3 form-group">
						                <label>শিক্ষাগত যোগ্যতা</label>
						                <input type="text" name="mother_education" class="form-control" >
						              </div>
						            </div> 
						            
						            <div class="row">
						               <div class="col-md-12">
						                <legend>
						                <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
						                  <i class="fa fa-map-marker"></i>
						                  স্থায়ী ঠিকানা
						                </abbr>
						              </legend>
						              </div>
						              <div class="col-sm-6 form-group">
						                <label>গ্রাম/মহল্লা</label>
						                <input type="text" name="add_per_address" class="form-control" >
						              </div>
						              <div class="col-sm-6 form-group">
						                <label>ডাকঘর</label>
						                <input type="text" name="add_per_post" class="form-control" >
						              </div>
						            </div>
						            <div class="row">
						              <div class="col-sm-4 form-group">
						                <label>মোবাইল</label>
						                <input type="number" name="add_per_phone" class="form-control" >
						              </div>
						              <div class="col-md-4">
					                      <label for="firstname" class="control-label">জেলা </label>
					                      	<select class="form-control state" id="permanent" name="add_per_state" >
					                        	<option value="">---Select One---</option>
					                        	@if($stateList)
						                        	@foreach($stateList as $index=>$state)
						                        		<option value="{{$state->id}}">{{$state->name}}</option>
						                        	@endforeach
					                        	@endif
					                        </select>
					                  </div>
					                  <div class="col-md-4">
					                      <label for="firstname" class="control-label">উপজেলা </label>
					                      <select class="form-control" id="city_permanent" name="add_per_city" >
					                        <option value="">---Select One---</option>
					                       </select>
					                  </div>
						            </div> 

						            <div class="row">
						               <div class="col-md-12">
						                <legend>
						                <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
						                  <i class="fa fa-map-marker"></i>
						                  বর্তমান ঠিকানা
						                </abbr>
						              </legend>
						              </div>
						              <div class="col-sm-6 form-group">
						                <label>গ্রাম/মহল্লা</label>
						                <input type="text" name="add_pre_address" class="form-control" >
						              </div>
						              <div class="col-sm-6 form-group">
						                <label>ডাকঘর</label>
						                <input type="text" name="add_pre_post"  class="form-control" >
						              </div>
						            </div>
						            <div class="row">
						              <div class="col-sm-4 form-group">
						                <label>মোবাইল</label>
						                <input type="number" name="add_pre_phone" class="form-control" >
						              </div>
						               <div class="col-md-4">
					                      <label for="present" class="control-label">জেলা </label>
					                      <select class="form-control state" id="present" name="add_pre_state" >
					                          <option value="">---Select One---</option>
					                        	@if($stateList)
						                        	@foreach($stateList as $index=>$state)
						                        		<option value="{{$state->id}}">{{$state->name}}</option>
						                        	@endforeach
					                        	@endif
					                        </select>
					                  </div>
						              <div class="col-md-4">
					                      <label for="firstname" class="control-label">উপজেলা </label>
					                      <select class="form-control" id="city_present" name="add_pre_city" >
					                      	<option value="">---Select One---</option>
					                       </select>
					                 
					                  </div>
						            </div>  

						            

						            <div class="row">
						              <div class="col-md-12">
						                <legend>
						                <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
						                  <i class="fa fa-home"></i>
						                  অভিভাবকের তথ্য
						                  
						                </abbr>
						              </legend>
						              </div>
						            
						              <div class="col-sm-6 form-group">
						                <label>অভিভাবকের নাম (যদি প্রয়োজন হয়)</label>
						                <input type="text" name="gud_name" class="form-control" >
						              </div>
						              <div class="col-sm-6 form-group">
						                <label>মোবাইল</label>
						                <input type="number" name="gud_phone" class="form-control" >
						              </div>						                         
						            </div> 

						            <div class="row">
						               <div class="col-sm-6 form-group">
						                <label>পিতা/মাতা/অভিভাবকের বাৎসরিক আয়(টাকা)</label>
						                <input type="text" name="gud_income" class="form-control" >
						              </div>
						              <div class="col-sm-6 form-group">
						                <label>পিতা/মাতা/অভিভাবকের বাৎসরিক আয়(কথায়)</label>
						                <input type="text" name="gud_income_bn" class="form-control" >
						              </div>
						                           
						            </div>
						            <div class="row">
						            	<div class="col-md-12">
						                <legend>
						                <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
						                  <i class="fa fa-home"></i>
						                  যে শ্রেণীতে ভর্তি হতে চায়
						                  
						                </abbr>
						              </legend>
						              </div>
										<div class="col-md-4">
					                      <label for="academic_year" class="control-label">প্রাতিষ্ঠানিক বৎসর </label>
					                     	<select class="form-control academicYear" id="academic_year" name="academic_year" >
					                          <option value="">---Select Year---</option>
					                        @if(!empty($academicYearList) AND count($academicYearList)>0)
                                                @foreach($academicYearList as $year)
                                                    <option value="{{$year->id}}">{{$year->year_name}}</option>
                                                @endforeach
                                            @endif			                          
					                        </select>
					                 
					                  </div> 
					                	 <div class="col-md-4">
					                      <label for="academic_level" class="control-label">প্রাতিষ্ঠানিক লেভেল</label>
					                      	<select class="form-control academicLevel" id="academic_level" name="academic_level" >
					                          	<option value="">---Select Level---</option>
					                        </select>
					                 
					                  </div> 
					                  <div class="col-md-4">
				                      <label for="batch" class="control-label">শ্রেণী</label>
				                       <select class="form-control academicBatch" id="batch" name="batch" >
				                          	<option value="">---Select class---</option>
				                        </select>
				                  	</div> 
									</div>	
									<br>
						            <div class="row">
						            	<div class="col-md-12">
						                <legend>
						                <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like. First name, Middle name, Last name, Gender, DOB, etc.">
						                  <i class="fa fa-home"></i>
						                    অনান্য তথ্য 
						                </abbr>
						              </legend>
						              </div>
						               <div class="col-sm-4 form-group">
						                <label>সমাপনী পরীক্ষায় প্রাপ্ত (জি পি এ)</label>
						                <input type="text" name="psc_gpa" class="form-control" >
						              </div>
						              <div class="col-sm-4 form-group">
						                <label>সমাপনী পরীক্ষার রোল নম্বর </label>
						                <input type="text" name="psc_roll" class="form-control" >
						              </div>
						              <div class="col-sm-4 form-group">
						                <label>পাসের সন</label>
						                <input type="text" name="psc_year" class="form-control" >
						              </div>              
						            </div> 

						            <div class="row">
						               <div class="col-sm-4 form-group">
						                <label>বিদ্যালয়ের নাম </label>
						                <input type="text" name="psc_school" class="form-control" >
						              </div>
						               <div class="col-sm-4 form-group">
						                <label>প্রশংসাপত্র/ছাড়পত্র নম্বর</label>
						                <input type="text" name="psc_tes_no" class="form-control" >
						              </div>
						              <div class="col-sm-4 form-group">
						                <label>তারিখ</label>
						                <input type="text" name="psc_tes_date" class="form-control datepicker" >
						              </div>              
						            </div> 
						            <div class="form-group student-panel">
						            	<div class="routine-btn">
                                            <button type="submit" class="p-color-bg themehover">Update</button>
                                        </div>
						            </div>      
						          </div>
						        </form>         						
	        				</div> <!-- /.event-details-content -->
	        			</div> <!-- /.col- -->
	        	</div>
	        </div>

@stop
@section('js-script')
<script>
      $(document).ready(function () {
		      	//datepicker calender				       
    		$('.datepicker').datepicker();
                var campus_id = 2;
                var institute_id = 2;

				jQuery(document).on('change','.state', function(){
		                    // get academic level id
		                    var state_type = $(this).attr('id');
		                    var state_id = $(this).val();
		                    // checking
		                    if(state_id){
		                        $.ajax({
		                            url: "/ems/city-list/"+state_id,
		                            type: 'GET',
		                            cache: false,
		                            datatype: 'application/json',

		                            beforeSend: function() {
		                            },

		                            success:function(data){
		                            	var op = null;
		                            	op += '<option value="" selected>--- Select City ---</option>';
		                            	// set city list
		                                var city = $('#city_'+state_type);
		                                city.html('');
		                            	// checking
		                            	if(data.length>0){
		                                    for (var i=0; i<data.length; i++) {
		                                        op += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
		                                    }    
		                            	} 
		                            	// append
		                            	city.append(op);                               
		                            },

		                            error:function(){
		                                //alert(JSON.stringify(data));
		                            }
		                        });
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

            });
    </script>

@endsection