@include('front.header')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- ***** Include the above in your HEAD tag *** -->
<div id="carouselExampleIndicators" class="main-banner-slider carousel slide" data-ride="carousel">
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
<!--MOBILE BANNER-->
<div>
   <div class="mobile-ban">
      <img src="http://saromc.com/diagno/public/front/images/bannerm.png"/>
   </div>
</div>
<!-- OUR SERVICE -->
<div class="container-fluid">
   <div id="video-multi-item" class="video_card" data-ride="carousel" data-interval="false">
      <div class="heading_section mb-4 mt-5">
            <h6><b>Our Services</b></h6>
      </div>
      <div class="slider-container">
      <div class="top-service top-service-slider owl-carousel owl-theme">
         <div class="card mb-2">
            <a href="#">
            <img src="{{asset('front/service/doctor.png')}}">
            </a>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">
                     <div class="d-flex justify-content-between align-items-center">
                        <small class="card-text ">Doctor Consultation</small>
                        <a type="button" href="{{route('doctors')}}" class="pink_color_border btn-group-sm">Consult Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card mb-2">
            <a href="#">
            <img src="{{asset('front/service/lab.png')}}">
            </a>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">
                     <div class="d-flex justify-content-between align-items-center">
                        <small class="card-text">Lab Test</small>
                        <a type="button" href="{{route('labtest')}}" class="pink_color_border btn-group-sm">Book Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card mb-2">
            <a href="#">
            <img src="{{asset('front/service/epharmecy.png')}}">
            </a>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">
                     <div class="d-flex justify-content-between align-items-center">
                        <small class="card-text">E-Pharmacy</small>
                        <a type="button" href="{{route('epharmacy')}}" class="pink_color_border btn-group-sm">Shop Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card mb-2">
            <a href="#">
            <img src="{{asset('front/service/healthstore.png')}}">
            </a>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">
                     <div class="d-flex justify-content-between align-items-center">
                        <small class="card-text ">Health Store</small>
                        <a type="button" href="{{route('health_store')}}" class="pink_color_border btn-group-sm">Shop Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </div>
</div>
<!-- DESKTOP CONSULT TOP..-->
<div class="my-4 consultDoctor">
   <div id="product-item" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">
      <div class="heading_section mb-4">
         <h6><b>Consult our verified doctors with all specialist</b></h6>
      </div>
      @if($specialists)
      <div class="popular" role="listbox">
         <!--First slide-->
         <div class="top-service slider-and-mobile-view top-service-slider owl-carousel owl-theme">
         @foreach($specialists as $specialist)
         @php
            $url = urlencode($specialist->name);
            @endphp
            <div class="mb-2 card">
               <a href="{{route('specialists',$url)}}">
               <img class="card-img-popular" src="{{asset('front/specialists/').'/'.$specialist->image}}"
                  alt="Card image cap">
               </a>
               <div class="product_text">
                  <div class="bold_text">{{$specialist->name}}</div>
                  <div class="line_height_1 grey_text"><small>{{$specialist->details}}</small></div>
               </div>
            </div>
         @endforeach
         </div>
         <!--/.First slide-->
         <!--First slide-->
         <!-- <div class="carousel-item">
            <div class="row">
               @foreach($specialists as $specialist)
               <div class="col-md-6 col-6 col-xl-3 col-lg-3 clearfix  d-md-block">
                  <div class="mb-2 card">
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
         </div> -->
      </div>
      @endif
      <!--/.Slides-->
   </div>
   <div class="text-center">
      <a href="{{route('spesilities')}}" class="view-all-link">View All</a>
      <div>
         <!--/.Carousel Wrapper-->
      </div>
   </div>
   </div>
   <!--DESKTOP TOP DOCTOR IN YOUR CITY-->
   <div class="spe-cor topDoc">
      <div class="container-fluid">
            <div class="heading_section mb-4 mt-4">
               <h6><b>Top Doctors in your city</b></h6>
            </div>
      </div>
      <!--<h2>New Slider</h2>-->
         <div  class="carousel carousel-by-item slide top-doctor-city" data-ride="carousel">

         
         <div class="top-service slider-and-mobile-view top-service-slider owl-carousel owl-theme">
               <!-- @if($doctor)
                  <div class="card">
                     <a href="{{route('doctor-profile',$doctor->slug)}}">
                     <img class="d-block img-fluid" src="{{asset('front/doctors/').'/'.$doctor->image}}" alt="First slide">
                     </a>
                     <div class="product_text">
                        <div class="bold_text">{{$doctor->name}}</div>
                        <div><small>{{$doctor->specialists}}</small></div>
                        <div class="d-flex justify-content-center top-doctor-buttons">
                           @if(session('user'))
                           <a type="button" data-toggle="modal" data-target="#bookappontmant" class="mt-2 mx-1 pink_color_border">Consult Now</a>
                           @else
                           <a type="button" data-toggle="modal" data-target="#join_popup" class="mt-2 mx-1 pink_color_border">Consult Now</a>
                           @endif  
                           <a type="button" href="{{route('doctor-profile',$doctor->slug)}}" class="mt-2 mx-1 pink_color_border">View Profile</a>
                        </div>
                     </div>
                  </div>
               @endif -->
               @if($doctors)
               @foreach($doctors as $doctor)
                  <div class="card">
                     <a href="{{route('doctor-profile',$doctor->slug)}}">
                     <img class="d-block img-fluid" src="{{asset('front/doctors/').'/'.$doctor->image}}" alt="First slide">
                     </a>
                     <div class="product_text">
                        <div class="bold_text">{{$doctor->name}}</div>
                        <div><small>{{$doctor->specialists}}</small></div>
                        <div class="d-flex justify-content-center top-doctor-buttons">
                        @if(session('user'))
                           <a type="button" data-toggle="modal" data-target="#bookappontmant" class="mt-2 mx-1 pink_color_border">Consult Now</a>
                           @else
                           <a type="button" data-toggle="modal" data-target="#join_popup" class="mt-2 mx-1 pink_color_border">Consult Now</a>
                           @endif  
                           <a type="button" href="{{route('doctor-profile',$doctor->slug)}}" class="mt-2 mx-1 pink_color_border">View Profile</a>
                        </div>
                     </div>
                  </div>
               @endforeach
               @endif
            </div>
         </div>
      <div class="text-center">
         <a href="{{route('doctors')}}" class="view-all-link" >View All</a>
      </div>
   </div>
