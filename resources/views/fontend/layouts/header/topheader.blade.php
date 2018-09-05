<div class="top-header">
	<div class="container">
		<div class="left-side float-left">
			<ul class="left-ul-margin">
			@if(!empty(instituteSetting()))	
				<li><span class="icon round-border"><i class="ficon flaticon-multimedia"></i></span> <a href="#" class="tran3s">{{ instituteSetting()->scl_email }}</a></li>
				<li><span class="icon round-border"><i class="ficon flaticon-technology"></i></span> <a href="#" class="tran3s">{{ instituteSetting()->scl_phone }}</a></li>
			@endif	
			</ul>
		</div> <!-- /.left-side -->
		<div class="dropdown right-side float-right">
			<ul>
			@if(!empty(instituteSetting()))	
				@php $jsonToArray=json_decode(instituteSetting()->institute_info); @endphp
				
				<li><a href="{{$jsonToArray->fb}}" class="tran3s round-border icon" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			@endif	
				<li class="login-area mrglogin14">
					<a id="img-login" href="{{url('http://demo.alokitosoftware.com/')}}" target="_blank" class="tran3s goems but-hover imlogbottom12" style="width: 75px;">
					</a>
					
				</li>
			</ul>
		</div> <!-- /.right-side -->
	</div>
</div>