<div id="banner">
	<div class="rev_slider_wrapper">
		<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
			<div id="main-banner-slider" class="rev_slider" data-version="5.0.7">
				<ul>
			<!-- slider data-index change -->
			@php $i=1; @endphp
				@foreach($sliders as $slider)

					<!-- SLIDE1  -->
					<li data-index="rs-2{{$i++}}" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{ asset('asset/slide/'.$slider->slide_image) }}" data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
						<!-- MAIN IMAGE -->
						<img class="img-responsive" src="{{ asset('/asset/slide/'.$slider->slide_image) }}"  alt="image"  class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
						<!-- LAYERS -->

						<!-- LAYER NR. 2 -->
						<div class="tp-caption" 
							data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['20','25','30','-85']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-transform_idle="o:1;"
				 
							data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
							data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
							data-mask_in="x:0px;y:[100%];" 
							data-mask_out="x:inherit;y:inherit;" 
							data-start="2000" 
							data-splitin="none" 
							data-splitout="none" 
							data-responsive_offset="on" 
							style="z-index: 6; white-space: nowrap;">
							<h2 class="homeSlider-heading">{{ $slider->slide_text}}<br><span class="p-color"> </span></h2>
						</div>
					
					</li><!--//end li-->
					@endforeach
							

				</ul>	
			</div>
		</div><!-- END REVOLUTION SLIDER -->
	</div> <!--  /#banner -->