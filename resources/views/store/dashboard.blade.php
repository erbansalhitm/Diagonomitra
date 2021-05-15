
@include('front.header')

<div class="container mt-3">
  <div class="row">
    @include('store.sidebar')
    <div class="col-sm-9">
      <div class="card px-3 py-3">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row">
            <div class="col-sm-6"><h5><b>Personal Information</b></h5></div>
            <div class="col-sm-6"><a href="{{route('store.edit-profile')}}" class="btn blue_color_bg float-right">Edit</a></div>      
            </div>
            <form>

                <div class="form-row mt-2">
                    
                @if($store->status != '1')
                <div class="col-md-12 alert alert-danger text-center">Account Unapproved</div>
                @endif
                    
                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                  <img src="{{asset('front/stores').'/'.$store->image}}" style="width:150px">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                    <label for="inputEmail4">Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4" readonly   value="{{$store->name}}" >
                </div>
                  
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Email Id</label>
                  <input type="email" class="form-control" id="inputAddress" readonly  value="{{$store->email}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Mobile</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$store->mobile}}">
                </div>
                
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Pincode</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$store->pincode}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$store->address}}">
                </div>

                </br>
                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                  <b for="inputAddress">Discription</b>
                  <div>{{$store->discription}}</div>
                </div>
                <br/>
                
                
                </div> 
            </form>
        </div>
        
        </div>
        </div>
      </div>
    </div>
  </div>

  @include('front.footer')


