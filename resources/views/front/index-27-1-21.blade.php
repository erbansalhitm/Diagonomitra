    
     @include('front.header')
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- ***** Include the above in your HEAD tag *** -->
<style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
/*================================================*/
@import url('https://fonts.googleapis.com/css?family=Roboto');
.carousel-item > div {
float: left;
}
.carousel-by-item [class*="cloneditem-"] {
display: none;
}
.top-service img{
    width:100%;
    height:150px;
        object-fit: cover;
}
.top-service .card-body{
        background-image: linear-gradient(90deg, #b03e92 0%, #4b5daf 100%);
    color: #fff;
}
.top-service .card-text {
    color: #fff;
}
.carousel-control-next-icon {
    /*background: #020202;*/
    border:2px solid #fff;
        background-image: url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E);
}
.carousel-control-prev-icon {
    /*background: #020202;*/
    border:2px solid #fff;
        background-image: url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E);
}




@media only screen and (max-width: 767px){
    .labtestnew img{
     width: 100%;
    height: 196px !important;
}
.epharmnew img{
     width: 100%;
    height: 196px !important;
}
.healthstr img{
     width: 100%;
    height: 196px !important;
}


}

</style>
     

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            @if($slideractive)  
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('front/slider').'/'.$slideractive->sliderImage}}" alt="First slide">
                </div>
            @endif
            
            @if($sliders)
                @foreach($sliders as $slider)
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('front/slider').'/'.$slider->sliderImage}}" alt="Second slide">
                </div>
                @endforeach
            @endif
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
     
     
  
  <div class="container">
    <div id="video-multi-item" class="video_card" data-ride="carousel" data-interval="false">
      <div class="row mt-5">
        <div class="heading_section mb-4">
          <div class="col-md-12"><h6><b>Top Services</b></h6></div>
          
        </div>
      </div>
        <div class="top-service">
            <div class="row">
                 <div class="scroll-x">
            
                <div class="col-10 col-sm-10 col-md-3 col-lg-3 col-xl-3">
                  <div class="card mb-2">
                       <a href="#">
                    <img src="{{asset('front/service/doctor.png')}}">
                    </a>
                    <div class="card-body">
                                          
                        <div class="row">
                          <div class="col-12">
                          <small class="card-text ">Doctor Consultation</small>
                          <a type="button" href="{{route('doctors')}}" class="float-right blue_color_border btn-group-sm">Consult Now</a>
                        </div>
                      </div>                 
                    </div>
                  </div>
                </div>
				
				<div class="col-10 col-sm-10 col-md-3 col-lg-3 col-xl-3">
                  <div class="card mb-2">
                       <a href="#">
                    <img src="{{asset('front/service/lab.png')}}">
                    </a>
                    <div class="card-body">
                                          
                        <div class="row">
                          <div class="col-12">
                          <small class="card-text">Lab Test</small>
                          <a type="button" href="{{route('labtest')}}" class="float-right blue_color_border btn-group-sm">Consult Now</a>
                        </div>
                      </div>                 
                    </div>
                  </div>
                </div>
				
				<div class="col-10 col-sm-10 col-md-3 col-lg-3 col-xl-3">
                  <div class="card mb-2">
                      <a href="#">
                    <img src="{{asset('front/service/epharmecy.png')}}">
                    </a>
                    <div class="card-body">
                                          
                        <div class="row">
                          <div class="col-12">
                          <small class="card-text">E-Pharmacy</small>
                          <a type="button" href="{{route('epharmacy')}}" class="float-right blue_color_border btn-group-sm">Shop Now</a>
                        </div>
                      </div>                 
                    </div>
                  </div>
                </div>
				
				<div class="col-10 col-sm-10 col-md-3 col-lg-3 col-xl-3">
                  <div class="card mb-2">
                      <a href="#">
                          <img src="{{asset('front/service/healthstore.png')}}">
                      </a>
                    
                    <div class="card-body">
                                          
                        <div class="row">
                          <div class="col-12">
                          <small class="card-text ">Health Store</small>
                          <a type="button" href="{{route('health_store')}}" class="float-right blue_color_border btn-group-sm">Shop Now</a>
                        </div>
                      </div>                 
                    </div>
                  </div>
                </div>
				
                </div>
            </div>
        </div>
    </div>
  </div>
  

  <div class="container my-4">

    <!--Carousel Wrapper-->
    <div id="product-item" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating left" href="#product-item" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating right" href="#product-item" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->
      <div class="row mt-5">
        <div class="heading_section mb-4">
          <div class="col-md-9"><h6><b>Consult top verified doctors with all specialists </b></h6></div>
          <div class="col-md-3"><a href="{{route('spesilities')}}" class="float-right blue_color_border">View All</a></div>
        </div>
      </div>

      <!--Slides-->
      @if($specialists)
      <div class="carousel-inner popular" role="listbox">
        

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            @foreach($specialists as $specialist)
            <div class="col-md-3 col-6 col-xl-3 col-lg-3 clearfix d-md-block">
              <div class="mb-2">
                  <a href="#">
                <img class="card-img-popular" src="{{asset('front/specialists/').'/'.$specialist->image}}"
                  alt="Card image cap">
                  </a>
                <div class="product_text">
                  
                  <div class="bold_text">{{$specialist->name}}</div>
                  <div class="line_height_1 grey_text"><small>{{$specialist->details}}</small></div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
        <!--/.First slide-->
        <!--First slide-->

        <div class="carousel-item">

          <div class="row">
            @foreach($specialists as $specialist)
            <div class="col-md-3 col-6 col-xl-3 col-lg-3 clearfix  d-md-block">
              <div class="mb-2">
                  <a href="#">
                <img class="card-img-popular" src="{{asset('front/specialists/').'/'.$specialist->image}}"
                  alt="Card image cap">
                  </a>
                <div class="product_text">
                  
                  <div class="bold_text">{{$specialist->name}}</div>
                  <div class="line_height_1 grey_text"><small>{{$specialist->details}}</small></div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
        
      </div>
      @endif
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
  </div>



    <!--My Slider Here-->
    <style type="text/css" id="slider-css"></style>
    <div class="spe-cor topDoc">
        <div class="container">
            <div class="row mt-5">
                <div class="heading_section mb-4">
                  <div class="col-md-9"><h6><b>Top Doctors in your city</b></h6></div>
                  <div class="col-md-3"><a href="{{route('doctors')}}" class="float-right blue_color_border" >View All</a></div>
                </div>
              </div>
            <!--<h2>New Slider</h2>-->
            <div class="row">
                <div id="slider-1" class="carousel carousel-by-item slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @if($doctor)
                        <div class="carousel-item active">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                <a href="{{route('doctor-profile',$doctor->slug)}}">
                                <img class="d-block img-fluid" src="{{asset('front/doctors/').'/'.$doctor->image}}" alt="First slide">
                                </a>
                                <div class="product_text">
                                  <div class="bold_text">{{$doctor->name}}</div>
                                  <div><small>{{$doctor->specialists}}</small></div>
                                  <a type="button" href="{{route('doctor-profile',$doctor->slug)}}" class="mt-2 blue_color_border">Consult Now</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($doctors)
                            @foreach($doctors as $doctor)
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                    <a href="{{route('doctor-profile',$doctor->slug)}}">
                                    <img class="d-block img-fluid" src="{{asset('front/doctors/').'/'.$doctor->image}}" alt="First slide">
                                    </a>
                                    <div class="product_text">
                                      <div class="bold_text">{{$doctor->name}}</div>
                                      <div><small>{{$doctor->specialists}}</small></div>
                                      <a type="button" href="{{route('doctor-profile',$doctor->slug)}}" class="mt-2 blue_color_border">Consult Now</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                       
                    </div>
                    <a class="carousel-control-prev" href="#slider-1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider-1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<!--My Slider Ends Here-->
    





