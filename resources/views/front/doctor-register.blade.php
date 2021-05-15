@include('front.header')

<!--About content-->
  <div class="container my-4">
      <div class="row">
           <div class="col-lg-8 col-md-12 offset-md-2">
               <div class="signup-form">
                   <h2 class="text-center py-3">Doctor's Signup Form</h2>
                   <div class="doctor-register-msg"></div>
                   <form class="mt-4">
                      <div class="form-group row">
                        
                        <div class="col-sm-6">
                          <input type="text" class="form-control doctor-register-name" id="name" name="name" placeholder="Enter Full Name">
                          <i class="d-register-name-msg text-danger"></i>
                        </div>
                        
                        <div class="col-sm-6">
                            
                            <select class="form-control doctor-register-specialization" id="specialization" name="specialization" required>
                                <option value="">Select Specialist</option>
                        		@foreach($specialists as $specialist)
                        		<option value="{{$specialist->name}}">{{$specialist->name}}</option>
                        		@endforeach
                        	</select>
                            <i class="d-register-specialization-msg text-danger"></i>
                            
                        </div>
                        
                      </div>
                      
                      <div class="form-group row">
                        
                        <div class="col-sm-6">
                          <input type="text" class="form-control doctor-register-mobile" id="mobile" name="mobile" placeholder="Enter Mobile">
                          <i class="d-register-mobile-msg text-danger"></i>
                        </div>
                        
                        <div class="col-sm-3">
                          <input type="text" class="form-control doctor-register-otp" id="otp" name="otp" placeholder="Enter OTP">
                          <i class="d-register-otp-msg text-danger"></i>
                        </div>
                        <div class="col-sm-3"><a class="btn btn-info resend" href="javascript:void(0)">Request OTP</a></div>
                        
                      </div>
                      
                      <div class="form-group row">
                        <div class="col-sm-6">
                          <input type="password" class="form-control doctor-register-password" id="inputPassword" name="password" placeholder="Password">
                          <i class="d-register-password-msg text-danger"></i>
                        </div>
                        <div class="col-sm-6">
                          <input type="password" class="form-control doctor-register-cpassword" id="inputcPassword" name="cpassword" placeholder="Confirm Password">
                          <i class="d-register-cpassword-msg text-danger"></i>
                        </div>
                      </div>
                      
                      
                        <div class="subbtn">
                            <button style="width: 50%;" type="button" class="mt-2 blue_color_bg" id="doctor-register-now" >Submit</button>
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
          $('#doctor-register-now').on('click',function () {
            
            var check = true;
            
            var register_name = $('.doctor-register-name').val();
            
            if(register_name == '' || register_name == null){
                
                $('.d-register-name-msg').text('Please enter name');
                check = false;
            }else
            {
                $('.d-register-name-msg').text('');
            }
            
            
            var register_otp = $('.doctor-register-otp').val();
            
            if(register_otp == '' || register_otp == null){
                
                $('.d-register-otp-msg').text('Please enter otp');
                check = false;
            }else
            {
                $('.d-register-otp-msg').text('');
            }
            
            var register_specialization = $('.doctor-register-specialization').val();
            
            if(register_specialization == '' || register_specialization == null){
                
                $('.d-register-specialization-msg').text('Please enter specialization');
                check = false;
            }else
            {
                $('.d-register-specialization-msg').text('');
            }
            
            var register_mobile = $('.doctor-register-mobile').val();
            
            var numberFormat = /^\d{10}$/;
    		if (register_mobile == "" || register_mobile == null) {
    			$('.d-register-mobile-msg').text('Please enter your Mobile number');
    			check = false;
    		}
    		else if (!numberFormat.test(register_mobile)) {
    			    $('.d-register-mobile-msg').text('Please enter your proper Mobile number');
    				check = false;
    		}else
            {
                $('.d-register-mobile-msg').text('');
            }
            
            
            var register_password = $('.doctor-register-password').val();
            
            if(register_password == '' || register_password == null){
                
                $('.d-register-password-msg').text('Please enter password');
                check = false;
            }else
            {
                $('.d-register-password-msg').text('');
            }
        
            var register_cpassword = $('.doctor-register-cpassword').val();
            
            if(register_cpassword == '' || register_cpassword == null){
                
                $('.d-register-cpassword-msg').text('Please enter confirm password');
                check = false;
                
            }else
            {
                $('.d-register-cpassword-msg').text('');
            }
            
            
            if(register_password != register_cpassword)
            {
                $('.d-register-cpassword-msg').text('confirm password mismatch');
                check = false;
                
            }else
            {
                $('.d-register-cpassword-msg').text('');
            }
            
            
            if(check == false){
                
			    return false;
		    }
		    else{
			
            $.ajax({
				type: 'GET',
				url: "{{route('post-doctor-register')}}",
				data: {register_name: register_name,register_otp: register_otp,register_specialization: register_specialization,
				register_password: register_password,register_cpassword: register_cpassword,register_mobile: register_mobile,
				},
				success:function(res){
				    
				    if(res == '1')
				    {
				       $('.doctor-register-msg').html('<div class="alert alert-success">You are registred, Please login now</div>'); 
				       
				       window.setTimeout(function() {
                            location.reload();
                        }, 3000);
				       
				    }else
				    {
				        $('.doctor-register-msg').html(res);    
				    }
				    
					
				}
			})
			
			
		    }
            
		    return false;			

          });
          
          
          /************ resend OTP *****************/
          
          $('.resend').on('click',function () {
            
            var check = true;

            var register_mobile = $('.doctor-register-mobile').val();
            
            var numberFormat = /^\d{10}$/;
    		if (register_mobile == "" || register_mobile == null) {
    			$('.d-register-mobile-msg').text('Please enter your Mobile number');
    			check = false;
    		}
    		else if (!numberFormat.test(register_mobile)) {
    			    $('.d-register-mobile-msg').text('Please enter your proper Mobile number');
    				check = false;
    		}else
            {
                $('.d-register-mobile-msg').text('');
            }
            
            
            if(check == false){
                
			    return false;
		    }
		    else{
			
            $.ajax({
				type: 'GET',
				url: "{{route('doctor-resend-otp')}}",
				data: {register_mobile: register_mobile,
				},
				success:function(res){
				    
				     $('.d-register-mobile-msg').text(res);
				}
			})
			
			
		    }
            
		    return false;			

          });
          
          
          
          /************ resend OTP *****************/
          
          
          
        
        });
		
		
    </script>

@include('front.footer')