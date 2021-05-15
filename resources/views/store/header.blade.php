	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <title>Diagonomitra</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="{{asset('front/')}}/stylesheet.css">  
	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</head>
	<body>
	<header>
	  <div class="container-fluid">
		<nav class="navbar navbar-default">
		  
			<div class="row" style="width: 100%">
			  
			   <div class="col-10 col-sm-3 col-md-3 col-lg-3 col-xl-3">
				  <div class="navbar-header top_white_line">
					<a class="navbar-brand" href="{{route('/')}}"><img src="{{asset('front/')}}/images/logo.png"></a>
				</div>
			  </div>
			  
			  <div class="col-lg-9 col-xl-9 mt-2 d-none d-sm-none d-md-none d-lg-block nopadding float-right">        
				<ul class="nav nav-pills navbar-right">
				  <li class="nav-item"><a href="{{route('doctors')}}"><span class=""></span><button class="btn nobtn blue_color_on_hover">Doctor Consultation</button></a></li>
				  <li class="nav-item"><a href="{{route('labtest')}}"><span class=""></span><button class="btn nobtn blue_color_on_hover">Lab Test</button></a></li>
				  <li class="nav-item"><a href="{{route('epharmacy')}}"><span class=""></span><button class="btn nobtn blue_color_on_hover">E-Pharmacy</button></a></li>
				  <li class="nav-item"><a href="{{route('health_store')}}"><span class=""></span><button class="btn nobtn blue_color_on_hover">Health Store</button></a></li>
				  <li class="nav-item dropdown show">
					<a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					  Jaipur
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
					  <a class="dropdown-item" href="#">Bikaner</a>
					  <a class="dropdown-item" href="#">Delhi</a>
					  <a class="dropdown-item" href="#">Pune</a>
					</div>
				  </li>

				  <li class="nav-item"><a href="{{route('cart')}}" type="button" class="mt-2 blue_color_border">Cart({{Cart::getContent()->count()}})</a></li>
				  @if(session('user'))
				  <li class="nav-item"><a href="{{route('user.dashboard')}}" type="button"  class="mt-2 blue_color_border">Dashboard</a></li>
				  @else
				  <li class="nav-item"><button type="button" data-toggle="modal" data-target="#join_popup" class="mt-2 blue_color_border">Login/Signup</button></li>	  
				  @endif
				</ul>       
			  </div>


		  </div>
		</nav>
	  </div>
	</header>

	<!-- Modal -->
	<div class="modal fade" id="join_popup" tabindex="-1" role="dialog" aria-labelledby="join_popupTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered width400" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h6 class="modal-title" id="ModalLongTitle">Welcome to Diagnomitra</h6>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="login_master_img align-center my-4">
			<img src="{{asset('front/images/login_infographics.png')}}">
		  </div>
		  <div class="modal-body sign_up_btn">
			<div class="login-msg"></div>
		    <form name="login" >
			
			  <div class="form-group row">
				
			  <div class="col-sm-12">
				  <label class="f-12">Mobile Number</label>
				  <input type="mobile" class="form-control f-12 login-mobile" id="inputEmail3" placeholder="Enter your mobile number">
				</div>
			  </div>

			  <div class="form-group row">
				<div class="col-sm-12">
				  <label class="f-12">OTP</label>
				  <input type="otp" class="form-control f-12 login-password" id="inputPassword3" placeholder="Enter OTP">
				  <small class="light_color_text float-right mt-1 f-12">Not received OTP? <a class="blue_color_text" href="#">Resend</a></small>
				</div>
			  </div>
				
			  <div class="col-sm-12 mt-2 align-center login_btn nopadding">
					<button type="button" class="btn blue_color_bg" id="login-now">Request OTP</button>
			  </div>
			  
			</form>
			
		  </div>
		  
		  <div class="col-sm-12 mb-4 mt-2 align-center">
		  
			<button class="btn nobtn blue_color_text "><small>Already a member? <a class="blue_color_text" href="#">Login</a></small></button>
			
		  </div>
		</div>
	  </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">
		
		$(document).ready(function() {
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
        
        });
		
		
    </script>