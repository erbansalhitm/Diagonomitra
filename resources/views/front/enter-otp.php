@include('front.header')
  <div class="container my-4">
    
   <div class="row">
       <div class="col-lg-8 col-md-12 offset-md-2">
           <div class="signup-form">
               <h2 class="text-center py-3">OTP</h2>
               <div class="forgot-msg"></div>
               <form class="mt-4">
                                    
					<div class="form-group row">

						<div class="col-sm-12">
						  <lebel>Enter OTP</lebel>	
						  <input type="text" class="form-control register-mobile" id="otp" name="mobile" placeholder="OTP Code">
						  <i class="register-mobile-msg text-danger"></i>
						</div>

					</div>

					<div class="subbtn">
						<button style="width: 100%;" type="button" class="mt-2 blue_color_bg" id="forgot-now" >Submit</button>
					</div>
					
                </form>
           </div>
            
       </div>
   </div>
  </div>
  
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">

    </script>
    
 @include('front.footer')