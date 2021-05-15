@include('front.header')
<div class="main-banner">

</div>
<div class="container-fluid mt-5">
  <div class="row mb-3">
      
      <div class="col-lg-12 col-md-12">
          <div>
              <div class="search-wrap-1 ftco-animate labtest-search">
					<form action="#" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg-12">
		        			    <div class="w-bg">
		        			        
		        			        
		        			     <span>
		        			         <i class="fas fa-map-marked-alt"></i> 
		        			     </span>  
		        			     <div class="form-group">
		        			         
        		          				<div class="form-field">
        		          					
        				                <input type="text" class="form-control" placeholder="Pincode">
        				              </div>
        			              </div>
        			             <div class="form-group">
		        					
		        					<div class="form-field">
    		          					<div class="select-wrap">
            		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
            		                      <select name="" id="" class="form-control">
            		                        <option value="">Search </option>
            		                        <option value="">Doctor </option>
            		                        <option value="">Doctor </option>
            		                        <option value="">Doctor </option>
            		                        <option value="">Doctor </option>
            		                        
            		                      </select>
            		                    </div>
        				            </div>
        				            
        			             </div>
        			             <div class="form-group">
		        					
		        					<div class="form-field">
		          					    <div class="icon"><span class="ion-ios-calendar"></span></div>
        				                <input type="text" class="form-control checkout_date border-0" placeholder="Test">
        				             </div>
        			             </div>
                           
        			             <div class="form-group">
		        					<div class="form-field">
				                    <input type="submit" value="Search" class="form-control btn btn-primary sub">
        				            </div>
        			              </div>
        			              
        			              
        			              
        			              </div>
		        			</div>
		        		
		        		</div>
		        	</form>
		        </div>
          </div>
      </div>
      
    <!--<div class="category_heading col-sm-12 col-md-12 col-lg-8 col-xl-8">-->
    <!--  <h5><b>Lab Test</b></h5>-->
    <!--</div>-->
    <!--<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2">-->
    <!--  <form class="form-inline header_search f-r">-->
    <!--          <input style="border-radius: 5px 0px 0px 5px;" class="form-control searchbox_width" type="search" placeholder="Search by Lab Test" aria-label="Search"><button style="border-radius: 0px 5px 5px 0px;" class="btn purpul_color_bg my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>-->
    <!--        </form>-->
    <!--</div>-->
  </div>
  <div class="inner-box inner-box-lab-test mt-5">
      <div class="row mt-5">
        <div class="heading_section mb-4">
          <div class="col-md-9"><h6><b>Preventive Health Checkups</b></h6></div>
        </div>
      </div>
      <div class="row">
              @foreach($labtests as $labtest)
              @if ($labtest->labtestType == 'Preventive Health Checkups')
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-6">
                <div class="mb-2 card labtest-card">
                  <!-- <img class="card-img-popular" src="{{asset('front/labtest').'/'.$labtest->image}}" alt="Card image cap"> -->
                  <div class="product_text">
                    <div class="bold_text">{{$labtest->name}}</div>
                    <div><small> <s>₹ {{$labtest->newprice}}</s> </small> <b class="f-14">₹ {{$labtest->oldprice}}</b></div>
                    
                      <div class="btn_group">
                      <a style="width: 50%;" type="button" href="{{route('labtest-details',$labtest->slug)}}"  class="mt-2 blue_color_border">View Detail</a>
                      <button style="width: 50%;" type="button" value="{{$labtest->id}}"  class="mt-2 blue_color_bg add-to-cart-lab" >Add to Cart</button>
                    </div>
                    
                  </div>
                </div>
              </div>
              @endif
              @endforeach
              
              
      </div>
      <div class="row mt-5">
        <div class="heading_section mb-4">
          <div class="col-md-9"><h6><b>Popular Health Package</b></h6></div>
        </div>
      </div>
      <div class="row">
              @foreach($labtests as $labtest)
              @if ($labtest->labtestType == 'Popular Health Package')
              <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-6">
                <div class="mb-2 card labtest-card">
                  <!-- <img class="card-img-popular" src="{{asset('front/labtest').'/'.$labtest->image}}" alt="Card image cap"> -->
                  <div class="product_text">
                    <div class="bold_text">{{$labtest->name}}</div>
                    <div><small> <s>₹ {{$labtest->newprice}}</s> </small> <b class="f-14">₹ {{$labtest->oldprice}}</b></div>
                    
                      <div class="btn_group">
                      <a style="width: 50%;" type="button" href="{{route('labtest-details',$labtest->slug)}}"  class="mt-2 blue_color_border">View Detail</a>
                      <button style="width: 50%;" type="button" value="{{$labtest->id}}"  class="mt-2 blue_color_bg add-to-cart-lab" >Add to Cart</button>
                    </div>
                    
                  </div>
                </div>
              </div>
              @endif
              @endforeach
      </div>

      <div class="row mt-5">
        <div class="heading_section mb-4">
          <div class="col-md-9"><h6><b>Why Choose Us</b></h6></div>
        </div>
      </div>
</div>
        
</div>
   <div class="container-fluid my-4">
    <div class="inner-box">
    <!--Carousel Wrapper-->
    <div id="labs-item" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating left" href="#labs-item" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating right" href="#labs-item" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->
      <div class="row mt-5">
        <div class="heading_section mb-4">
          <div class="col-md-9"><h6><b>Our Lab Partners</b></h6></div>
        </div>
      </div>

      <!--Slides-->
      <div class="carousel-inner popular" role="listbox">
        

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-3 col-12 col-xl-3 col-lg-3">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/')}}/images/labs_1.png" alt="Card image cap">
                
              </div>
            </div>

            <div class="col-md-3 col-8 col-xl-3 col-lg-3 clearfix d-none d-md-block">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/')}}/images/labs_2.png"
                  alt="Card image cap">
                
              </div>
            </div>

            <div class="col-md-3 col-8 col-xl-3 col-lg-3 clearfix d-none d-md-block">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/')}}/images/labs_3.png"
                  alt="Card image cap">
               
              </div>
            </div>
            <div class="col-md-3 col-8 col-xl-3 col-lg-3 clearfix d-none d-md-block">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/')}}/images/labs_2.png"
                  alt="Card image cap">
               
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->
        <!--First slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-3 col-8 col-xl-3 col-lg-3">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/')}}/images/labs_1.png" alt="Card image cap">
                
              </div>
            </div>

            <div class="col-md-3 col-8 col-xl-3 col-lg-3 clearfix d-none d-md-block">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/')}}/images/labs_2.png"
                  alt="Card image cap">
                
              </div>
            </div>

            <div class="col-md-3 col-8 col-xl-3 col-lg-3 clearfix d-none d-md-block">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/')}}/images/labs_3.png"
                  alt="Card image cap">
               
              </div>
            </div>
            <div class="col-md-3 col-8 col-xl-3 col-lg-3 clearfix d-none d-md-block">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/')}}/images/labs_2.png"
                  alt="Card image cap">
               
              </div>
            </div>
          </div>

        </div>
       

      </div>
      <!--/.Slides-->
    </div>
  </div>
    <!--/.Carousel Wrapper-->


  </div>

<script type="text/javascript">
  $('#labs-item').carousel({
  interval: 3000,
  cycle: true
}); 
</script>

@include('front.footer')

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">
		
		$(document).ready(function() {
          
          /********* Lab Test Start **************/
          
          $('.add-to-cart-lab').on('click',function () {
            
            var labId = $(this).val();

            var qty = 1;
			
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
          
          /********* Lab Test End **************/
          
        });
		
		
    </script>