<div class="container my-4">
  <div class="row">

    <!--Carousel Wrapper-->
    <div id="Lab_test" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating left" href="#Lab_test" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating right" href="#Lab_test" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->
      <div class="container">
        <div class="row mt-5">
            <div class="heading_section mb-4">
              <div class="col-md-9"><h6><b>Lab Test</b></h6></div>
              <div class="col-md-3"><a href="{{route('labtest')}}" class="float-right blue_color_border" href="#">View All</a></div>
             </div>
        </div>
        </div>
    
      <!--Slides-->
      @if($labtests)
      <div class="carousel-inner popular" role="listbox">
        
        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
             @foreach($labtests as $labtest)
            <div class="col-md-3 col-6 col-xl-3 col-lg-3 clearfix d-md-block">
              <div class="mb-2">
                  <a href="{{route('labtest-details',$labtest->slug)}}">
					<img class="card-img-popular" src="{{asset('front/labtest').'/'.$labtest->image}}" >
                  </a>
                <div class="product_text">
                  <div class="bold_text">{{$labtest->name}}</div>
                  <div><small> <s>₹ {{$labtest->newprice}}</s> </small> <b class="f-14">{{$labtest->newprice}}</b></div>
                  <button style="width: 100%;" type="button" value="{{$labtest->id}}"  class="mt-2 blue_color_border add-to-cart-lab" >Add to Cart</button>
                  
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
        
        <div class="carousel-item">

          <div class="row">
             @foreach($labtests as $labtest)
            <div class="col-md-3 col-6 col-xl-3 col-lg-3 clearfix d-md-block">
              <div class="mb-2">
                  <a href="{{route('labtest-details',$labtest->slug)}}">
                <img class="card-img-popular" src="{{asset('front/labtest').'/'.$labtest->image}}"
                  alt="Card image cap">
                  </a>
                <div class="product_text">
                  <div class="bold_text">{{$labtest->name}}</div>
                  <div><small> <s>₹ {{$labtest->newprice}}</s> </small> <b class="f-14">{{$labtest->newprice}}</b></div>
                  <button style="width: 100%;" type="button" value="{{$labtest->id}}"  class="mt-2 blue_color_border add-to-cart-lab" >Add to Cart</button>
                  
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
        <!--/.First slide-->
        

       

      </div>
      @endif
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
  </div>

