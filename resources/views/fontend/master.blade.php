<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>@yield('title','ABC International School')</title>
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/fontend/css/style.css') }}">
	<!-- Main fevi icon -->
	<link rel="icon" href="{{URL::to('asset/logos/1.png')}}" type="image/gif" sizes="16x16">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/fontend/css/responsive.css') }}">
	<!-- j Query -->
	<script type="text/javascript" src="{{ asset('/fontend/vendor/jquery-2.1.4.js') }}"></script>
	<!-- Pie Charts-->
	<script type="text/javascript" src="{{ asset('/fontend/vendor/Chart.min.js') }}"></script>
	<link href="{{ URL::asset('asset/akm/css/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css"/>

	<!-- Bootstrap JS -->
	<script type="text/javascript" src="{{ asset('/fontend/vendor/bootstrap/bootstrap.min.js') }}"></script>
	<!-- calender -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Vendor js _________ -->
	<!-- datepicker calender -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/fontend/assets/css/bootstrap-datepicker.min.css') }}">

</head>

<body>
<div class="main-page-wrapper">


	<!-- Header _________________________________ -->
	<header class="main-header">
		<!-- top-header -->
	@include('fontend.layouts.header.topheader')
	<!-- /.top-header -->

		<!-- _______________________ Theme Menu _____________________ -->
		<!--Main Header-->
	@include('fontend.layouts.header.mainmenu')
	<!--//Main Header-->
	</header>

	<!-- Theme Banner ________________________________ -->
@yield('slider')
<!-- Event Section _______________________ -->
@yield('mainContent')


<!-- SubsCribe Banner ___________________ -->
@include('fontend.layouts.footer.subBanner')

<!-- Footer ______________________________ -->
@include('fontend.layouts.footer.footer')

<!-- Scroll Top Button -->
	<button class="scroll-top tran3s p-color-bg">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</button>


	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" id="notice_header">Modal Header</h4>
				</div>
				<div class="modal-body">
					<p><b>Date:</b> <span id="notice_date"> Notice Date</span></p><br/>
					<p><b>Description:</b> <span id="notice_body">This is notice description.</span></p>
					<br/>
					<p id="notice_file_container" class="hidden"><b>File:</b>
						<span>
							<a id="notice_file" download>Download</a>
						</span>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>





	<!-- Js File_________________________________ -->

	<!-- revolution -->
	<script src="{{ asset('/fontend/vendor/revolution/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('/fontend/vendor/revolution/jquery.themepunch.revolution.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/fontend/vendor/revolution/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/fontend/vendor/revolution/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/fontend/vendor/revolution/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/fontend/vendor/revolution/revolution.extension.kenburn.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/fontend/vendor/revolution/revolution.extension.actions.min.js') }}"></script>

	<!-- Google map js -->
	<script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
	<script src="{{ asset('/fontend/vendor/gmap.js') }}"></script>
	<!-- Bootstrap Select JS -->
	<script type="text/javascript" src="{{ asset('/fontend/vendor/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
	<!-- Time picker -->
	<script type="text/javascript" src="{{ asset('/fontend/vendor/time-picker/jquery.timepicker.min.js') }}"></script>
	<!-- WOW js -->
	<script type="text/javascript" src="{{ asset('/fontend/vendor/WOW-master/dist/wow.min.js') }}"></script>
	<!-- owl.carousel -->
	<script type="text/javascript" src="{{ asset('/fontend/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
	<!-- js count to -->
	<script type="text/javascript" src="{{ asset('/fontend/vendor/jquery.appear.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/fontend/vendor/jquery.countTo.js') }}"></script>

	<!-- Theme js -->
	<script type="text/javascript" src="{{ asset('/fontend/js/theme.js') }}"></script>

	<script src="{{ URL::asset('asset/akm/js/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ URL::asset('asset/akm/js/datatables/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('asset/akm/js/bootstrap/bootstrap-waitingfor.min.js') }}"></script>
	<!-- calender datepicker-->
	 <script type="text/javascript" src="{{ asset('/fontend/assets/js/bootstrap-datepicker.min.js') }}"></script>
@yield('js-script')
</div> <!-- /.main-page-wrapper -->
</body>

</html>
