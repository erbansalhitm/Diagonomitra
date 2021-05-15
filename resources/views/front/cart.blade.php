
@include('front.header')
<div class="container">
  <div class="card mt-3">
    <div class="card-header">
        <h6 class="card-title mb-0">Cart ({{$totalcart}} itmes)</h6>
      </div>
      <div class="card-body">
		@foreach($carts as $cart)
        <div class="row">
          <div class="col-6 col-sm-12 col-md-12 col-lg-2 col-xl-2">
            <div class="card">
              <img class="card-img-popular" src="{{$cart->attributes->image}}" alt="Card image cap">
            </div>
          </div>
          <div class="col-6 col-sm-12 col-md-12 col-lg- 10 col-xl-10">
            <div class="bold_text">{{$cart->name}}</div>    
            <div class="">
              <small> <s>₹ {{$cart->attributes->oldprice}}</s> </small> <b class="f-14">₹ {{$cart->price}}</b>
            </div>
			<div class="unit my-2">
				<div class="number">
				  <small>Unit - </small><span class="minus"><i class="fa fa-minus"></i></span><input type="text" value="{{$cart->quantity}}" name="{{$cart->id}}" ><span class="plus"><i class="fa fa-plus"></i></span>
				</div>
			</div>
            <a href="{{route('remove-cart',$cart->id)}}">Remove</a>
          </div>
          
        </div>
		<hr>
		@endforeach
        
        
    </div>
    <div class="card-footer float-right">
	 <div class="float-left">
        <a href="{{route('clearcart')}}" class="alert alert-danger float-left mt-2">Clear Cart</a>
      </div>
      <div class="float-right">
        <h6 class="card-title mb-0">Payable Amount: ₹{{$total}}</h6>
        <a class="blue_color_bg float-right mt-2" href="{{route('checkout')}}">Checkout</a>
      </div>
    </div>
  </div>
</div>

@include('front.footer')

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
		$input.change();
		
		var cartid = $input.attr('name');
		$.ajax({
				type: 'GET',
				url: "{{route('updatecartminus')}}",
				data: {cartid: cartid},
				success:function(res){
					location.reload(true);
				}
		})
		
        return false;
      });
      $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
		$input.change();
		
        var cartid = $input.attr('name');
		$.ajax({
				type: 'GET',
				url: "{{route('updatecartplus')}}",
				data: {cartid: cartid},
				success:function(res){
					location.reload(true);
				}
		})
        return false;
      });
    });
</script>