</div>

@if(count($pharmacys))
	<div class="container my-4">
	  <div class="row">

		<!--Carousel Wrapper-->
		<div id="E-Pharmacy" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">

		  <!--Controls-->
		  <div class="controls-top">
			<a class="btn-floating left" href="#E-Pharmacy" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
			<a class="btn-floating right" href="#E-Pharmacy" data-slide="next"><i class="fa fa-chevron-right"></i></a>
		  </div>
		  <!--/.Controls-->
		  <div class="container">
		  <div class="row mt-5">
			<div class="heading_section mb-4">
			  <div class="col-md-9"><h6><b>E-Pharmacy</b></h6></div>
			  <div class="col-md-3"><a class="float-right blue_color_border" href="{{route('epharmacy')}}">View All</a></div>
			
		        </div>
            </div>
            
            </div>
		  <!--Slides-->
		  @if($pharmacys)
		  <div class="carousel-inner popular" role="listbox">
			

			<!--First slide-->
			<div class="carousel-item active">

			  <div class="row">
				  
				@foreach($pharmacys as $pharmacy)  
				<div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
				  <div class="mb-2">
				      <a href="{{route('details',$pharmacy->slug)}}">
					<img class="card-img-popular" src="{{asset('front/pharmacy').'/'.$pharmacy->image}}" alt="Card image cap">
					</a>
					<div class="product_text">
					  <div class="bold_text">{{$pharmacy->name}}</div>
					  <div><small> <s>₹ {{$pharmacy->oldprice}}</s> </small> <b class="f-14">{{$pharmacy->newprice}}</b></div>
					  <button style="width: 100%;" type="button" value="{{$pharmacy->id}}"  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
					  
					</div>
				  </div>
				</div>
				@endforeach

			   
			  </div>

			</div>
			
			<div class="carousel-item">

			  <div class="row">
				  
				@foreach($pharmacys as $pharmacy)  
				<div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
				  <div class="mb-2">
				      <a href="{{route('details',$pharmacy->slug)}}">
					<img class="card-img-popular" src="{{asset('front/pharmacy').'/'.$pharmacy->image}}" alt="Card image cap">
					</a>
					<div class="product_text">
					  <div class="bold_text">{{$pharmacy->name}}</div>
					  <div><small> <s>₹ {{$pharmacy->oldprice}}</s> </small> <b class="f-14">{{$pharmacy->newprice}}</b></div>

					  <button style="width: 100%;" type="button" value="{{$pharmacy->id}}"  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
					  
					</div>
				  </div>
				</div>
				@endforeach

			   
			  </div>

			</div>
			<!--/.First slide-->

		  </div>
		  @endif
		  <!--/.Slides-->

		</div>
		<!--/.Carousel Wrapper-->
	  </div>

	</div>
@endif

@if(count($healthstores))
	<div class="container my-4">
	  <div class="row">

		<!--Carousel Wrapper-->
		<div id="health_store" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">

		  <!--Controls-->
		  <div class="controls-top">
			<a class="btn-floating left" href="#health_store" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
			<a class="btn-floating right" href="#health_store" data-slide="next"><i class="fa fa-chevron-right"></i></a>
		  </div>
		  <!--/.Controls-->
		  
		  <div class="container">
		  <div class="row mt-5">
			<div class="heading_section mb-4">
			  <div class="col-md-9"><h6><b>Health Store</b></h6></div>
			  <div class="col-md-3"><a class="float-right blue_color_border" href="{{route('health_store')}}">View All</a></div>
			</div>
		  </div>
