
<div class="sidebar-box our-brochure">
	<div class="box-wrapper nav-box" style="min-height: 250px">
		<span class="sideBar-nav-title">
		<h4>ডাউনলোড</h4></span>	
		<!-- function col now in app\helpers\helpers.php file -->
		@foreach(downloadshelpers() as $notice)
		<a href="{{URL::to('asset/pdf/'.$notice->import_file)}}" style="color: red; font-weight: 600;" class="tran3s"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>{{$notice->title}}</a>
		@endforeach

	</div> <!-- /.box-wrapper -->
</div> <!-- /.sidebar-box.our-brochure -->