<div class="sidebar-box quick-event-list">

	<div class="box-wrapper nav-box" style="min-height: 250px">

		<span class="sideBar-nav-title">

		<h4>প্রাতিষ্ঠানিক নোটিশ</h4></span>

		<div class="box-wrapper-notice">

			<marquee behavior="scroll" direction="up" scrolldelay="250" onmouseover="this.stop();" onmouseout="this.start();" style="text-align:center; height:auto; line-height:normal;">

				<ul>

					{{--checking notice list--}}

					@if(!empty($noticeList) AND count($noticeList)>0)

						{{--notice list looping--}}

						@foreach($noticeList as $notice)

							<li style="margin: 0px 0px; text-align: justify; ">

								<a id="{{$notice->id}}" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="{{date('d M, Y', strtotime($notice->date))}}" data-key="{{$notice->file}}" data-title="{{$notice->file_path}}" data-content="{{$notice->description}}">

									{{$notice->title}}

								</a>

							</li>

						@endforeach

					@endif

				</ul>

			</marquee>

		</div>

	</div> <!-- /.box-wrapper -->

</div> <!-- /.sidebar-box.quick-event-list -->