</div>
		  <!--Slides-->
		  <div class="carousel-inner popular" role="listbox">
			

			<!--First slide-->
			
			 <div class="carousel-item active ">

			  <div class="row">
				  
				@foreach($healthstores as $healthstore)  
				<div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
				  <div class="mb-2">
				    <a href="{{route('details',$healthstore->slug)}}">
						<img class="card-img-popular" src="{{asset('front/pharmacy').'/'.$healthstore->image}}" alt="Card image cap">
					</a>
					<div class="product_text">
					  <div class="bold_text">{{$healthstore->name}}</div>
					  <div><small> <s>₹ {{$healthstore->oldprice}}</s> </small> <b class="f-14">{{$healthstore->newprice}}</b></div>
					  <button style="width: 100%;" type="button" value="{{$healthstore->id}}"  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
					  
					</div>
				  </div>
				</div>
				@endforeach

			   
			  </div>

			</div>
			
			<div class="carousel-item">

			  <div class="row">
				  
				@foreach($healthstores as $healthstore)  
				<div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
				  <div class="mb-2">
				      <a href="{{route('details',$healthstore->slug)}}">
					<img class="card-img-popular" src="{{asset('front/pharmacy').'/'.$healthstore->image}}" alt="Card image cap">
					</a>
					<div class="product_text">
					  <div class="bold_text">{{$healthstore->name}}</div>
					  <div><small> <s>₹ {{$healthstore->oldprice}}</s> </small> <b class="f-14">{{$healthstore->newprice}}</b></div>
					  <button style="width: 100%;" type="button" value="{{$healthstore->id}}"  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
					  
					</div>
				  </div>
				</div>
				@endforeach

			   
			  </div>

			</div>


		  </div>
		  <!--/.Slides-->

		</div>
		<!--/.Carousel Wrapper-->
	  </div>

	</div>
@endif
<div class="container my-4">
  <div class="row ">

    <!--Carousel Wrapper-->
    <div id="customers" class="carousel slide carousel-multi-item m-auto" data-ride="carousel" data-interval="false">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating left" href="#customers" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating right" href="#customers" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->
      <div class="container">
      <div class="row mt-5">
        <div class="heading_section mb-4">
          <div class="col-md-12"><h4 class="align-center mb-5"><b>What Our Customers Say?</b></h4></div>
        </div>
      </div>
        </div>
      <!--Slides-->
      <div class="carousel-inner popular testi" role="listbox">
        

        <!--First slide-->
        <div class="carousel-item active ">

          <div class="row">
            
            @foreach($testimonials as $testimonial)  
            <div class="col-md-4 col-4 col-xl-4 col-lg-4">
              <div class="mb-2 align-center">
                  
                  <img class="customer_profile" src="{{asset('front/testimonials').'/'.$testimonial->image}}">
                  
            </div>
              <div class="mb-2 align-center">
                
                <div class="">
                  
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                <div class="product_text">
                  <div><small>{{$testimonial->content}}</small></div>
                  <h6 class="mt-3"><b>{{$testimonial->name}}</b></h6>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>

        </div>
        
        <!--First slide-->
        <div class="carousel-item">

          <div class="row">
            
            @foreach($testimonials as $testimonial)  
            <div class="col-md-4 col-4 col-xl-4 col-lg-4">
              <div class="mb-2 align-center"><img class="customer_profile" src="{{asset('front/testimonials').'/'.$testimonial->image}}"></div>
              <div class="mb-2 align-center">
                
                <div class="">
                  
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                <div class="product_text">
                  <div><small>{{$testimonial->content}}</small></div>
                  <h6 class="mt-3"><b>{{$testimonial->name}}</b></h6>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>

        </div>




      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
  </div>

</div>





<!--NEW SLIDER-->
<div class="spe-cor topDoc labtestnew">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="heading_section mb-4">
                  <div class="col-md-9"><h6><b>New Slider</b></h6></div>
                  <div class="col-md-3"><a href="#" class="float-right blue_color_border" >View All</a></div>
                </div>
              </div>
            
            <div class="">
                <div id="slider-3" class="carousel carousel-by-item slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                    
                        <div class="carousel-item active">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                <a href="#">
                                <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                </a>
                                <div class="product_text text-center">
                                  <div class="bold_text">Doctor Name</div>
                                  <div><small>specialists</small></div>
                                  <a type="button" href="#" class="mt-2 blue_color_border">Consult Now</a>
                                </div>
                            </div>
                        </div>
                       
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text text-center">
                                      <div class="bold_text">Doctor Name</div>
                                      <div><small>specialists</small></div>
                                      <a type="button" href="#" class="mt-2 blue_color_border">Consult Now</a>
                                    </div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text text-center">
                                      <div class="bold_text">Doctor Name</div>
                                      <div><small>specialists</small></div>
                                      <a type="button" href="#" class="mt-2 blue_color_border">Consult Now</a>
                                    </div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text text-center">
                                      <div class="bold_text">Doctor Name</div>
                                      <div><small>specialists</small></div>
                                      <a type="button" href="#" class="mt-2 blue_color_border">Consult Now</a>
                                    </div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text text-center">
                                      <div class="bold_text">Doctor Name</div>
                                      <div><small>specialists</small></div>
                                      <a type="button" href="#" class="mt-2 blue_color_border">Consult Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text text-center">
                                      <div class="bold_text">Doctor Name</div>
                                      <div><small>specialists</small></div>
                                      <a type="button" href="#" class="mt-2 blue_color_border">Consult Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text text-center">
                                      <div class="bold_text">Doctor Name</div>
                                      <div><small>specialists</small></div>
                                      <a type="button" href="#" class="mt-2 blue_color_border">Consult Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text text-center">
                                      <div class="bold_text">Doctor Name</div>
                                      <div><small>specialists</small></div>
                                      <a type="button" href="#" class="mt-2 blue_color_border">Consult Now</a>
                                    </div>
                                </div>
                            </div>
                         
                    </div>
                    <a class="carousel-control-prev" href="#slider-3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider-3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!--NEW SLIDER ENDS-->
    
    
    <!--NEW HEALTH STORE-->
