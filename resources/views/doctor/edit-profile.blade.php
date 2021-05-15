
@include('front.header')

<div class="container mt-3">
  <div class="row">
    @include('doctor.sidebar')
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
            <form name="edit-profile" method="POST" action="{{route('doctor.edit-profile')}}" enctype="multipart/form-data" >
                {{csrf_field()}}
                <div class="form-row mt-2">
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                    <label for="inputEmail4">Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4"  name="name" value="{{$doctor->name}}" >
                </div>
                  
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Email Id</label>
                  <input type="email" class="form-control" id="inputAddress"  name="email" value="{{$doctor->email}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Specialists</label>
                  <input type="text" class="form-control" id="inputAddress"  name="specialists" value="{{$doctor->specialists}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Experience in Years</label>
                  <input type="text" class="form-control" id="inputAddress"  name="experience" value="{{$doctor->experience}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Fee</label>
                  <input type="text" class="form-control" id="inputAddress"  name="fee" value="{{$doctor->fee}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress"  name="address" value="{{$doctor->address}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Pincode</label>
                  <input type="text" class="form-control" id="inputAddress"  name="pincode" value="{{$doctor->pincode}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Timing</label>
                  <input type="text" class="form-control" id="inputAddress"  name="timing" value="{{$doctor->timing}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Qualifications</label>
                  <input type="text" class="form-control" id="inputAddress"  name="qualifications" value="{{$doctor->qualifications}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Memberships</label>
                  <input type="text" class="form-control" id="inputAddress"  name="memberships" value="{{$doctor->memberships}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Awards</label>
                  <input type="text" class="form-control" id="inputAddress"  name="awards" value="{{$doctor->awards}}">
                </div>
                
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-6">
                    <div><label class="mr-3 mb-0 f-18">Gender : </label></div>
                    <div class="form-check-inline mt-2">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="Male" @if($doctor->gender == 'Male'){{'checked'}}@endif >Male
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="Female" @if($doctor->gender == 'Female'){{'checked'}}@endif >Female
                      </label>
                    </div>
                </div>
                </br>
                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                  <label for="inputAddress">Discription</label>
                  <textarea class="form-control" id="inputAddress"  name="discription" >{{$doctor->discription}}</textarea>
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                  <label for="inputAddress">Professional Experience</label>
                  <textarea class="form-control" id="inputAddress"  name="professional_experience" >{{$doctor->professional_experience}}</textarea>
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Profile Image</label>
                  <input type="file" class="form-control" id="inputAddress"  name="image">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <img src="{{asset('front/doctors').'/'.$doctor->image}}" style="width:130px">
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


