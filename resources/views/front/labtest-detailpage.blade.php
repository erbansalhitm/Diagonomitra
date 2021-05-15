@include('front.header')

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-popular" src="{{asset('front/labtest').'/'.$detail->image}}" alt="{{$detail->name}}">
      </div>
      <div class="row my-4">
      <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card"><img class="card-img-popular" src="{{asset('front/labtest').'/'.$detail->image}}" alt="{{$detail->name}}"></div>
      </div>
      
      </div>
    </div>
    <div class="col-sm-4">
      <h3><b>{{$detail->name}}</b></h3>
      <div><span class="green_color_bg">10 <span class="fa fa-star"></span></span> <span class="purpul_color_text">10 Rating</span></div>
      <p class="mt-3 f-18">Labtest Details</p>
      <p class="grey_text">{!!$detail->discription!!}</p>
      
    </div>
    <div class="col-sm-4">
     
      <div class="card mt-2">
        <small><p class="light_purple_bg">many People use this labtest</p></small>
        <div class="px-2 pb-2">
        <div><small> <s>₹ {{$detail->oldprice}}</s> </small> <b class="f-14">₹ {{$detail->newprice}}</b></div>
                  <div class="unit my-2">
                    <div class="number">
                      <small>Unit - </small><span class="minus"><i class="fa fa-minus"></i></span><input type="text" value="1" class="qty{{$detail->id}}"/><span class="plus"><i class="fa fa-plus"></i></span>
                    </div>
                  </div>
                  <div class="btn_group">
					<button style="width: 100%;" type="button" value="{{$detail->id}}"  class="mt-2 blue_color_bg single_btn add-to-cart" >Add to Cart</button>
                  </div>
                </div>  
      </div>
    </div>
  </div>
</div>

      
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">
        $(document).ready(function() {
          $('.minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
          });
          $('.plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
          });
        });
		
		
		$(document).ready(function() {
		    
		    $('.add-to-cart').on('click',function () {
            
            var labId = $(this).val();
			var qtyclass = '.qty'+labId;
            var qty = $(qtyclass).val();
			
			$.ajax({
				type: 'GET',
				url: "{{route('addtocart-lab')}}",
				data: {labId: labId,qty: qty},
				success:function(res){
					location.reload(true);
				}
			})
			return false;			

          });
        
        });
		
		
    </script>

  @include('front.footer')