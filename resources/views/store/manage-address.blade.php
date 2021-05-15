 @include('front.header')

<div class="container mt-3">
  <div class="row">
   
    <div class="col-sm-12">
      <div class="card px-3 py-3">
       
          <div class="address">
            <div class="row">
            <div class="col-sm-12"><h5><b>Manage Addresses</b></h5></div>
            <div class="col-sm-12 mt-2"><button type="button" class="btn blue_color_bg w-100" data-toggle="modal" data-target="#editaddress">Add New Address</button></div>  
            </div>    
            </div>
        <div class="row">

          <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-2">
            <div class="card px-3 py-3">
              <div class=""><span class="f-14 mt-2 px-1 py-1 light_blue_bg"><b>Home</b></span></div>
              <p class="mt-2 mb-0">{{$user->name}} {{$user->mobile}}</p>
              <p class="mt-2 mb-0">{{$user->address}}, {{$user->city}}, {{$user->state}}, {{$user->country}}</p>
              <div class="col-12 nopadding">
                <div class="float-right">
                <button class="btn nobtn blue_color_on_hover" data-toggle="modal" data-target="#editaddress">Edit</button>
                <button class="btn nobtn blue_color_on_hover">Delete</button>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
     
        </div>
        </div>
      </div>
    </div>
   @include('front.footer')
