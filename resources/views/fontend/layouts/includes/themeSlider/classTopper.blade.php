<div class="latest-event-slider event-section wow fadeInUp bg-color-fix topadding0">
<div class="container">
        <h3> আমাদের স্কুলের সেরা ছাত্র ছাত্রী</h3>
        <div class="row">
            <div class="theme-slider">
            <!-- This variable get HomeController     -->
                @if($academicTopper AND count($academicTopper)>1)
                    @foreach($academicTopper as $topper)
                         
                <div class="item hvr-float-shadow">
                    <div class="single-event class-toper-section theme-bg-color">
                        <div class="date p-color toper-img"><span>
                            <img class="img-circle" src="{{$topper->photo}}" alt="Cinque Terre">
                        </span> {{$topper->gr_no}}</div>
                        <a href="#"><h6>{{$topper->name}}</h6></a>
                        <p><strong>Standard:  </strong> {{$topper->section}}</p>
                    </div> <!-- /.single-event -->
                </div> <!-- /.item -->
                       
                    @endforeach
                @else
                <h5 class="text-center" style="font-size: 16px; padding: 10px; letter-spacing: 1px;">
                    <strong>No Records Found</strong> 
                </h5>
           @endif

            </div> <!-- /.theme-slider -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.latest-event-slider -->   