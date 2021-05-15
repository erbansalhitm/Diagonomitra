	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <title>Diagonomitra</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/faviicon.png')}}">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="{{asset('front/owl.carousel.min.css')}}"> 
	  <link rel="stylesheet" href="{{asset('front/owl.theme.default.min.css')}}">  
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
	  <link rel="stylesheet" href="{{asset('front/stylesheet.css')}}">  
	    <style>
	        .modal-nav .nav-link{
	            border:none;
	            padding: 3px 10px;
                margin: 5px 5px;
	        }
	        .modal-nav .nav-tabs{
	               width: 70%;
                margin: auto;
	        }
	        .modal-nav a{
	            background: #ba388f;
	            color:#fff;
	        }
	        .modal-nav .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
	             background: #8a2769;
	            color:#fff;
	        }
	        .modal-nav .nav-tabs {
                border: none;
            }
            .modal-nav .nav-tabs .nav-link{
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .hidetab{
                display:none;
            }
            #mySidenav{
                 display:none;
            }
            @media only screen and (max-width: 767px) {
                .hidetab{
                    display:block;
                }
                 #mySidenav{
                 display:block;
            }
                
            }
            .otpbtn a{
                color: #2562B6;
                font-size: 12px;
            }
            .otpbtn{
                    display: block;
            }
	    </style>
	
	</head>
	<body>
	<header>
	  <div class="container-fluid">
		<nav class="navbar navbar-default">
		  
			<div class="row align-items-center" style="width: calc(100% + 30px)">
			  <!---->
			  <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="{{route('doctors')}}">Doctor Consultation</a>
                <a href="{{route('labtest')}}">Lab Test</a>
                <a href="{{route('epharmacy')}}">E-Pharmacy</a>
                <a href="{{route('health_store')}}">Health Store</a>
				 @if(session('user'))
					<a href="{{route('cart')}}">Cart</a>
				 	<a title="dashboard" href="{{route('user.dashboard')}}" type="button">Dashboard</a>
				  @elseif(session('doctor'))
					<a href="{{route('cart')}}">Cart</a>
				 	<a title="dashboard" href="{{route('doctor.dashboard')}}" type="button">Dashboard</a>
				  @elseif(session('store'))
					<a href="{{route('cart')}}">Cart</a>
				 	<a title="dashboard" href="{{route('store.dashboard')}}" type="button">Dashboard</a>
				  @else
				  <button style="margin-left: 15px;"  type="button" data-toggle="modal" data-target="#join_popup" class="login-signup border-0">Login/Signup</button>
				 @endif
			  </div>
              <div class="col-2 py-0 hidetab">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
              </div> 
			  
			   <div class="col-8 col-sm-3 col-md-3 col-lg-3 col-xl-3">
					<div class="navbar-header top_white_line">
						<a class="navbar-brand" href="{{route('/')}}"><img src="{{asset('front/')}}/images/dlogo.png"></a>
					</div>					
			   </div>
				<div class="col-2 hide-desktop">
					@if(session('user'))
						<div class="topcart">
							<span>
								<a href= "{{route('cart')}}"><img src="http://saromc.com/diagno/public/front/images/cartt.svg" alt=""/><span class="c-count">{{Cart::getContent()->count()}}</span></a>
							</span>
						</div>
					@elseif(session('doctor'))
					<div class="topcart">
						<span>
							<a href= "{{route('cart')}}"><img src="http://saromc.com/diagno/public/front/images/cartt.svg" alt=""/><span class="c-count">{{Cart::getContent()->count()}}</span></a>
						</span>
					</div>
					@elseif(session('store'))
					<div class="topcart">
						<span>
							<a href= "{{route('cart')}}"><img src="http://saromc.com/diagno/public/front/images/cartt.svg" alt=""/><span class="c-count">{{Cart::getContent()->count()}}</span></a>
						</span>
					</div>
					@endif
					
				</div>			  
			  <div class="col-lg-9 col-xl-9 d-none d-sm-none d-md-none d-lg-block nopadding float-right">        
				<ul class="nav nav-pills navbar-right">
				  <li class="nav-item"><a href="{{route('doctors')}}"><span class=""></span><button class="btn nobtn blue_color_on_hover">Doctor Consultation</button></a></li>
				  <li class="nav-item"><a href="{{route('labtest')}}"><span class=""></span><button class="btn nobtn blue_color_on_hover">Lab Test</button></a></li>
				  <li class="nav-item"><a href="{{route('epharmacy')}}"><span class=""></span><button class="btn nobtn blue_color_on_hover">E-Pharmacy</button></a></li>
				  <li class="nav-item"><a href="{{route('health_store')}}"><span class=""></span><button class="btn nobtn blue_color_on_hover">Health Store</button></a></li>
				 
				  @if(session('user'))
				  <li class="nav-item cart-icon"><a title="dashboard" href="{{route('user.dashboard')}}" type="button"  class="mt-2"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
				  <li class="nav-item cart-icon"><a href="{{route('cart')}}" type="button" class="mt-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>{{Cart::getContent()->count()}}</span></a></li>
				  @elseif(session('doctor'))
				  <li class="nav-item cart-icon"><a title="dashboard" href="{{route('doctor.dashboard')}}" type="button"  class="mt-2"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
				  <li class="nav-item cart-icon"><a href="{{route('cart')}}" type="button" class="mt-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>{{Cart::getContent()->count()}}</span></a></li>
				  @elseif(session('store'))
				  <li class="nav-item cart-icon"><a title="dashboard" href="{{route('store.dashboard')}}" type="button"  class="mt-2"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
				  <li class="nav-item cart-icon"><a href="{{route('cart')}}" type="button" class="mt-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>{{Cart::getContent()->count()}}</span></a></li>
				  @else
				  <li class="nav-item login-signup"><a type="button" data-toggle="modal" data-target="#join_popup" class="mt-2">Login/Signup</a></li>	  
				  @endif
				</ul>       
			  </div>


		  </div>
		</nav>
	  </div>
	</header>


	<!-- Modal -->
	<div class="modal fade join-login-group" id="join_popup" tabindex="-1" role="dialog" aria-labelledby="join_popupTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered width400" role="document">
		<div class="modal-content">
		  <!-- <div class="modal-header">
			<h6 class="modal-title" id="ModalLongTitle">Welcome to Diagnomitra</h6>
		  </div> -->
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		    <nav class="modal-nav">
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#u1" role="tab" aria-controls="nav-home" aria-selected="true">For User</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#u2" role="tab" aria-controls="nav-profile" aria-selected="false">For Doctor</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#u3" role="tab" aria-controls="nav-profile" aria-selected="false">Store</a>
              </div>
            </nav>		  
		    <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade" id="u1" role="tabpanel" aria-labelledby="nav-home-tab">
                  
        		  <div class="login_master_img align-center my-4">
        			<img src="{{asset('front/images/login_infographics.png')}}">
        		  </div>
        		  <div class="modal-body sign_up_btn">
        			<div class="login-msg"></div>
        		    <form name="login" >
        			
        			  <div class="form-group row">
        				
        			  <div class="col-sm-12">
        				  <label class="f-12">Enter User's Mobile</label>
        				  <input type="mobile" class="form-control f-12 login-mobile" id="inputEmail3" placeholder="Enter your mobile">
        				</div>
        			  </div>
        
        			  <div class="form-group row">
        				<div class="col-sm-12">
        				  <label class="f-12">Password</label>
        				  <input type="password" class="form-control f-12 login-password" id="inputPassword3" placeholder="Enter Password">
        				</div>
        			  </div>
        				
        			  <div class="col-sm-12 mt-2 align-center login_btn nopadding px-0">
        					<button type="button" class="btn blue_color_bg" id="login-now">Login Now</button>
        			  </div>
        			  
        			</form>
        			
        		  </div>
        		  
        		  <div class="col-sm-12 mb-4 mt-2 align-center">
        		  <span  class="otpbtn"> <a href="enter-otp.php">Login with OTP</a></span>
        			<button class="btn nobtn blue_color_text "><small>Forgot Paswword? <a class="blue_color_text" href="{{route('user-forgot-password')}}">Click Now</a></small></button>
        			<button class="btn nobtn blue_color_text "><small>Not Yet Registered? <a class="blue_color_text" href="{{route('register')}}">Register Now</a></small></button>
        			
        		  </div>
                  
              </div>
              <div class="tab-pane fade" id="u2" role="tabpanel" aria-labelledby="nav-profile-tab">
                  
        		  <div class="login_master_img align-center my-4">
        			<img src="{{asset('front/images/login_infographics.png')}}">
        		  </div>
        		  <div class="modal-body sign_up_btn">
        			<div class="doctor-login-msg"></div>
        		    <form name="login" >
        			
        			  <div class="form-group row">
        				
        			  <div class="col-sm-12">
        				  <label class="f-12">Doctor's Mobile</label>
        				  <input type="mobile" class="form-control f-12 doctor-login-mobile" id="inputEmail3" placeholder="Enter your mobile">
        				</div>
        			  </div>
        
        			  <div class="form-group row">
        				<div class="col-sm-12">
        				  <label class="f-12">Password</label>
        				  <input type="password" class="form-control f-12 doctor-login-password" id="inputPassword3" placeholder="Enter Password">
        				</div>
        			  </div>
        				
        			  <div class="col-sm-12 mt-2 align-center login_btn nopadding px-0">
        					<button type="button" class="btn blue_color_bg" id="doctor-login-now">Login Now</button>
        			  </div>
        			  
        			</form>
        			
        		  </div>
        		  
        		  <div class="col-sm-12 mb-4 mt-2 align-center">
        		      <span  class="otpbtn"> <a href="enter-otp.php">Login with OTP</a></span>
				 
					<button class="btn nobtn blue_color_text "><small>Forgot Paswword? <a class="blue_color_text" href="{{route('doctor-forgot-password')}}">Click Now</a></small></button>
        			<button class="btn nobtn blue_color_text "><small>Not Yet Registered? <a class="blue_color_text" href="{{route('doctor-register')}}">Register Now</a></small></button>
        			
        		  </div>
                  
              </div>
              
              <div class="tab-pane fade" id="u3" role="tabpanel" aria-labelledby="nav-profile-tab">
                  
        		  <div class="login_master_img align-center my-4">
        			<img src="{{asset('front/images/login_infographics.png')}}">
        		  </div>
        		  <div class="modal-body sign_up_btn">
        			<div class="store-login-msg"></div>
        		    <form name="login" >
        			
        			  <div class="form-group row">
        				
        			  <div class="col-sm-12">
        				  <label class="f-12">Enter Mobile Number</label>
        				  <input type="mobile" class="form-control f-12 store-login-mobile" id="inputEmail3" placeholder="Enter your mobile">
        				</div>
        			  </div>
        
        			  <div class="form-group row">
        				<div class="col-sm-12">
        				  <label class="f-12">Password</label>
        				  <input type="password" class="form-control f-12 store-login-password" id="inputPassword3" placeholder="Enter Password">
        				</div>
        			  </div>
        				
        			  <div class="col-sm-12 mt-2 align-center login_btn nopadding px-0">
        					<button type="button" class="btn blue_color_bg" id="store-login-now">Login Now</button>
        			  </div>
        			  
        			</form>
        			
        		  </div>
        		  
        		  <div class="col-sm-12 mb-4 mt-2 align-center">
        		      <span  class="otpbtn"> <a href="enter-otp.php">Login with OTP</a></span>
				 
					<button class="btn nobtn blue_color_text "><small>Forgot Paswword? <a class="blue_color_text" href="{{route('store-forgot-password')}}">Click Now</a></small></button>
        			<button class="btn nobtn blue_color_text "><small>Not Yet Registered? <a class="blue_color_text" href="{{route('store-register')}}">Register Now</a></small></button>
        			
        		  </div>
                  
              </div>
            </div>
		</div>
	  </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">
		
	$(document).ready(function() {

		$('.nav-item.nav-link').click(function(){
			$(this).parent().hide();
		})

		$('.join-login-group .close').click(function(){
			$('#nav-tab').show();
			$('.tab-pane').removeClass('show active');
		})
		    
        $('#login-now').on('click',function () {
            
            var mobile = $('.login-mobile').val();
            var password = $('.login-password').val();
			var _token = "{{ csrf_token() }}";
			
			$.ajax({
				type: 'post',
				url: "{{route('postlogin')}}",
				data: {_token:_token,mobile: mobile,password: password},
				success:function(res){
					if(res == '1')
					{
						location.reload();
					}else
					{
						$('.login-msg').html(res);
					}
				}
			})
			return false;			

          });
          
          // doctor login
          
        $('#doctor-login-now').on('click',function () {
            
            var mobile = $('.doctor-login-mobile').val();
            var password = $('.doctor-login-password').val();
			var _token = "{{ csrf_token() }}";
			
			$.ajax({
				type: 'post',
				url: "{{route('postdoctorlogin')}}",
				data: {_token:_token,mobile: mobile,password: password},
				success:function(res){
					if(res == '1')
					{
						location.reload();
					}else
					{
						$('.doctor-login-msg').html(res);
					}
				}
			})
			return false;			

          });
          
        $('#store-login-now').on('click',function () {
            
            var mobile = $('.store-login-mobile').val();
            var password = $('.store-login-password').val();
			var _token = "{{ csrf_token() }}";
			
			$.ajax({
				type: 'post',
				url: "{{route('poststorelogin')}}",
				data: {_token:_token,mobile: mobile,password: password},
				success:function(res){
					if(res == '1')
					{
						location.reload();
					}else
					{
						$('.store-login-msg').html(res);
					}
				}
			})
			return false;			

          });
          
          
          
        
    });
		
		
    </script>
    
    
    
    <script type="text/javascript">
  $(function(){
  // mobile menu slide from the left
  $('[data-toggle="slide-collapse"]').on('click', function() {
    $navMenuCont = $($(this).data('target'));
    $navMenuCont.animate({'width':'toggle'}, 280);
  });
})

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "white";
}
</script>