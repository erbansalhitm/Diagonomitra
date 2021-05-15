    @include('front.header')
    
    <div class="container-fluid nopadding">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="top_image_item">
          <div class="col-12 nopadding">
            <img class="d-none d-sm-none d-md-block" src="{{asset('front/images/seller_banner.png')}}" alt="business" style="width:100%;">
            <img class=".d-none d-sm-block d-md-none d-xl-none d-lg-none" src="{{asset('front/images/seller_banner_mobile.png')}}" alt="business" style="width:100%;">
            
          </div>
        </div>
      </div>
    </div>
    </div>
<div class="container mt-5">
    <div class="seller_form">
        
        <div class="seller-register-msg"></div>
        
        <form>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputEmail4">Full Name</label>
                <input type="text" class="form-control seller-name" id="inputEmail4" placeholder="Enter Full Name">
                <i class="seller-name-msg text-danger"></i>
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputPassword4">Contact Number</label>
                <input type="text" class="form-control seller-mobile" id="inputPassword4" placeholder="Enter Contact Number">
                <i class="seller-mobile-msg text-danger"></i>
                </div>
            
                <div class="form-group col-md-4">
                <label for="inputAddress">Email Id</label>
                <input type="text" class="form-control seller-email" id="inputAddress" placeholder="Enter Email Id">
                <i class="seller-email-msg text-danger"></i>
                </div>
            </div>
            <div class="form-row">
            
                <div class="form-group col-md-4">
                <label for="inputAddress">State</label>
                <input type="text" class="form-control seller-state" id="inputAddress" placeholder="Enter State">
                <i class="seller-state-msg text-danger"></i>
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputAddress">City</label>
                <input type="text" class="form-control seller-city" id="inputAddress" placeholder="Enter City">
                <i class="seller-city-msg text-danger"></i>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="inputZip">Address</label>
                    <input type="text" class="form-control seller-address" id="inputZip" placeholder="Enter Address">
                    <i class="seller-address-msg text-danger"></i>
                </div>
            
            </div>
            
            <div class="col-md-12 nopadding">
                <div class="">
                <label for="inputState">Discription</label>       
                <input type="message" class="form-control seller-discription" id="message" placeholder="Discription">
                </div>
            </div>
            
            <div><button type="submit" class="btn blue_color_bg mt-2" id="seller-submit">Submit</button></div>
        
        </form>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">

		$(document).ready(function() {
		    
          $('#seller-submit').on('click',function () {
            
            var check = true;
            
            var _token =  "{{csrf_token()}}";
            
            var seller_discription = $('.seller-discription').val();
            
            var seller_name = $('.seller-name').val();
            
            if(seller_name == '' || seller_name == null){
                
                $('.seller-name-msg').text('Please enter name');
                check = false;
            }else
            {
                $('.seller-name-msg').text('');
            }

            var seller_mobile = $('.seller-mobile').val();
            
            var numberFormat = /^\d{10}$/;
    		if (seller_mobile == "" || seller_mobile == null) {
    			$('.seller-mobile-msg').text('Please enter your contact number');
    			check = false;
    		}
    		else if (!numberFormat.test(seller_mobile)) {
    			    $('.seller-mobile-msg').text('Please enter your proper contact number');
    				check = false;
    		}else
            {
                $('.seller-mobile-msg').text('');
            }
            
            
            var seller_email = $('.seller-email').val();
            
        	var mailFormat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        	
    		if (seller_email == "" || seller_email == null) {
    			$('.seller-email-msg').text('Please enter your Email');
    			check = false;
    		}
    		else if (!mailFormat.test(seller_email)) {
    				$('.seller-email-msg').text('Please enter your proper Email');
    				check = false;
    		}else
            {
                $('.seller-email-msg').text('');
            }
            
            
            var seller_state = $('.seller-state').val();
            
            if(seller_state == '' || seller_state == null){
                
                $('.seller-state-msg').text('Please enter state');
                check = false;
            }else
            {
                $('.seller-state-msg').text('');
            }
            
            var seller_city = $('.seller-city').val();
            
            if(seller_city == '' || seller_city == null){
                
                $('.seller-city-msg').text('Please enter city');
                check = false;
            }else
            {
                $('.seller-city-msg').text('');
            }
            
            var seller_address = $('.seller-address').val();
            
            if(seller_address == '' || seller_address == null){
                
                $('.seller-address-msg').text('Please enter address');
                check = false;
            }else
            {
                $('.seller-address-msg').text('');
            }
            
            
            if(check == false){
                
			    return false;
		    }
		    else{
			
            $.ajax({
				type: 'post',
				url: "{{route('post-seller-registration')}}",
				data: {_token:_token, seller_name:seller_name, seller_mobile:seller_mobile, seller_email:seller_email,
				seller_state:seller_state, seller_city:seller_city, seller_address:seller_address, seller_discription: seller_discription
				},
				success:function(res){
				    
				    if(res == '1')
				    {
				       $('.seller-register-msg').html('<div class="alert alert-success">Success! You are registre completed.</div>'); 
				       
				       window.setTimeout(function() {
                            location.reload();
                        }, 3000);
				       
				    }else
				    {
				        $('.seller-register-msg').html(res);    
				    }
				    
					
				}
			})
			
			
		    }
            
		    return false;			

          });
          
        
        });
		
		
    </script>

      
@include('front.footer')