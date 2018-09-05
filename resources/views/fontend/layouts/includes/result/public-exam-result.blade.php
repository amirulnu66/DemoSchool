<div class="tab-rutne">
                        <div class="panel panel-info routine-panel">
                            <div class="panel-heading student-pane2">
                                <h3 class="class-routine-title"> এস.এস.সি পরীক্ষার ফলাফল</h3>
                            </div>
                            <div class="table-overflow">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="15%">Year</th>
                                        <th width="30%">Students</th>
                                        <th width="20%">A+</th>
                                        <th width="20%">A</th>
                                        <th width="15%">Pass</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                         <!--This sscPublicexamResult() method get form helpers controller  -->
                                @if(!empty(sscPublicexamResult()))   
                                    @foreach(sscPublicexamResult() as $sscResult)   
                                    <tr>
                                    <td>{{$sscResult->pass_year}}</td>
                                    <td>{{$sscResult->total_std}}</td>
                                    <td>{{$sscResult->gread_aplus}}</td>
                                    <td>{{$sscResult->gread_a}}</td>
                                    <td>{{$sscResult->pass_presen}}</td>
                                  </tr>
                                  @endforeach
                                @endif  
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--//tab-rutne-->

                    <div class="tab-rutne">
                        <div class="panel panel-info routine-panel">
                            <div class="panel-heading student-pane2">
                                <h3 class="class-routine-title">জে.এস.সি পরীক্ষার ফলাফল</h3>
                            </div>
                            <div class="table-overflow">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="15%">Year</th>
                                        <th width="30%">Students</th>
                                        <th width="20%">A+</th>
                                        <th width="20%">A</th>
                                        <th width="15%">Pass</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                @if(!empty(jscPublicexamResult()))   
                                    @foreach(jscPublicexamResult() as $jscResult)   
                                    <tr>
                                    <td>{{$jscResult->pass_year}}</td>
                                    <td>{{$jscResult->total_std}}</td>
                                    <td>{{$jscResult->gread_aplus}}</td>
                                    <td>{{$jscResult->gread_a}}</td>
                                    <td>{{$jscResult->pass_presen}}</td>
                                  </tr>
                                  @endforeach
                                @endif 
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--//tab-rutne-->