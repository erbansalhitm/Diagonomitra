@include('front.header')
  <div class="container my-4">
    
   <div class="row">
       <div class="col-lg-8 col-md-12 offset-md-2">
           <div class="signup-form">
               <h2 class="text-center py-3">Store Forgot Password</h2>
               <div class="s-forgot-msg"></div>
               <form class="mt-4">
                                    
					<div class="form-group row">

						<div class="col-sm-12">
						  <lebel>Enter Registred Mobile Number</lebel>	
						  <input type="text" class="form-control s-register-mobile" id="mobile" name="mobile" placeholder="Mobile Number">
						  <i class="s-register-mobile-msg text-danger"></i>
						</div>

					</div>

					<div class="subbtn">
						<button style="width: 100%;" type="button" class="mt-2 blue_color_bg" id="s-forgot-now" >Send Password</button>
					</div>
					
                </form>
           </div>
            
       </div>
   </div>
  </div>
  
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">

		$(document).ready(function() {
          $('#s-forgot-now').on('click',function () {
            
            var check = true;
           
			var _token = "{{ csrf_token() }}";
			
            var register_mobile = $('.s-register-mobile').val();
            
            var numberFormat = /^\d{10}$/;
    		if (register_mobile == "" || register_mobile == null) {
    			$('.s-register-mobile-msg').text('Please enter your Mobile number');
    			check = false;
    		}
    		else if (!numberFormat.test(register_mobile)) {
    			    $('.s-register-mobile-msg').text('Please enter your proper Mobile number');
    				check = false;
    		}else
            {
                $('.s-register-mobile-msg').text('');
            }
                        
            if(check == false){
                
			    return false;
		    }
		    else{
			
            $.ajax({
				type: 'post',
				url: "{{route('store-forgot-password')}}",
				data: {_token: _token,register_mobile: register_mobile},
				success:function(res){
				    
				    if(res == '1')
				    {
				       $('.s-forgot-msg').html('<div class="alert alert-success">Password sent at your mobile number.</div>'); 
				       
				       window.setTimeout(function() {
                            location.reload();
                        }, 3000);
				       
				    }else
				    {
				        $('.s-forgot-msg').html(res);    
				    }
				    					
				}
			})
			
			
		    }
            
		    return false;			

          });
        
        });
		
		
    </script>
    
 @include('front.footer')