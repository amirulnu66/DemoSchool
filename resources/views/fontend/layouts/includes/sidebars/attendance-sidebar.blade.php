				<div class="sidebar-box quick-event-list">
					<div class="box-wrapper nav-box">
						<span class="sideBar-nav-title"><h4>ছাত্র ছাত্রীদের উপস্থিতি</h4></span>
						<div class="pie-chart-box">
									<div class="atten-title">
										<h5>আজ ছাত্র-ছাত্রীর উপস্থিতি<br>{{date('d F, Y (l)')}}</h5></div>
									<div>
										<table class="table">
											<thead>
											<tr>
												<th width="50%">ছাত্র ছাত্রী</th>
												<th width="20%">মোট</th>
											</tr>
											</thead>

											<tbody>
											<tr class="st-total-bg">
												<td>মোট ছাত্র ছাত্রী</td>
												<td id="total_std">0</td>
											</tr>
											<tr class="st-success-bg">
												<td>মোট উপস্থিত</td>
												<td id="total_present_std">0 %</td>
											</tr>
											<tr class="st-denger-bg">
												<td>মোট অনুপস্থিত</td>
												<td id="total_absent_std">0 %</td>
											</tr>
											<tr class="st-success-bg">
												<td>ছাত্র উপস্থিত</td>
												<td id="male_present_percentage">0 %</td>
											</tr>
											<tr class="st-success-bg">
												<td>ছাত্রী উপস্থিত</td>
												<td id="female_present_percentage">0 %</td>
											</tr>
											</tbody>
                                            
										</table>
									</div>
									<canvas id="mycanvas" width="256" height="256"></canvas>
									<script>
                                        $(document).ready(function(){
                                            var campus_id = {{env('CAMPUS_ID')}};
                                            var institute_id = {{env('INSTITUTE_ID')}};
                                            // checking
                                            if(campus_id && institute_id){
                                                var total_std = $('#total_std');
                                                var total_present_std = $('#total_present_std');
                                                var total_absent_std = $('#total_absent_std');
                                                var total_male_present_perncet = $('#male_present_percentage');
                                                var total_female_present_perncet = $('#female_present_percentage');


                                                $.ajax({
                                                    url: "{{env('EMS_URL')}}/api/get-daily-attendance-report/"+institute_id+"/"+campus_id,
                                                    type: 'GET',
                                                    cache: false,
                                                    datatype: 'application/json',

                                                    beforeSend: function() {
                                                        //
                                                    },

                                                    success:function(data){
                                                        // checking
                                                        if(data.status=='success'){
                                                            var total = data.total_std;
                                                            var total_present = data.total_present_percentage;
                                                            var total_absent = data.total_absent_percentage;
                                                            var male_present = data.male_present_percentage;
                                                            var female_present = data.female_present_percentage;
                                                            // update student counting
                                                            total_std.html(total);
                                                            total_present_std.html(total_present+' %');
                                                            total_absent_std.html(total_absent+' %');
                                                            total_male_present_perncet.html(male_present+' %');
                                                            total_female_present_perncet.html(female_present+' %');
                                                            // load attendance chart
                                                            loadChart(total_present, total_absent);
                                                        }else{
                                                            // update student counting
                                                            total_std.html(data.std_count);
                                                            total_present_std.html(0+' %');
                                                            total_absent_std.html(100+' %');
                                                            // load attendance chart
                                                            loadChart(0, 100);
                                                        }
                                                    },

                                                    error:function(){
                                                        // alert
                                                        alert('No response from server');
                                                    }
                                                });
                                            }else{
                                                // load chart
                                                loadChart(0, 100);
                                                // alert
                                                alert('School Information not found');
                                            }

//                                            // pai chart loader
                                            function loadChart(total_present, total_absent) {
                                                var ctx = $("#mycanvas").get(0).getContext("2d");
                                                //pai chart data
                                                var data = [
                                                    {
                                                        value: total_present,
                                                        color: "#00a946"
                                                    },
                                                    {
                                                        value: total_absent,
                                                        color: "red"
                                                    }
                                                ];
                                                // pai chart initialization
                                                var paiChart = new Chart(ctx).Pie(data);
                                            }

                                        });
									</script>
								</div>
					</div> <!-- /.box-wrapper -->
				</div> <!-- /.sidebar-box.quick-event-list -->