</div>
<!--DESKTOP LAB TEST-->
@if(count($labtests))
<div class="spe-cor topDoc epharmnew">
   <div class="heading_section mb-4 mt-5">
      <h6><b>Lab Test</b></h6>
   </div>
   <div id="slider-5" class="carousel carousel-by-item slide top-doctor-city" data-ride="carousel">
            <div class="top-service slider-and-mobile-view top-service-slider owl-carousel owl-theme">
         @foreach($labtests as $labtest) 					  
            <div class="card">
               <a href="{{route('labtest-details',$labtest->slug)}}">
               <img class="d-block img-fluid" src="{{asset('front/labtest').'/'.$labtest->image}}" alt="{{$labtest->name}}">
               </a>
               <div class="product_text  text-center">
                  <div class="bold_text">{{$labtest->name}}</div>
                  <div><small> <s>₹ {{$labtest->oldprice}}</s> </small> <b class="f-14">{{$labtest->newprice}}</b></div>
                  <a type="button" value="{{$labtest->id}}"  class="mt-2 pink_color_border" >Add to Cart</a>
               </div>
            </div>
         @endforeach
         </div>
   </div>
   <div class="text-center">
      <a href="{{route('labtest')}}" class="view-all-link" >View All</a>
   </div>
</div>
@endif	
@if(count($pharmacys))
<div class="spe-cor topDoc epharmnew">
   <div class="container-fluid">
         <div class="heading_section mb-4 mt-5">
            <h6><b>E-Pharmacy</b></h6>
         </div>
         <div id="slider-6" class="carousel carousel-by-item slide top-doctor-city" data-ride="carousel">
            <div class="top-service slider-and-mobile-view top-service-slider owl-carousel owl-theme">
               @foreach($pharmacys as $pharmacy) 					  
                     <div class="card">
                        <a href="{{route('details',$pharmacy->slug)}}">
                        <img class="d-block img-fluid" src="{{asset('front/pharmacy').'/'.$pharmacy->image}}" alt="{{$pharmacy->name}}">
                        </a>
                        <div class="product_text  text-center">
                           <div class="bold_text">{{$pharmacy->name}}</div>
                           <div><small> <s>₹ {{$pharmacy->oldprice}}</s> </small> <b class="f-14">{{$pharmacy->newprice}}</b></div>
                           <a type="button" value="{{$pharmacy->id}}"  class="mt-2 pink_color_border add-to-cart" >Add to Cart</a>
                        </div>
                     </div>
               @endforeach
            </div>
         </div>
         <div class="text-center">
            <a href="{{route('epharmacy')}}" class="view-all-link" >View All</a>
         </div>
   </div>
