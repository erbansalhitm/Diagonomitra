
@include('front.header')

<div class="container mt-3">
  <div class="row">
   @include('user.sidebar')
    <div class="col-sm-9">
      <div class="card px-3 py-3">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row">
            <div class="col-sm-6"><h5><b>Personal Information</b></h5></div>
            <div class="col-sm-6"><a href="{{route('user.edit-profile')}}" class="btn blue_color_bg float-right">Edit</a></div>      
            </div>
            <form>

                <div class="form-row mt-2">
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                    <label for="inputEmail4">Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4" readonly name="name" value="{{$user->name}}" >
                </div>
                  
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Email Id</label>
                  <input type="email" class="form-control" id="inputAddress" readonly name="email" value="{{$user->email}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Mobile</label>
                  <input type="email" class="form-control" id="inputAddress" readonly name="mobile" value="{{$user->mobile}}">
                </div>
                
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-6">
                <div><label class="mr-3 mb-0 f-18">Gender : </label></div>
                <div class="form-check-inline mt-2">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="Male" @if($user->gender == 'Male'){{'checked'}}@endif >Male
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="Female" @if($user->gender == 'Female'){{'checked'}}@endif >Female
                  </label>
                </div>
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="address" value="{{$user->address}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">City</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="city" value="{{$user->city}}">
                </div>

                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">State</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="state" value="{{$user->state}}">
                </div>

                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Pincode</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="pincode" value="{{$user->pincode}}">
                </div>

                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Country</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="country" value="{{$user->country}}">
                </div>
                
                <div class="col-sm-12"><h5><b>Shipping Information</b></h5></div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                    <label for="inputEmail4">Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4" readonly name="shipping_name" value="{{$user->shipping_name}}" >
                </div>
                  
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Email Id</label>
                  <input type="email" class="form-control" id="inputAddress" readonly name="shipping_email" value="{{$user->shipping_email}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Mobile</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="shipping_mobile" value="{{$user->shipping_mobile}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Country</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="shipping_country" value="{{$user->shipping_country}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">City</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="shipping_city" value="{{$user->shipping_city}}">
                </div>

                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">State</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="shipping_state" value="{{$user->shipping_state}}">
                </div>

                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Pincode</label>
                  <input type="tex" class="form-control" id="inputAddress" readonly name="shipping_pincode" value="{{$user->shipping_pincode}}">
                </div>

                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" readonly name="shipping_address" value="{{$user->shipping_address}}">
                </div>
                
                </div> 
            </form>
        </div>
        
        </div>
        </div>
      </div>
    </div>
  </div>

  @include('front.footer')


