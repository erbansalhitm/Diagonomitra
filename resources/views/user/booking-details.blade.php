
@include('front.header')

<div class="container mt-3">
  <div class="row">
    @include('user.sidebar')
    <div class="col-sm-9">
      <div class="card px-3 py-3">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row">
            <div class="col-sm-6"><h5><b>Booking Details</b></h5></div>     
            </div>
            <form>

                <div class="form-row mt-2">                  
                
                <div class="form-group col-sm-6 col-md-6 col-xl-6 col-lg-6">
                  <b for="inputAddress">Name</b>
                  <div>{{$booking->name}}</div>
                </div>
                <br/>
                <div class="form-group col-sm-6 col-md-6 col-xl-6 col-lg-6">
                  <b for="inputAddress">Mobile</b>
                  <div>{{$booking->mobile}}</div>
                </div>
				<br/>
                <div class="form-group col-sm-6 col-md-6 col-xl-6 col-lg-6">
                  <b for="inputAddress">Consulting Mode</b>
                  <div>{{$booking->mode}}</div>
                </div>
				<br/>
                <div class="form-group col-sm-6 col-md-6 col-xl-6 col-lg-6">
                  <b for="inputAddress">Booking Date</b>
                  <div>{{$booking->date}}</div>
                </div>
				<br/>
                <div class="form-group col-sm-6 col-md-6 col-xl-6 col-lg-6">
                  <b for="inputAddress">Time</b>
                  <div>{{$booking->time}}</div>
                </div>
                <br/>

                <div class="form-group col-sm-6 col-md-6 col-xl-6 col-lg-6">
                  <b for="inputAddress">Prescription</b>
				  @if($booking->prescription)
                  <div><a href="{{asset('front/prescription').'/'.$booking->prescription}}" target="_blank" class="alert text-danger">View Now</a></div>
				  @endif
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


