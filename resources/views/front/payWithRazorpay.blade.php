<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        $("#payment_test").submit();
    })
    
</script>

<div class="card-body text-center">
	<form action="{{ route('responce') }}" method="POST" id="payment_test" >
		@csrf
		<script src="https://checkout.razorpay.com/v1/checkout.js"
				data-key="{{ env('RAZOR_KEY') }}"
				data-amount="{{$total_amount}}"
				data-order_id = "{{$order['id']}}"
				data-buttontext="Pay Now"
				data-name="Order Name"
				data-description="Rozerpay"
				data-image="{{ asset('/image/nice.png') }}"
				data-prefill.name="{{$name}}"
				data-prefill.email="{{$email}}"
				data-theme.color="#ff7529">
		</script>
		</form>
</div>
                