<div class="spe-cor topDoc healthstr">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="heading_section mb-4">
                  <div class="col-md-9"><h6><b>New Slider Health Store</b></h6></div>
                  <div class="col-md-3"><a href="#" class="float-right blue_color_border" >View All</a></div>
                </div>
              </div>
            
            <div class="">
                <div id="slider-4" class="carousel carousel-by-item slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                    
                        <div class="carousel-item active">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                <a href="#">
                                <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                </a>
                                <div class="product_text  text-center">
            					  <div class="bold_text">Health Store</div>
            					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
            					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
            					  
            					</div>
                            </div>
                        </div>
                       
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">Health Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">Health Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">Health Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">Health Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">Health Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">Health Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">Health Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                         
                    </div>
                    <a class="carousel-control-prev" href="#slider-4" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider-4" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!--NEW HEALTH STORE-->




<!--NEW EPHARM-->
<div class="spe-cor topDoc epharmnew">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="heading_section mb-4">
                  <div class="col-md-9"><h6><b>New Slider Health Store</b></h6></div>
                  <div class="col-md-3"><a href="#" class="float-right blue_color_border" >View All</a></div>
                </div>
              </div>
            
            <div class="">
                <div id="slider-5" class="carousel carousel-by-item slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                    
                        <div class="carousel-item active">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                <a href="#">
                                <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                </a>
                                <div class="product_text text-center">
            					  <div class="bold_text">EPHARM Store</div>
            					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
            					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
            					  
            					</div>
                            </div>
                        </div>
                       
                            <div class="carousel-item">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">EPHARM Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                 <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">EPHARM Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                 <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">EPHARM Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                             <div class="carousel-item">
                                 <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">EPHARM Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                 <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">EPHARM Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                 <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">EPHARM Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                 <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                    <a href="#">
                                    <img class="d-block img-fluid" src="https://diagnomitra.com/public/front/specialists/1605685911.png" alt="First slide">
                                    </a>
                                    <div class="product_text  text-center">
                					  <div class="bold_text">EPHARM Store</div>
                					  <div><small> <s>₹ 1000</s> </small> <b class="f-14">800</b></div>
                					  <button style="width: 100%;" type="button" value=""  class="mt-2 blue_color_border add-to-cart" >Add to Cart</button>
                					  
                					</div>
                                </div>
                            </div>
                         
                    </div>
                    <a class="carousel-control-prev" href="#slider-5" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider-5" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!--NEW EPHARM-->


<!---->
<script>
  function GetUnique(e) {
    var l = [],
        s = temp_c = [],
        t = ["col-md-1", "col-md-2", "col-md-3", "col-md-4", "col-md-6", "col-md-12", "col-sm-1", "col-sm-2", "col-sm-3", "col-sm-4", "col-sm-6", "col-sm-12", "col-lg-1", "col-lg-2", "col-lg-3", "col-lg-4", "col-lg-6", "col-lg-12", "col-xs-1", "col-xs-2", "col-xs-3", "col-xs-4", "col-xs-6", "col-xs-12", "col-xl-1", "col-xl-2", "col-xl-3", "col-xl-4", "col-xl-6", "col-xl-12"];
    $(e).each(function() {
        for (var l = $(e + " > div").attr("class").split(/\s+/), t = 0; t < l.length; t++) s.push(l[t])
    });
    for (var c = 0; c < s.length; c++) temp_c = s[c].split("-"), 2 == temp_c.length && (temp_c.push(""), temp_c[2] = temp_c[1], temp_c[1] = "xs", s[c] = temp_c.join("-")), -1 == $.inArray(s[c], l) && $.inArray(s[c], t) && l.push(s[c]);
    return l
}