</div>
@endif

<!--DESKTOP HEALTHSTORE-->
@if(count($healthstores))
<div class="spe-cor topDoc epharmnew">
   <div class="container-fluid">
         <div class="heading_section mb-4 mt-5">
            <h6><b>Health Store</b></h6>
         </div>
         <div id="slider-7" class="carousel carousel-by-item slide top-doctor-city" data-ride="carousel">
            <div class="top-service slider-and-mobile-view top-service-slider owl-carousel owl-theme">
                  @foreach($healthstores as $healthstore) 					  
                     <div class="card">
                        <a href="{{route('details',$healthstore->slug)}}">
                        <img class="d-block img-fluid" src="{{asset('front/pharmacy').'/'.$healthstore->image}}" alt="{{$healthstore->name}}">
                        </a>
                        <div class="product_text  text-center">
                           <div class="bold_text">{{$healthstore->name}}</div>
                           <div><small> <s>₹ {{$healthstore->oldprice}}</s> </small> <b class="f-14">{{$healthstore->newprice}}</b></div>
                           <a type="button" value="{{$healthstore->id}}"  class="mt-2 pink_color_border add-to-cart" >Add to Cart</a>
                        </div>
                     </div>
                  @endforeach
            </div>
         </div>
         <div class="text-center">
            <a href="{{route('health_store')}}" class="view-all-link" >View All</a>
         </div>
   </div>
</div>
@endif	
<!--MOBILE TESTIMONIAL-->
<div class="container-fluid my-2 mobTest">
   <div class="container-fluid">
      <div class="row mt-3">
         <div class="heading_section mb-2">
            <div class="col-md-12">
               <h4 class="align-center mb-4 mt-5"><b>What Our Customers Say?</b></h4>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="scroll-x">
         <div class="col-9">
            <div class="test-content">
               <div class="mb-2 align-center"><img class="customer_profile" src="http://saromc.com/diagno/public/front/testimonials/user.png"></div>
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
                        <div><small>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</small></div>
                        <h6 class="mt-3"><b>Sumit</b></h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-9">
            <div class="test-content">
               <div class="mb-2 align-center"><img class="customer_profile" src="http://saromc.com/diagno/public/front/testimonials/user.png"></div>
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
                        <div><small>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</small></div>
                        <h6 class="mt-3"><b>Sumit</b></h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-9">
            <div class="test-content">
               <div class="mb-2 align-center"><img class="customer_profile" src="http://saromc.com/diagno/public/front/testimonials/user.png"></div>
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
                        <div><small>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</small></div>
                        <h6 class="mt-3"><b>Sumit</b></h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--DESKTOP TESTIMONIAL-->
<div class="container-fluid my-4 deskTest">
   <div class="row ">
      <!--Carousel Wrapper-->
      <div id="customers" class="carousel slide carousel-multi-item m-auto" data-ride="carousel" data-interval="false">
         <!--Controls-->
         <div class="controls-top">
            <a class="btn-floating left" href="#customers" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating right" href="#customers" data-slide="next"><i class="fa fa-chevron-right"></i></a>
         </div>
         <!--/.Controls-->
         <div class="container-fluid">
            <div class="row mt-5">
               <div class="heading_section mb-4">
                  <div class="col-md-12">
                     <h4 class="align-center mb-5"><b>What Our Customers Say?</b></h4>
                  </div>
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
   });
   
   $(document).ready(function() {
     var item = '#slider-6 .carousel-item';
     var item_inner = "#slider-6 .carousel-inner";
     classes = GetUnique(item);
     setcss(classes, item, item_inner);
   });
   
   $(document).ready(function() {
     var item = '#slider-7 .carousel-item';
     var item_inner = "#slider-7 .carousel-inner";
     classes = GetUnique(item);
     setcss(classes, item, item_inner);
   });
   
</script>
<!--===================================== MORE SLIDER ==================================-->
<script></script>
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
       });
</script>
