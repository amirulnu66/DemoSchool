@extends('fontend.master')

@section('title')

@section('mainContent')
  <!-- Inner Page Main Banner __________________ -->
      <div class="inner-page-banner">
        <div class="opacity">
          <div class="container">
            <h2>ফিস ও পেমেন্টস </h2>
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
                    
              <table class="table table-bordered table-hover text-center table-striped table-lilac" role="grid" aria-describedby="datatable-dom_info" border="1">
                      <tbody>
                        <tr>
                        <td rowspan="2" style="width:95.75pt;border:solid windowtext 1.0pt;
                        mso-border-alt:solid windowtext .5pt;padding:20px;" width="128" valign="top">
                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                        text-align:center;line-height:normal" align="center">
                        <span style="font-size:10.0pt;
                        font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                        mso-fareast-theme-font:minor-latin" lang="BN">শ্রেনী<o:p></o:p></span></p>
                        </td>
                        <td colspan="2" style="width:191.5pt;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                        solid windowtext .5pt;padding:6px 0;" width="255" valign="top">
                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                        text-align:center;line-height:normal" align="center">
                        <span style="font-size:10.0pt;
                        font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                        mso-fareast-theme-font:minor-latin" lang="BN">সকল ছাত্র-ছাত্রী<o:p></o:p></span></p>
                        </td>
                        <td colspan="2" style="width:191.55pt;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                        solid windowtext .5pt;padding:6px 0;" width="255" valign="top">
                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                        text-align:center;line-height:normal" align="center">
                        <span style="font-size:10.0pt;
                        font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                        mso-fareast-theme-font:minor-latin" lang="BN">নতুন ভর্তি ছাত্র-ছাত্রী<o:p></o:p></span></p>
                        </td>
                       </tr>
                      <tr>
                      <td style="width:95.75pt;border-top:none;border-left:
                      none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                      mso-border-alt:solid windowtext .5pt;padding:5px 0;" width="128" valign="top">
                      <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                      text-align:center;line-height:normal" align="center">
                      <span style="font-size:10.0pt;
                      font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin" lang="BN">মাসিক বেতন<o:p></o:p></span></p>
                      </td>
                      <td style="width:95.75pt;border-top:none;border-left:
                      none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                      mso-border-alt:solid windowtext .5pt;padding:5px 0;" width="128" valign="top">
                      <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                      text-align:center;line-height:normal" align="center"><span style="font-size:10.0pt;
                      font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin" lang="BN">সেশন ফি<o:p></o:p></span></p>
                      </td>
                      <td style="width:95.75pt;border-top:none;border-left:
                      none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                      mso-border-alt:solid windowtext .5pt;padding:5px 0;" width="128" valign="top">
                      <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                      text-align:center;line-height:normal" align="center"><span style="font-size:10.0pt;
                      font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin" lang="BN">ভর্তি ফরম</span><span style="font-size:
                      10.0pt;font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                      </td>
                      <td style="width:95.8pt;border-top:none;border-left:
                      none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                      mso-border-alt:solid windowtext .5pt;padding:5px 0;" width="128" valign="top">
                      <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                      text-align:center;line-height:normal" align="center"><span style="font-size:10.0pt;
                      font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin" lang="BN">ভর্তি ফি</span><span style="font-size:
                      10.0pt;font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                      </td>
                     </tr>
                <!-- This (allFees) variable get forem welcomConteoller       -->
                  @if(!empty($allFees))   
                    {{--academic Fess looping data--}}
                    @foreach($allFees as $index=>$fees)
                    <tr>
                      <td>{{$fees->class_name}}</td>
                      <td>{{$fees->month_fees}}</td>
                      <td>{{$fees->session_fees}}</td>
                      <td>{{$fees->form_fees}}</td>
                      <td>{{$fees->admission_fees}}</td>
                      
                    </tr>
                    @endforeach
                  @else  
                    <tr>
                      <td colspan="5" class="alert-warning alert-auto-hide alert fade in text-center" style="opacity: 423.642; margin: 10px;">
                          <h4><i class="fa fa-warning"></i> No Record found. </h4>
                     </td>
                   </tr>
                  @endif                  
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