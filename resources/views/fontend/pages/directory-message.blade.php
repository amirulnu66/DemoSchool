@extends('fontend.master')

@section('title')

@section('mainContent')

    <!-- Inner Page Main Banner __________________ -->
    <div class="inner-page-banner">
        <div class="opacity">
            <div class="container">
                @if(!empty($teacherMessage))
                    <h2> {{ $teacherMessage->page_title }}</h2>
                @endif
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div> <!-- /.inner-page-banner -->

    <!-- Page Breadcrum __________________________ -->
    <div class="page-breadcrum">
        <div class="container">
            <ul>
            @if(!empty($directoryMessage))    
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>-</li>

                <li>{{$directoryMessage->breadcamp}}</li>
            @endif    
            </ul>
        </div> <!-- /.container -->
    </div> <!-- /.page-breadcrum -->


    <!-- Teacher Profile Page  ___________________ -->
    <div class="teacher-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                @if(!empty($directoryMessage))    
                    <div class="text-warpper">
                        <h4>{{$directoryMessage->heading_one}}</h4>
                        <p class="mmfix"> {{$directoryMessage->paragraph_one}}</p>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h4>{{$directoryMessage->heading_two}}</h4>
                                <p>{{$directoryMessage->paragraph_two}}</p>
                            </div> <!-- /.col- -->
                        </div>
                    </div> <!-- /.text-wrapper -->
                </div>

                @php $teacher_info=json_decode($directoryMessage->teacher_info, true);  @endphp


                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 teacher-sidebar float-left wow fadeInUp">
                    <div class="img-holder theme-bg-color"><img src="{{url('asset/uploads/'.$directoryMessage->profile_picture)}}" alt="Teacher"></div>
                    <div class="teachers-bio p-color-bg">
                        <h6>{{$teacher_info['name']}}</h6>
                        <p><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{$teacher_info['dept']}}</p>
                        <p><i class="fa fa-graduation-cap" aria-hidden="true"></i> {{$teacher_info['dgn']}}</p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$teacher_info['email']}}</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> {{$teacher_info['phone']}}</p>

                        <ul>
                            <li><a href="{{$teacher_info['fb']}}" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{$teacher_info['tw']}}" class="tran3s round-border icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="{{$teacher_info['gl']}}" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="{{$teacher_info['ln']}}" class="tran3s round-border icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> <!-- /.teachers-bio -->

                </div> <!-- /.teacher-sidebar -->
            @endif    

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.teacher-profile -->



    <!-- Our Teacher ________________________ -->
    <div class="our-teacher wow fadeInUp">
        <!--//bottom-theme-slider-->
        <!-- include('fontend.layouts.includes.themeSlider.themeslider') -->

    </div> <!-- /.our-teacher -->

@stop