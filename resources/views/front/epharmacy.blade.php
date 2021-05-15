
@include('front.header')
<div class="main-banner">

</div>
<div class="container mt-5">
  <div class="row">
    <div class="category_heading col-sm-12 col-md-12 col-lg-8 col-xl-8">
      <h5><b>E-Pharmacy</b></h5>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2">
      <form class="form-inline header_search f-r">
              <input style="border-radius: 5px 0px 0px 5px;" class="form-control searchbox_width" type="search" placeholder="Search by medicine" aria-label="Search"><button style="border-radius: 0px 5px 5px 0px;" class="btn purpul_color_bg my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
    </div>
  </div>

      <div class="text-left mt-2  mb-5 upload-prescirption">
          <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Upload your Prescription</a>
      </div>
      <div id="myModal" class="modal fade upload-presciption" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Upload your Prescription</h4>
            </div>
            <div class="modal-body">
              <form action="">
                  <label class="upload-btn">
                  <input type="file" name="prescription" accept = "application/pdf, .csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"">
                    Upload PDF
                  </label>

                  <button class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
          
            @foreach($pharmacys as $pharmacy)  
            
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                  <div class="mb-2 card">
                    <img class="card-img-popular" src="{{asset('front/pharmacy').'/'.$pharmacy->image}}"
                      alt="Card image cap">
                    <div class="product_text">
                      <div class="bold_text">{{$pharmacy->name}}</div>
                      <div><small> <s>₹ {{$pharmacy->oldprice}}</s> </small> <b class="f-14">₹ {{$pharmacy->newprice}}</b></div>
                      <div class="unit my-2">
                        <div class="number">
                          <small>Unit - </small><span class="minus"><i class="fa fa-minus"></i></span><input type="text" value="1" class="qty{{$pharmacy->id}}"/><span class="plus"><i class="fa fa-plus"></i></span>
                        </div>
                      </div>
                      <div class="btn_group">
                        <a style="width: 50%;" type="button" href="{{route('details',$pharmacy->slug)}}"  class="mt-2 blue_color_border">View Detail</a>
                        <button style="width: 50%;" type="button" value="{{$pharmacy->id}}"  class="mt-2 blue_color_bg add-to-cart" >Add to Cart</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
            @endforeach
                
              
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
            
            var productId = $(this).val();
			var qtyclass = '.qty'+productId;
            var qty = $(qtyclass).val();
			
			$.ajax({
				type: 'GET',
				url: "{{route('addtocart')}}",
				data: {productId: productId,qty: qty},
				success:function(res){
					location.reload(true);
				}
			})
			return false;			

          });
        
        });
		
		
    </script>
	
	

  @include('front.footer')
