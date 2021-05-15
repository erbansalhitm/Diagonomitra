
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
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    @if(session('msg'))
                        {!!session('msg')!!}
                    @endif
                    
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                    
                </div>
                
                
            </div>
            <form name="edit-profile" method="POST" action="{{route('store.edit-profile')}}" enctype="multipart/form-data" >
                {{csrf_field()}}
                <div class="form-row mt-2">
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                    <label for="inputEmail4">Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4"  name="name" value="{{$store->name}}" >
                </div>
                  
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Email Id</label>
                  <input type="email" class="form-control" id="inputAddress"  name="email" value="{{$store->email}}">
                </div>
                
                
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress"  name="address" value="{{$store->address}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Pincode</label>
                  <input type="text" class="form-control" id="inputAddress"  name="pincode" value="{{$store->pincode}}">
                </div>
                
                
                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                  <label for="inputAddress">Discription</label>
                  <textarea class="form-control" id="inputAddress"  name="discription" >{{$store->discription}}</textarea>
                </div>
                
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Profile Image</label>
                  <input type="file" class="form-control" id="inputAddress"  name="image">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <img src="{{asset('front/stores').'/'.$store->image}}" style="width:130px">
                </div>
                
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <input type="submit" name="submit" value="Submit"class="btn blue_color_bg" >
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


