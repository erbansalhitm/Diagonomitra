@include('front.header')
  
  <div class="site-wrap">
   

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            @if(!session('user'))  
            <div class="border p-4 mt-3 rounded alert alert-danger" role="alert" >
              Returning customer? <a href="javascript:void(0)" data-toggle="modal" data-target="#join_popup" >Click here</a> to login
            </div>
            @endif
			
			@if($errors->all())
				@foreach($errors->all() as $error)
				<div class="alert alert-danger">{{$error}}</div>
				@endforeach
			@endif	
			
          </div>
        </div>
		<form name="checkout" method="post" action="{{route('payment')}}" >
			<div class="row">
			  <div class="col-md-6 mb-5 mb-md-0">
				<h2 class="h3 mb-3 text-black">Billing Details</h2>
				<div class="p-3 p-lg-5 border">
				{{@csrf_field()}}
				  <div class="form-group row">
					<div class="col-md-12">
					  <label for="c_fname" class="text-black">Full Name <span class="text-danger">*</span></label>
					  <input type="text" class="form-control" id="name" name="name" value="@if(isset($user->name)){{$user->name}}@endif">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<div class="col-md-12">
					  <label for="c_fname" class="text-black">Email <span class="text-danger">*</span></label>
					  <input type="email" class="form-control" id="email" name="email" value="@if(isset($user->email)){{$user->email}}@endif">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<div class="col-md-12">
					  <label for="c_fname" class="text-black">Mobile <span class="text-danger">*</span></label>
					  <input type="text" class="form-control" id="mobile" name="mobile" value="@if(isset($user->mobile)){{$user->mobile}}@endif">
					</div>
				  </div>

				  <div class="form-group row">
					<div class="col-md-12">
					  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
					  <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="@if(isset($user->address)){{$user->address}}@endif">
					</div>
				  </div>

				  <div class="form-group">
					<input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" address="address2">
				  </div>

				  <div class="form-group row">
					<div class="col-md-6">
					  <label for="c_state_country" class="text-black">City <span class="text-danger">*</span></label>
					  <input type="text" class="form-control" id="city" name="city" value="@if(isset($user->city)){{$user->city}}@endif" >
					</div>
					<div class="col-md-6">
					  <label for="c_postal_zip" class="text-black">State<span class="text-danger">*</span></label>
					  <input type="text" class="form-control" id="state" name="state" value="@if(isset($user->state)){{$user->state}}@endif">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<div class="col-md-6">
					  <label for="c_state_country" class="text-black">Pincode <span class="text-danger">*</span></label>
					  <input type="text" class="form-control" id="pincode" name="pincode" value="@if(isset($user->pincode)){{$user->pincode}}@endif" >
					</div>
					<div class="col-md-6">
					  <label for="c_postal_zip" class="text-black">Country<span class="text-danger">*</span></label>
					  <input type="text" class="form-control" id="country" name="country" value="@if(isset($user->country)){{$user->country}}@endif">
					</div>
				  </div>

				  <div class="form-group">
					<label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" name="different_address" id="c_ship_different_address"> Ship To A Different Address?</label>
					<div class="collapse" id="ship_different_address">
					  <div class="py-2">

						  <div class="form-group row">
							<div class="col-md-12">
							  <label for="c_fname" class="text-black">Full Name <span class="text-danger">*</span></label>
							  <input type="text" class="form-control" id="shipping_name" name="shipping_name" value="@if(isset($user->shipping_name)){{$user->shipping_name}}@endif" >
							</div>
						  </div>
						  
						  <div class="form-group row">
							<div class="col-md-12">
							  <label for="c_fname" class="text-black">Email <span class="text-danger">*</span></label>
							  <input type="email" class="form-control" id="shipping_email" name="shipping_email" value="@if(isset($user->shipping_email)){{$user->shipping_email}}@endif">
							</div>
						  </div>
						  
						  <div class="form-group row">
							<div class="col-md-12">
							  <label for="c_fname" class="text-black">Mobile <span class="text-danger">*</span></label>
							  <input type="text" class="form-control" id="shipping_mobile" name="shipping_mobile" value="@if(isset($user->shipping_mobile)){{$user->shipping_mobile}}@endif">
							</div>
						  </div>
			
						  <div class="form-group row">
							<div class="col-md-12">
							  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
							  <input type="text" class="form-control" id="shipping_address" name="shipping_address" placeholder="Address" value="@if(isset($user->shipping_address)){{$user->shipping_address}}@endif">
							</div>
						  </div>
			
						  <div class="form-group">
							<input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" address="shipping_address2">
						  </div>
			
						  <div class="form-group row">
							<div class="col-md-6">
							  <label for="c_state_country" class="text-black">City <span class="text-danger">*</span></label>
							  <input type="text" class="form-control" id="shipping_city" name="shipping_city" value="@if(isset($user->shipping_city)){{$user->shipping_city}}@endif" >
							</div>
							<div class="col-md-6">
							  <label for="c_postal_zip" class="text-black">State<span class="text-danger">*</span></label>
							  <input type="text" class="form-control" id="shipping_state" name="shipping_state" value="@if(isset($user->shipping_state)){{$user->shipping_state}}@endif">
							</div>
						  </div>
						  
						  <div class="form-group row">
							<div class="col-md-6">
							  <label for="c_state_country" class="text-black">Pincode <span class="text-danger">*</span></label>
							  <input type="text" class="form-control" id="shipping_pincode" name="shipping_pincode" value="@if(isset($user->shipping_pincode)){{$user->shipping_pincode}}@endif" >
							</div>
							<div class="col-md-6">
							  <label for="c_postal_zip" class="text-black">Country<span class="text-danger">*</span></label>
							  <input type="text" class="form-control" id="shipping_country" name="shipping_country" value="@if(isset($user->shipping_country)){{$user->shipping_country}}@endif">
							</div>
						  </div>

					  </div>

					</div>
				  </div>

				  <div class="form-group">
					<label for="c_order_notes" class="text-black">Order Notes</label>
					<textarea name="order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
				  </div>

				</div>
			  </div>
			  <div class="col-md-6">

				<div class="row mb-5">
				  <div class="col-md-12">
					<h2 class="h3 mb-3 text-black">Coupon Code</h2>
					<div class="p-3 p-lg-5 border">
					  
					  <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
					  <div for="c_code" class="text-black mb-3 coupon-code-msg"></div>
					  <div class="input-group w-75">
					    <form name="coupon"> 
						<input type="text" class="form-control coupon-code" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
						<div class="input-group-append">
						  <button class="btn btn-primary btn-sm" type="button" id="apply-coupon">Apply</button>
						  
						</div>
						</form>
					  </div>

					</div>
				  </div>
				</div>
				
				<div class="row mb-5">
				  <div class="col-md-12">
					<h2 class="h3 mb-3 text-black">Your Order</h2>
					<div class="p-3 p-lg-5 border">
					  <table class="table site-block-order-table mb-5">
						<thead>
						<tr>
						  <th>Product</th>
						  <th>Price</th>
						  <th>Total</th>
						</tr>  
						</thead>
						<tbody>
						@foreach($carts as $cart)
						  <tr>
							<td>{{$cart->name}}</td>
							<td>{{$cart->price}} <strong class="mx-2">x</strong> {{$cart->quantity}}</td>
							<td>{{$cart->price*$cart->quantity}}</td>
						  </tr>
						@endforeach  
						  
						  <tr>
							<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
							<td class="text-black font-weight-bold"></td>
							<td class="text-black font-weight-bold"><strong> {{$total}}</strong></td>
						  </tr>
						  <tr>
							<td class="text-black font-weight-bold"><strong>Total Discount</strong></td>
							<td class="text-black font-weight-bold"></td>
							<td class="text-black font-weight-bold"><strong class="discount-amount">0</strong></td>
						  </tr>
						</tbody>
					  </table>

					  <div class="border p-3 mb-3">
						<h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

						<div class="collapse" id="collapsebank">
						  <div class="py-2">
							<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
						  </div>
						</div>
					  </div>

					  <div class="border p-3 mb-3">
						<h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

						<div class="collapse" id="collapsecheque">
						  <div class="py-2">
							<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
						  </div>
						</div>
					  </div>

					  <div class="border p-3 mb-5">
						<h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

						<div class="collapse" id="collapsepaypal">
						  <div class="py-2">
							<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
						  </div>
						</div>
						<input type="hidden" class="discount-amount-value" value="0" name="discount_amount">
					  </div>
					@if(session('user'))
					<div class="form-group">
						<button class="btn btn-primary btn-lg py-2 btn-block" >Place Order</button>
					</div>
					@else
					<div class="border p-4 mt-3 rounded alert alert-danger" role="alert" >
					<a href="javascript:void(0)" data-toggle="modal" data-target="#join_popup" >Click here</a> to login
					</div>
					@endif

					</div>
				  </div>
				</div>

			  </div>
			</div>
        </form>
      </div>
    </div>

    
  </div>
  
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">

		$(document).ready(function() {
          $('#apply-coupon').on('click',function () {

            var coupon = $('.coupon-code').val();

			$.ajax({
				type: 'GET',
				url: "{{route('apply-coupon')}}",
				data: {coupon: coupon},
				success:function(res){
				    if(res.status == 1)
				    {
				        $('.discount-amount').text(res.amount);
				        $('.discount-amount-value').val(res.amount);
				        $('.coupon-code-msg').html(res.msg);
				    }else
				    {
				     	$('.discount-amount').text(res.amount);
				     	$('.discount-amount-value').val(res.amount);
				        $('.coupon-code-msg').html(res.msg);   
				    }
				    
				}
			})
			return false;			

          });
        
        });
		
		
    </script>  

 @include('front.footer')