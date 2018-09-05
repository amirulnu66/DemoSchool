
<div class="subscribe-banner p-color-bg wow fadeInUp">


<div class="container">
<div class="row">
	<h3>সাবস্ক্রাইব করুন</h3>
	<p>Receive weekly newsletter with educational materials, new courses, most popular posts, popular books and much more!</p>

	<!-- <div class="text-center bg-red" style="color: #222222; height: 50px; margin-bottom: 10px; "> -->
	<div id="subscribe_msg_container" class="col-md-12 hide text-success">
		<p id="subscribe_msg"></p>
	</div>

	</div>
	<div class="error"></div>
	<form id="subform" class="clear-fix">
		<input type="email" name="sub_email" id="subEmail" class="float-left wow fadeInLeft" placeholder="ইমেইল" required="">
		<button type="button" class="float-left tran3s wow fadeInRight" id="btn-submit">Subscribe</button>
	</form>

	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		
<script>
   $(document).ready(function() {

       function ValidateEmail(mail) {
		 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
		    return (true)
		  }else{
		    return (false)
		  }
		}  

		  $('#btn-submit').click(function() {  
           		var subscribe_msg = $('#subscribe_msg');
           		var subscribe_msg_container = $('#subscribe_msg_container');
           		// show subscribe_msg_container
           		subscribe_msg_container.addClass('hide');

		        var emailadressVal = $("#subEmail").val();
		        /*alert(emailadressVal);*/
		        var token = '{{csrf_token()}}'
		        if(ValidateEmail(emailadressVal)) {
		            $.ajax({
		               url: "{{ url('/subpub/subscribe/store')}}",
		               type: 'post',
		               data: {'sub_email':emailadressVal, '_token':token},

		               beforeSend: function () {

		               }, 

		               success: function (data) {
		               	// show subscribe_msg_container
		               	subscribe_msg_container.removeClass('hide');
		                //chcking
		                if(data.status == 'success'){
		                subscribe_msg.html(data.msg);
		                }else{
		                 subscribe_msg.html(data.msg);
		                }
		                // empty email field
		                $("#subEmail").val('');
		               },

		               error: function (data) {
		               	// show subscribe_msg_container
		           		subscribe_msg_container.removeClass('hide');
		           		subscribe_msg.html('No response from server');           
		               },
		           });
		        }else{
		        // show subscribe_msg_container
		            subscribe_msg_container.removeClass('hide');
		            subscribe_msg.html('You have entered an invalid email address!');
				}
				// subscribe message div hide
					$("#subscribe_msg_container").show().delay(4000).queue(function (next) {
				    $(this).hide();
				    next();				
		    	});
		    });		

    });

</script>
</div>
</div>
</div>