function setcss(e, l, s) {
    for (var t = ["", "", "", "", "", ""], c = d = f = g = 0, r = [1200, 992, 768, 567, 0], o = [], a = 0; a < e.length; a++) {
        var i = e[a].split("-");
        if (3 == i.length) {
            switch (i[1]) {
                case "xl":
                    d = 0;
                    break;
                case "lg":
                    d = 1;
                    break;
                case "md":
                    d = 2;
                    break;
                case "sm":
                    d = 3;
                    break;
                case "xs":
                    d = 4
            }
            t[d] = i[2]
        }
    }
    for (var n = 0; n < t.length; n++)
        if ("" !== t[n]) {
            if (0 === c && (c = 12 / t[n]), f = 12 / t[n], g = 100 / f, a = s + " > .carousel-item.active.carousel-item-right," + s + " > .carousel-item.carousel-item-next {-webkit-transform: translate3d(" + g + "%, 0, 0);transform: translate3d(" + g + ", 0, 0);left: 0;}" + s + " > .carousel-item.active.carousel-item-left," + s + " > .carousel-item.carousel-item-prev {-webkit-transform: translate3d(-" + g + "%, 0, 0);transform: translate3d(-" + g + "%, 0, 0);left: 0;}" + s + " > .carousel-item.carousel-item-left, " + s + " > .carousel-item.carousel-item-prev.carousel-item-right, " + s + " > .carousel-item.active {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);left: 0;}", f > 1) {
                for (k = 0; k < f - 1; k++) o.push(l + " .cloneditem-" + k);
                o.length && (a = a + o.join(",") + "{display: block;}"), o = []
            }
            0 !== r[n] && (a = "@media all and (min-width: " + r[n] + "px) {" + a + "}"), $("#slider-css").prepend(a)
        } $(l).each(function() {
        for (var e = $(this), l = 0; l < c - 1; l++)(e = e.next()).length || (e = $(this).siblings(":first")), e.children(":first-child").clone().addClass("cloneditem-" + l).appendTo($(this))
    })
}

//Use Different Slider IDs for multiple slider
$(document).ready(function() {
    var item = '#slider-1 .carousel-item';
    var item_inner = "#slider-1 .carousel-inner";
    classes = GetUnique(item);
    setcss(classes, item, item_inner);


    var item_1 = '#slider-2 .carousel-item';
    var item_inner_1 = "#slider-2 .carousel-inner";
    classes = GetUnique(item_1);
    setcss(classes, item_1, item_inner_1);
});
</script>

<!--SLIDER 3-->
 <script>
  function GetUnique(e) {
    var l = [],
        s = temp_c = [],
        t = ["col-md-1", "col-md-2", "col-md-3", "col-md-4", "col-md-6", "col-md-12", "col-sm-1", "col-sm-2", "col-sm-3", "col-sm-4", "col-sm-6", "col-sm-12", "col-lg-1", "col-lg-2", "col-lg-3", "col-lg-4", "col-lg-6", "col-lg-12", "col-xs-1", "col-xs-2", "col-xs-3", "col-xs-4", "col-xs-6", "col-xs-12", "col-xl-1", "col-xl-2", "col-xl-3", "col-xl-4", "col-xl-6", "col-xl-12"];
    $(e).each(function() {
        for (var l = $(e + " > div").attr("class").split(/\s+/), t = 0; t < l.length; t++) s.push(l[t])
    });
    for (var c = 0; c < s.length; c++) temp_c = s[c].split("-"), 2 == temp_c.length && (temp_c.push(""), temp_c[2] = temp_c[1], temp_c[1] = "xs", s[c] = temp_c.join("-")), -1 == $.inArray(s[c], l) && $.inArray(s[c], t) && l.push(s[c]);
    return l
}

