@include('front.header')

<!--About content-->
  <div class="container my-4">
      <div class="row">
           <div class="col-lg-8 col-md-12 offset-md-2">
               <div class="signup-form">
                   <h2 class="text-center py-3">Store Signup Form</h2>
                   <div class="store-register-msg"></div>
                   <form class="mt-4">
                      <div class="form-group row">
                        
                        <div class="col-sm-12">
                          <input type="text" class="form-control store-register-name" id="name" name="name" placeholder="Enter Full Name">
                          <i class="s-register-name-msg text-danger"></i>
                        </div>
                        
                      </div>
                      
                      <div class="form-group row">
                        
                        <div class="col-sm-6">
                          <input type="text" class="form-control store-register-mobile" id="mobile" name="mobile" placeholder="Enter Mobile">
                          <i class="s-register-mobile-msg text-danger"></i>
                        </div>
                        
                        <div class="col-sm-3">
                          <input type="text" class="form-control store-register-otp" id="otp" name="otp" placeholder="Enter OTP">
                          <i class="s-register-otp-msg text-danger"></i>
                        </div>
                        <div class="col-sm-3"><a class="btn btn-info resend" href="javascript:void(0)">Request OTP</a></div>
                        
                      </div>
                      
                      <div class="form-group row">
                        <div class="col-sm-6">
                          <input type="password" class="form-control store-register-password" id="inputPassword" name="password" placeholder="Password">
                          <i class="s-register-password-msg text-danger"></i>
                        </div>
                        <div class="col-sm-6">
                          <input type="password" class="form-control store-register-cpassword" id="inputcPassword" name="cpassword" placeholder="Confirm Password">
                          <i class="s-register-cpassword-msg text-danger"></i>
                        </div>
                      </div>
                      
                      
                        <div class="subbtn">
                            <button style="width: 50%;" type="button" class="mt-2 blue_color_bg" id="store-register-now" >Submit</button>
                        </div>
                    </form>
               </div>
                
           </div>
       </div>
          
      </div>
  </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">

		$(document).ready(function() {
          $('#store-register-now').on('click',function () {
            
            var check = true;
            
            var register_name = $('.store-register-name').val();
            
            if(register_name == '' || register_name == null){
                
                $('.s-register-name-msg').text('Please enter name');
                check = false;
            }else
            {
                $('.s-register-name-msg').text('');
            }
            
            
            var register_otp = $('.store-register-otp').val();
            
            if(register_otp == '' || register_otp == null){
                
                $('.s-register-otp-msg').text('Please enter otp');
                check = false;
            }else
            {
                $('.s-register-otp-msg').text('');
            }
            

            var register_mobile = $('.store-register-mobile').val();
            
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
            
            
            var register_password = $('.store-register-password').val();
            
            if(register_password == '' || register_password == null){
                
                $('.s-register-password-msg').text('Please enter password');
                check = false;
            }else
            {
                $('.s-register-password-msg').text('');
            }
        
            var register_cpassword = $('.store-register-cpassword').val();
            
            if(register_cpassword == '' || register_cpassword == null){
                
                $('.s-register-cpassword-msg').text('Please enter confirm password');
                check = false;
                
            }else
            {
                $('.s-register-cpassword-msg').text('');
            }
            
            
            if(register_password != register_cpassword)
            {
                $('.s-register-cpassword-msg').text('confirm password mismatch');
                check = false;
                
            }else
            {
                $('.s-register-cpassword-msg').text('');
            }
            
            
            if(check == false){
                
			    return false;
		    }
		    else{
			
            $.ajax({
				type: 'GET',
				url: "{{route('post-store-register')}}",
				data: {register_name: register_name,register_otp: register_otp,register_password: register_password,
				register_cpassword: register_cpassword,register_mobile: register_mobile,
				},
				success:function(res){
				    
				    if(res == '1')
				    {
				       $('.store-register-msg').html('<div class="alert alert-success">You are registred, Please login now</div>'); 
				       
				       window.setTimeout(function() {
                            location.reload();
                        }, 3000);
				       
				    }else
				    {
				        $('.store-register-msg').html(res);    
				    }
				    
					
				}
			})
			
			
		    }
            
		    return false;			

          });
          
          
          /************ resend OTP *****************/
          
          $('.resend').on('click',function () {
            
            var check = true;

            var register_mobile = $('.store-register-mobile').val();
            
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
				type: 'GET',
				url: "{{route('store-resend-otp')}}",
				data: {register_mobile: register_mobile,
				},
				success:function(res){
				    
				     $('.s-register-mobile-msg').text(res);
				}
			})
			
			
		    }
            
		    return false;			

          });
          
          
          
          /************ resend OTP *****************/
          
          
          
        
        });
		
		
    </script>

@include('front.footer')