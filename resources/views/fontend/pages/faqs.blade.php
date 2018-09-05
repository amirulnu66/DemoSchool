@extends('fontend.master')

@section('title')

@section('mainContent')
	
	<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2> আমাদের জিজ্ঞাসা  </h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>-</li>
						<li>FAQ</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


			<!-- Faq Page ____________________________ -->
			<div class="faq-page faq">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInleft">
							<h4>প্রায়শঃ জিজ্ঞাসিত প্রশ্নাবলী </h4>
							<!-- ________________ Panel _______________ -->
							@if(!empty($faqsLeft))
	        					<div class="faq_panel">
									<div class="panel-group theme-accordion" id="accordion">
										@foreach($faqsLeft as $faq)
									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}">
									        {{$faq->qus_name}}</a>
									      </h6>
									    </div>
									    <div id="collapse{{$faq->id}}" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p> {{$faq->qus_ans}}</p>
									      </div>
									    </div>
									  </div> <!-- /panel 1 -->

									  @endforeach

									</div> <!-- end #accordion -->
								</div> <!-- End of .faq_panel -->
							@endif	
						</div>
						<!-- //fadeInleft -->


						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
							<h4>প্রায়শঃ জিজ্ঞাসিত প্রশ্নাবলী  </h4>
							<!-- ________________ Panel _______________ -->
	        					<div class="faq_panel">
									<div class="panel-group theme-accordion" id="accordiontwo">
									@if(!empty($faqsRight))	
										@foreach($faqsRight as $faqs)
									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordiontwo" href="#collapse{{$faqs->id}}">
									        {{ $faqs->qus_name }}</a>
									      </h6>
									    </div>
									    <div id="collapse{{$faqs->id}}" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>{{ $faqs->qus_ans }}</p>
									      </div>
									    </div>
									  </div> <!-- /panel 1 -->
									
									  @endforeach
								@endif	  
									</div> <!-- end #accordion -->
								</div> <!-- End of .faq_panel -->
						</div>
						<!--//fadeInRight-->

					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.faq-page -->

@stop