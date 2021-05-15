
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
            <div class="col-sm-6"><a href="{{route('doctor.edit-profile')}}" class="btn blue_color_bg float-right">Edit</a></div>      
            </div>
            <form>

                <div class="form-row mt-2">
                    
                @if($doctor->status != '1')
                <div class="col-md-12 alert alert-danger text-center">Account Unapproved</div>
                @endif
                    
                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                  <img src="{{asset('front/doctors').'/'.$doctor->image}}" style="width:150px">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                    <label for="inputEmail4">Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4" readonly   value="{{$doctor->name}}" >
                </div>
                  
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Email Id</label>
                  <input type="email" class="form-control" id="inputAddress" readonly  value="{{$doctor->email}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Mobile</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->mobile}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Specialists</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->specialists}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Experience in Years</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->experience}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Fee</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->fee}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->address}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Pincode</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->pincode}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Timing</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->timing}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Qualifications</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->qualifications}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Memberships</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->memberships}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Awards</label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->awards}}">
                </div>
                
                <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
                  <label for="inputAddress">Gender </label>
                  <input type="text" class="form-control" id="inputAddress" readonly  value="{{$doctor->gender}}">
                </div>
                
                </br>
                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                  <b for="inputAddress">Discription</b>
                  <div>{{$doctor->discription}}</div>
                </div>
                <br/>
                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                  <b for="inputAddress">Professional Experience</b>
                  <div>{{$doctor->professional_experience}}</div>
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