function setcss(e, l, s) {
    for (var t = ["", "", "", "", "", ""], c = d = f = g = 0, r = [1200, 992, 768, 567, 0], o = [], a = 0; a < e.length; a++) {
        var i = e[a].split("-");
        if (3 == i.length) {
            switch (i[1]) {
                case "xl":
                    d = 0;
                    break;
                case "lg":
                    d = 1;
                    break;
                case "md":
                    d = 2;
                    break;
                case "sm":
                    d = 3;
                    break;
                case "xs":
                    d = 4
            }
            t[d] = i[2]
        }
    }
    for (var n = 0; n < t.length; n++)
        if ("" !== t[n]) {
            if (0 === c && (c = 12 / t[n]), f = 12 / t[n], g = 100 / f, a = s + " > .carousel-item.active.carousel-item-right," + s + " > .carousel-item.carousel-item-next {-webkit-transform: translate3d(" + g + "%, 0, 0);transform: translate3d(" + g + ", 0, 0);left: 0;}" + s + " > .carousel-item.active.carousel-item-left," + s + " > .carousel-item.carousel-item-prev {-webkit-transform: translate3d(-" + g + "%, 0, 0);transform: translate3d(-" + g + "%, 0, 0);left: 0;}" + s + " > .carousel-item.carousel-item-left, " + s + " > .carousel-item.carousel-item-prev.carousel-item-right, " + s + " > .carousel-item.active {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);left: 0;}", f > 1) {
                for (k = 0; k < f - 1; k++) o.push(l + " .cloneditem-" + k);
                o.length && (a = a + o.join(",") + "{display: block;}"), o = []
            }
            0 !== r[n] && (a = "@media all and (min-width: " + r[n] + "px) {" + a + "}"), $("#slider-css").prepend(a)
        } $(l).each(function() {
        for (var e = $(this), l = 0; l < c - 1; l++)(e = e.next()).length || (e = $(this).siblings(":first")), e.children(":first-child").clone().addClass("cloneditem-" + l).appendTo($(this))
    })
}

//Use Different Slider IDs for multiple slider
$(document).ready(function() {
    var item = '#slider-3 .carousel-item';
    var item_inner = "#slider-3 .carousel-inner";
    classes = GetUnique(item);
    setcss(classes, item, item_inner);


    // var item_1 = '#slider-3 .carousel-item';
    // var item_inner_1 = "#slider-3 .carousel-inner";
    // classes = GetUnique(item_1);
    // setcss(classes, item_1, item_inner_1);
});
</script>



<!--SLIDER 4-->
 <script>
  function GetUnique(e) {
    var l = [],
        s = temp_c = [],
        t = ["col-md-1", "col-md-2", "col-md-3", "col-md-4", "col-md-6", "col-md-12", "col-sm-1", "col-sm-2", "col-sm-3", "col-sm-4", "col-sm-6", "col-sm-12", "col-lg-1", "col-lg-2", "col-lg-3", "col-lg-4", "col-lg-6", "col-lg-12", "col-xs-1", "col-xs-2", "col-xs-3", "col-xs-4", "col-xs-6", "col-xs-12", "col-xl-1", "col-xl-2", "col-xl-3", "col-xl-4", "col-xl-6", "col-xl-12"];
    $(e).each(function() {
        for (var l = $(e + " > div").attr("class").split(/\s+/), t = 0; t < l.length; t++) s.push(l[t])
    });
    for (var c = 0; c < s.length; c++) temp_c = s[c].split("-"), 2 == temp_c.length && (temp_c.push(""), temp_c[2] = temp_c[1], temp_c[1] = "xs", s[c] = temp_c.join("-")), -1 == $.inArray(s[c], l) && $.inArray(s[c], t) && l.push(s[c]);
    return l
}

function setcss(e, l, s) {
    for (var t = ["", "", "", "", "", ""], c = d = f = g = 0, r = [1200, 992, 768, 567, 0], o = [], a = 0; a < e.length; a++) {
        var i = e[a].split("-");
        if (3 == i.length) {
            switch (i[1]) {
                case "xl":
                    d = 0;
                    break;
                case "lg":
                    d = 1;
                    break;
                case "md":
                    d = 2;
                    break;
                case "sm":
                    d = 3;
                    break;
                case "xs":
                    d = 4
            }
            t[d] = i[2]
        }
    }
    for (var n = 0; n < t.length; n++)
        if ("" !== t[n]) {
            if (0 === c && (c = 12 / t[n]), f = 12 / t[n], g = 100 / f, a = s + " > .carousel-item.active.carousel-item-right," + s + " > .carousel-item.carousel-item-next {-webkit-transform: translate3d(" + g + "%, 0, 0);transform: translate3d(" + g + ", 0, 0);left: 0;}" + s + " > .carousel-item.active.carousel-item-left," + s + " > .carousel-item.carousel-item-prev {-webkit-transform: translate3d(-" + g + "%, 0, 0);transform: translate3d(-" + g + "%, 0, 0);left: 0;}" + s + " > .carousel-item.carousel-item-left, " + s + " > .carousel-item.carousel-item-prev.carousel-item-right, " + s + " > .carousel-item.active {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);left: 0;}", f > 1) {
                for (k = 0; k < f - 1; k++) o.push(l + " .cloneditem-" + k);
                o.length && (a = a + o.join(",") + "{display: block;}"), o = []
            }
            0 !== r[n] && (a = "@media all and (min-width: " + r[n] + "px) {" + a + "}"), $("#slider-css").prepend(a)
        } $(l).each(function() {
        for (var e = $(this), l = 0; l < c - 1; l++)(e = e.next()).length || (e = $(this).siblings(":first")), e.children(":first-child").clone().addClass("cloneditem-" + l).appendTo($(this))
    })
}

