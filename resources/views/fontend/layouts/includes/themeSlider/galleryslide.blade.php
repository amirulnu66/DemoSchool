<div class="latest-event-slider event-section wow fadeInUp student-active">
	        <div class="container">
				<h3 class="gatext-left">স্কুলের ফটো গ্যালারি</h3>
	        		<div class="row">
	        			<div class="theme-slider glarry-slider">
	        				<!-- this function galleryslide() get form helper  -->
	        				@foreach(galleryslide() as $gallery)
	        				<div class="item">
	        					<div class="item-wrapper theme-bg-color tran3s hvr-float-shadow">
	        						<div class="img-holder round-border">
		        						<img src="{{url('asset/gallery/'.$gallery->blog_image)}}" alt="Teacher">
		        						<div class="overlay round-border tran4s">
		        						
		        						</div>
		        					</div> <!-- /.img-holder -->
		        					<a href="{{URl::to('/blog/gallery-page')}}}"><h6><strong>গ্যালারি </strong>: {{$gallery->blog_title}}</h6></a>

	        					</div>
	        				</div> <!-- /.item -->
	        				@endforeach

	        				
	        			</div>
	        		</div> <!-- /.row -->
	        	</div> <!-- /.container -->
	</div> <!-- /.latest-event-slider -->
	        