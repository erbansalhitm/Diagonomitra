@include('front.header')

<div class="container mt-5">
      <div class="row">
        <div class="category_heading col-sm-12 col-md-12 col-lg-8 col-xl-8">
          <h5><b>Consult top verified doctors with all specialists</b></h5>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2">
          <form class="form-inline header_search f-r">
                  <input style="border-radius: 5px 0px 0px 5px;" class="form-control searchbox_width" type="search" placeholder="Search by specialist" aria-label="Search"><button style="border-radius: 0px 5px 5px 0px;" class="btn purpul_color_bg my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
        </div>
      </div>
      <div class="row">
    
            @foreach($specialists as $specialist)
            
            @php
            $url = urlencode($specialist->name);
            @endphp
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/specialists/').'/'.$specialist->image}}" alt="Card image cap">
                <div class="product_text">
                  <div class="bold_text">{{$specialist->name}}</div>
                  <div class="line_height_1 grey_text my-caption"><small>{{$specialist->details}}</small></div>
                  <div class="btn_group">
                    <a  type="button" href="{{route('specialists',$url)}}"  class="mt-2 blue_color_bg">View Detail</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
             
  </div>
  @include('front.footer')