//Use Different Slider IDs for multiple slider
$(document).ready(function() {
    var item = '#slider-4 .carousel-item';
    var item_inner = "#slider-4 .carousel-inner";
    classes = GetUnique(item);
    setcss(classes, item, item_inner);


    // var item_1 = '#slider-3 .carousel-item';
    // var item_inner_1 = "#slider-3 .carousel-inner";
    // classes = GetUnique(item_1);
    // setcss(classes, item_1, item_inner_1);
});
</script>



<!--SLIDER 5-->
 <script>
  function GetUnique(e) {
    var l = [],
        s = temp_c = [],
        t = ["col-md-1", "col-md-2", "col-md-3", "col-md-4", "col-md-6", "col-md-12", "col-sm-1", "col-sm-2", "col-sm-3", "col-sm-4", "col-sm-6", "col-sm-12", "col-lg-1", "col-lg-2", "col-lg-3", "col-lg-4", "col-lg-6", "col-lg-12", "col-xs-1", "col-xs-2", "col-xs-3", "col-xs-4", "col-xs-6", "col-xs-12", "col-xl-1", "col-xl-2", "col-xl-3", "col-xl-4", "col-xl-6", "col-xl-12"];
    $(e).each(function() {
        for (var l = $(e + " > div").attr("class").split(/\s+/), t = 0; t < l.length; t++) s.push(l[t])
    });
    for (var c = 0; c < s.length; c++) temp_c = s[c].split("-"), 2 == temp_c.length && (temp_c.push(""), temp_c[2] = temp_c[1], temp_c[1] = "xs", s[c] = temp_c.join("-")), -1 == $.inArray(s[c], l) && $.inArray(s[c], t) && l.push(s[c]);
    return l
}

function setcss(e, l, s) {
    for (var t = ["", "", "", "", "", ""], c = d = f = g = 0, r = [1200, 992, 768, 567, 0], o = [], a = 0; a < e.length; a++) {
        var i = e[a].split("-");
        if (3 == i.length) {
            switch (i[1]) {
                case "xl":
                    d = 0;
                    break;
                case "lg":
                    d = 1;
                    break;
                case "md":
                    d = 2;
                    break;
                case "sm":
                    d = 3;
                    break;
                case "xs":
                    d = 4
            }
            t[d] = i[2]
        }
    }
    for (var n = 0; n < t.length; n++)
        if ("" !== t[n]) {
            if (0 === c && (c = 12 / t[n]), f = 12 / t[n], g = 100 / f, a = s + " > .carousel-item.active.carousel-item-right," + s + " > .carousel-item.carousel-item-next {-webkit-transform: translate3d(" + g + "%, 0, 0);transform: translate3d(" + g + ", 0, 0);left: 0;}" + s + " > .carousel-item.active.carousel-item-left," + s + " > .carousel-item.carousel-item-prev {-webkit-transform: translate3d(-" + g + "%, 0, 0);transform: translate3d(-" + g + "%, 0, 0);left: 0;}" + s + " > .carousel-item.carousel-item-left, " + s + " > .carousel-item.carousel-item-prev.carousel-item-right, " + s + " > .carousel-item.active {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);left: 0;}", f > 1) {
                for (k = 0; k < f - 1; k++) o.push(l + " .cloneditem-" + k);
                o.length && (a = a + o.join(",") + "{display: block;}"), o = []
            }
            0 !== r[n] && (a = "@media all and (min-width: " + r[n] + "px) {" + a + "}"), $("#slider-css").prepend(a)
        } $(l).each(function() {
        for (var e = $(this), l = 0; l < c - 1; l++)(e = e.next()).length || (e = $(this).siblings(":first")), e.children(":first-child").clone().addClass("cloneditem-" + l).appendTo($(this))
    })
}

//Use Different Slider IDs for multiple slider
$(document).ready(function() {
    var item = '#slider-5 .carousel-item';
    var item_inner = "#slider-5 .carousel-inner";
    classes = GetUnique(item);
    setcss(classes, item, item_inner);


    // var item_1 = '#slider-3 .carousel-item';
    // var item_inner_1 = "#slider-3 .carousel-inner";
    // classes = GetUnique(item_1);
    // setcss(classes, item_1, item_inner_1);
});
</script>

@include('front.footer')

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">
		
		$(document).ready(function() {
          $('.add-to-cart').on('click',function () {
            
            var productId = $(this).val();
            var qty = 1;
			
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
