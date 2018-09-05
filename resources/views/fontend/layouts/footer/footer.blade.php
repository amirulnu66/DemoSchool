<footer>

	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-about">
					<h4>আমাদের কথা</h4>
				@if(!empty(instituteSetting()))	
					@php $jsonToArray=json_decode(instituteSetting()->institute_info); @endphp
					<p>{{ instituteSetting()->scl_description }}</p>
					
					<ul>
						<li><a href="{{$jsonToArray->fb}}" class="tran3s round-border icon" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        				<li><a href="{{$jsonToArray->tw}}" class="tran3s round-border icon" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="{{$jsonToArray->gl}}" class="tran3s round-border icon" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="{{$jsonToArray->ln}}" class="tran3s round-border icon" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				@endif	
				</div> <!-- /.footer-about -->

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-contact">
					<h4>যোগাযোগ</h4>
					<ul>
					@if(!empty(instituteSetting()))	
						<li>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<a href="javascript:" class="tran3s">{{ instituteSetting()->scl_email }}</a>
						</li>
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i>
							{{ instituteSetting()->scl_phone }}
						</li>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i>
							<a href="javascript:" class="tran3s">{{ instituteSetting()->scl_address }}</a>
							</li>
					@endif		
					</ul>
				</div> <!-- /.footer-contact -->

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-quick-link">
					<h4>গুরুত্বপূর্ণ লিঙ্ক</h4>
					<ul>
						<li><a href="http://www.ntrca.gov.bd" target="_blank" class="tran3s"><i class="fa fa-angle-double-right" aria-hidden="true"></i> বেসরকারি শিক্ষক নিবন্ধন ও প্রত্যয়ন কর্তৃপক্ষ </a></li>

						<li><a href="http://www.banbeis.gov.bd" target="_blank" class="tran3s"><i class="fa fa-angle-double-right" aria-hidden="true"></i>বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো </a></li>

						<li><a href="http://www.nctb.gov.bd" target="_blank" class="tran3s"><i class="fa fa-angle-double-right" aria-hidden="true"></i> জাতীয় শিক্ষাক্রম ও পাঠ্যপুস্তক বোর্ড </a></li>

						<li><a href="http://www.shed.gov.bd" target="_blank" class="tran3s"><i class="fa fa-angle-double-right" aria-hidden="true"></i> মাধ্যমিক ও উচ্চ শিক্ষা বিভাগ </a></li>

						<li><a href="http://www.mopme.gov.bd" target="_blank" class="tran3s"><i class="fa fa-angle-double-right" aria-hidden="true"></i> প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়</a></li>

						<li><a href="http://www.dpe.gov.bd/" target="_blank" class="tran3s"><i class="fa fa-angle-double-right" aria-hidden="true"></i> প্রাথমিক শিক্ষা অধিদপ্তর</a></li>
						
						<li><a href="http://dhakaeducationboard.gov.bd/" target="_blank" class="tran3s"><i class="fa fa-angle-double-right" aria-hidden="true"></i>  ঢাকা শিক্ষাবোর্ড</a></li>

						<li><a href="http://www.moedu.gov.bd" target="_blank" class="tran3s"><i class="fa fa-angle-double-right" aria-hidden="true"></i> শিক্ষা মন্ত্রণালয় </a></li>

						<li><a href="http://app1.nu.edu.bd/" target="_blank" class="tran3s"><i class="fa fa-angle-double-right" aria-hidden="true"></i> জাতীয় বিশ্ববিদ্যালয় ভর্তি </a></li>
					</ul>
				</div> <!-- /.footer-quick-link -->

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-event">
					<h4>ফেসবুক পেজ</h4>
      				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fvenusitltd%2F&tabs=timeline&width=300&height=280&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="100%" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div> <!-- /.footer-event -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.top-footer -->

	<div class="bottom-footer">
		<p>Copyright 2018 &copy; <a href="http://venusitltd.com/" class="tran3s" target="_blank">Venus IT Ltd</a> <span>|</span> Designed by <span class="p-color">Venus IT Ltd</span></p>
	</div> <!-- /.bottom-footer -->
</footer>