@include('front.header')
  <div class="container my-4">
    
   <div class="row">
       <div class="col-lg-8 col-md-12 offset-md-2">
           <div class="signup-form">
               <h2 class="text-center py-3">Verify OTP</h2>
               <div class="otp-msg"></div>
               <form class="mt-4">
                  <div class="form-group row">
                    
                    <div class="col-sm-12">
                      <input type="text" class="form-control register-otp" id="otp" name="otp" placeholder="Enter Your OTP">
                      <i class="register-otp-msg text-danger"></i>
                    </div>
                    
                  </div>
                  
                    <div class="subbtn">
                        <button style="width: 50%;" type="button" class="mt-2 alert-success" id="resend-now" >Resend</button>
                        <button style="width: 50%;" type="button" class="mt-2 blue_color_bg" id="verify-now" >Submit</button>
                    </div>
                </form>
           </div>
            
       </div>
   </div>
  </div>
  
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">

		$(document).ready(function() {
          $('#verify-now').on('click',function () {
            
            var check = true;
            
            var register_otp = $('.register-otp').val();
            
            if(register_otp == '' || register_otp == null){
                
                $('.register-otp-msg').text('Please enter otp');
                check = false;
            }else
            {
                $('.register-otp-msg').text('');
            }
            
            if(check == false){
                
			    return false;
		    }
		    else{
			
            $.ajax({
				type: 'GET',
				url: "{{route('submit-verify-otp')}}",
				data: {register_otp: register_otp},
				success:function(res){
				    
				    if(res == '1')
				    {
				       $('.otp-msg').html('<div class="alert alert-success">You are successfully registred.</div>'); 
				       
				       window.setTimeout(function() {
                            window.location.href = '{{route('/')}}';
                        }, 3000);
				       
				    }else
				    {
				        $('.otp-msg').html(res);    
				    } 
				    
				}
			})
			
			
		    }
            
		    return false;			

          });
          
          
          /********* resend ******************/
          
          $('#resend-now').on('click',function () {
            
            var input = 1;
            
            $.ajax({
				type: 'GET',
				url: "{{route('resend-otp')}}",
				data: {input: input},
				success:function(res){
				    
				    $('.otp-msg').html(res);
				    
				}
			})
			
			
		    
            
		    return false;			

          });
          
          /************* resend ********************/
        
        });
		
		
    </script>
  

 @include('front.footer')