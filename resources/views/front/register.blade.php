@include('front.header')
  <div class="container my-4">
    
   <div class="row">
       <div class="col-lg-8 col-md-12 offset-md-2">
           <div class="signup-form">
               <h2 class="text-center py-3">Signup Form</h2>
               <div class="register-msg"></div>
               <form class="mt-4">
                  <div class="form-group row">
                    
                    <div class="col-sm-12">
                      <input type="text" class="form-control register-name" id="name" name="name" placeholder="Name">
                      <i class="register-name-msg text-danger"></i>
                    </div>
                    
                  </div>
                  
                  <div class="form-group row">

                    <div class="col-sm-12">
                      <input type="email" class="form-control register-email" id="inputEmail3" name="email" placeholder="Email">
                      <i class="register-email-msg text-danger"></i>
                    </div>
                    
                  </div>
                  
                  <div class="form-group row">
                    
                    <div class="col-sm-12">
                      <input type="text" class="form-control register-mobile" id="mobile" name="mobile" placeholder="Mobile Number">
                      <i class="register-mobile-msg text-danger"></i>
                    </div>
                    
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <input type="password" class="form-control register-password" id="inputPassword" name="password" placeholder="Password">
                      <i class="register-password-msg text-danger"></i>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control register-cpassword" id="inputcPassword" name="cpassword" placeholder="Confirm Password">
                      <i class="register-cpassword-msg text-danger"></i>
                    </div>
                  </div>
                  
                    
                    <div class="subbtn">
                        <button style="width: 50%;" type="button" class="mt-2 blue_color_bg" id="register-now"  >Submit</button>
                    </div>
                </form>
           </div>
            
       </div>
   </div>
  </div>
  
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">

		$(document).ready(function() {
          $('#register-now').on('click',function () {
            
            var check = true;
            
            var register_name = $('.register-name').val();
            
            if(register_name == '' || register_name == null){
                
                $('.register-name-msg').text('Please enter name');
                check = false;
            }else
            {
                $('.register-name-msg').text('');
            }
            
            var register_email = $('.register-email').val();
            
        	var mailFormat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        	
    		if (register_email == "" || register_email == null) {
    			$('.register-email-msg').text('Please enter your Email');
    			check = false;
    		}
    		else if (!mailFormat.test(register_email)) {
    				$('.register-email-msg').text('Please enter your proper Email');
    				check = false;
    		}else
            {
                $('.register-email-msg').text('');
            }
                
            var register_mobile = $('.register-mobile').val();
            
            var numberFormat = /^\d{10}$/;
    		if (register_mobile == "" || register_mobile == null) {
    			$('.register-mobile-msg').text('Please enter your Mobile number');
    			check = false;
    		}
    		else if (!numberFormat.test(register_mobile)) {
    			    $('.register-mobile-msg').text('Please enter your proper Mobile number');
    				check = false;
    		}else
            {
                $('.register-mobile-msg').text('');
            }
            
            
            var register_password = $('.register-password').val();
            
            if(register_password == '' || register_password == null){
                
                $('.register-password-msg').text('Please enter password');
                check = false;
            }else
            {
                $('.register-password-msg').text('');
            }
        
            var register_cpassword = $('.register-cpassword').val();
            
            if(register_cpassword == '' || register_cpassword == null){
                
                $('.register-cpassword-msg').text('Please enter confirm password');
                check = false;
                
            }else
            {
                $('.register-cpassword-msg').text('');
            }
            
            
            if(register_password != register_cpassword)
            {
                $('.register-cpassword-msg').text('confirm password mismatch');
                check = false;
                
            }else
            {
                $('.register-cpassword-msg').text('');
            }
            
            if(check == false){
                
			    return false;
		    }
		    else{
			
            $.ajax({
				type: 'GET',
				url: "{{route('now-register')}}",
				data: {register_name: register_name,register_email: register_email,register_password: register_password,register_cpassword: register_cpassword,register_mobile: register_mobile},
				success:function(res){
				    
				    if(res == '1')
				    {
				       $('.register-msg').html('<div class="alert alert-success">OTP sent at your mobile number.</div>'); 
				       
				       window.setTimeout(function() {
                            window.location.href = '{{route('verify-otp')}}';
                        }, 3000);
				       
				    }else
				    {
				        $('.register-msg').html(res);    
				    }
				    
					
				}
			})
			
			
		    }
            
		    return false;			

          });
        
        });
		
		
    </script>


 @include('front.footer')