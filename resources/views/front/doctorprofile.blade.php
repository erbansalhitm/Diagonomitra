@include('front.header')

<style>
    .radio-cat img{
        width:4%;
    }
    .radio-cat label{
        margin-right: 25px;
    }
    .img-btn-box{
        width:10%;
        float:left;
    }
    .selectSlot select{
            padding: 3px 14px;
            /*margin-left: 9px;*/
            border: 1px solid #d0cfcf;
    }
    
    .top-doc-profile img{
        width:100%;
        height:180px;
        object-fit:cover;
    }
</style>


<div class="container">
  
  <div class="row">
  <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-3">
    <div class="card doctor_details px-2 py-2">
      <div class="row">
        <div class="col-4 col-sm-3">
          <img src="{{asset('front/doctors/').'/'.$doctor->image}}">
        </div>
        <div class="col-8 col-sm-5 nopadding">
          <h6><b>{{$doctor->name}}</b></h6>
          <p class="f-12 mb-0">{!!$doctor->specialists!!}</p>
          <small>{{$doctor->experience}} Experience Overall</small>
          <p class="blue_color_text">₹ {{$doctor->fee}} Consultation Fee at clinic</p>
        </div>
        <div class="col-12 col-sm-4">
            
        @if(session('user'))
        <button type="button" data-toggle="modal" data-target="#bookappontmant" class="mt-2 blue_color_border bookappointment">Book Appointment</button>
        @else
        <button type="button" data-toggle="modal" data-target="#join_popup" class="mt-2 blue_color_border bookappointment">Book Appointment</button>
        @endif
        
        </div>
        <div class="col-12 mt-2  d-sm-none d-md-none d-lg-block">
          <small>
          {!!$doctor->discription!!}
          </small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3  d-sm-none d-md-none d-lg-block">
    <div class="card px-2 py-2">
      
          <h6><b>Details</b></h6>
          <div class="row mt-2">
            <div class="col-1">
              <span><img class="pin_icon" src="{{asset('front/images/pin.svg')}}"> </span>
            </div>
            <div class="col-11">
              <p class="f-12 mb-0">{{$doctor->address}}</p>
              <p class="f-12 mb-0">{{$doctor->pincode}}</p>
          <a class="blue_color_text" href="javascript:void(0)">Get Direction</a>
            </div>
          </div>
          <h6 class="mt-3"><b>Timings</b></h6>
          <div class="row mt-2 px-2">
            <div class="col-6">
              {{$doctor->timing}}
            </div>
            
          </div>
          
    </div>
  </div>



</div>
</div>

<div class="container mt-3  d-sm-none d-md-none d-lg-block">
  <div class="card px-4 py-2">
    <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
      <h6><b>Professional Experience</b></h6>
      <ul class="mt-2">
        <li><small>{{$doctor->experience}}</small> </li>

      </ul>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
      <h6><b>Qualifications</b></h6>
      <ul class="mt-2">
        <li><small>{{$doctor->qualifications}}</small> </li>
      </ul>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
      <h6><b>Professional Memberships</b></h6>
      <ul class="mt-2">
        <li><small>{{$doctor->memberships}}</small> </li>
      </ul>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
      <h6><b>Awards & Recognitions</b></h6>
      <ul class="mt-2">
        <li><small>{{$doctor->awards}}</small> </li>
      </ul>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bookappontmant" tabindex="-1" role="dialog" aria-labelledby="join_popupTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered width600" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="ModalLongTitle">Book Appointment </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             
       @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
       @endforeach
       
       <form name="booking" action="{{route('user.book-appointment')}}" method="post" enctype="multipart/form-data">
           
        <label class="f-12">Select Consultation mode</label>
        
          <div class="consultation_type">
            
            <div class="col-sm-12">
              {{@csrf_field()}}
              <input type="hidden" class="form-control doctor-id" value="{{$doctor->id}}" name="doctor_id">
              <input type="hidden" class="form-control doctor-fee" value="{{$doctor->fee}}" name="doctor_fee">
            </div>
             
            <div class="radio-cat">
 
                <input type="radio" id="clinic" class="mode" name="mode" value="In Clinic">
                <img class="" src="https://www.flaticon.com/svg/static/icons/svg/619/619051.svg">
                <label for="">In Clinic</label>
               
                <input type="radio" id="audio" class="mode" name="mode" value="Audio">
                <img class="" src="https://www.flaticon.com/svg/static/icons/svg/786/786474.svg"> 
                <label for="">Audio</label>
                
                <input type="radio" id="video" class="mode" name="mode" value="Video">
                <img class="" src="https://www.flaticon.com/svg/static/icons/svg/832/832642.svg"> 
                <label for="Video">Video</label>
                
            </div>
            <i class="mode-msg text-danger"></i>
        </div>
          <div class="form-group row mt-2">
            
            <div class="col-sm-12">
              <label class="f-12">Select Date</label>
              <input type="date" class="form-control f-12 slot-date" id="inputEmail3" placeholder="Choose date" name="date">
              <i class="date-msg text-danger"></i>
            </div>
            
          </div>

          <div class="form-group row">
            <div class="col-sm-12">
            
                <div class="selectSlot">
                
                    <label class="">Select Appointment Time</label>
                    <select name="time" id="slot"  class="form-control f-12 slot-time">
                    <option value="">Timing</option>
                    @foreach($slots as $slot)
                    <option value="{{$slot->slot}}">{{$slot->slot}}</option>
                    @endforeach
                    </select>
                    <i class="time-msg text-danger"></i>        
                </div>
            
            </div>

        </div> 
        
        <div class="form-group row">
            <div class="col-sm-12">
                
                <label class="">Select Payment Type</label>
                <select name="payment_type" id="payment-type"  class="form-control f-12 payment-type">
                <option value="Online">Online</option>
                <option value="Offline">Offline</option>
                </select>
            
            </div>
        </div> 
        
        <div class="form-group row">
			<div class="col-sm-12">

				<label class=""> Attach Prescription File :</label> <br/>
				<input type="file" id="prescription" class="form-control f-12" name="prescription"> 
				<i class="text-info">upload only png,jpeg,jpg file </i>

			</div>

        </div> 
          <div class="col-sm-12 mt-2 nopadding">
            <div class="float-right">
              <input type="submit" class="btn blue_color_bg" id="book-slot" value="Confirm">
            </div>
          </div>    
        </form>
        
        </div>
    </div>
    </div>
</div>








<!-- desktop carousel -->
<div class="container my-4  d-sm-none d-md-none d-lg-block">
  <div class="row">

    <!--Carousel Wrapper-->
    <div id="doctors" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating left" href="#doctors" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating right" href="#doctors" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->
      <div class="row">
        <div class="heading_section mb-4">
          <div class="col-md-9"><h6><b>Top Doctors in you City</b></h6></div>
          <div class="col-md-3"><a href="{{route('doctors')}}" class="float-right blue_color_border">View All</a></div>
        </div>
      </div>

      <!--Slides-->
    <div class="carousel-inner popular" role="listbox">
        
        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            @foreach($doctors as $doctor)
            <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2 clearfix d-md-block">
              <div class="mb-2 top-doc-profile">
                <img class="card-img-popular" src="{{asset('front/doctors/').'/'.$doctor->image}}"
                  alt="Card image cap">
                <div class="product_text">
                  <div class="bold_text">{{$doctor->name}}</div>
                  <div><small>{{$doctor->specialists}}</small></div>
                  <a type="button" href="{{route('doctor-profile',$doctor->slug)}}" class="mt-2 blue_color_border">Consult Now</a>
                </div>
              </div>
            </div>
            @endforeach
           
          </div>

        </div>
        
        <div class="carousel-item">

          <div class="row">
            @foreach($doctors as $doctor)
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 clearfix d-none d-md-block">
              <div class="mb-2">
                <img class="card-img-popular" src="{{asset('front/doctors/').'/'.$doctor->image}}"
                  alt="Card image cap">
                <div class="product_text">
                  <div class="bold_text">{{$doctor->name}}</div>
                  <div><small>{{$doctor->specialists}}</small></div>
                  <a type="button" href="{{route('doctor-profile',$doctor->slug)}}" class="mt-2 blue_color_border">Consult Now</a>
                </div>
              </div>
            </div>
            @endforeach
           
          </div>

        </div>
        <!--/.First slide-->

    </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
  </div>

</div>

    <script type="text/javascript">
		
	$(document).ready(function() {
		    
        $('#book-slot').on('click',function () {
            
            var check = true;
            
            var mode = $('.mode:checked').val();
            
            if(mode == '' || mode == null)
    		{
    			$('.mode-msg').text('Please enter consultation mode');
    			check = false;
    		}else
    		{
    			$('.mode-msg').text('');
    		}
            
            var date = $('.slot-date').val();
            
            if(date == '' || date == null)
    		{
    			$('.date-msg').text('Please enter slot date');
    			check = false;
    		}else
    		{
    			$('.date-msg').text('');
    		}
            
            var time = $('.slot-time').val();
            
            if(time == '' || time == null)
    		{
    			$('.time-msg').text('Please enter slot time');
    			check = false;
    		}else
    		{
    			$('.time-msg').text('');
    		}
            
            if(check == false){
                
			return false;
			
    		}else{
    			
    			return true;
    			
    		}
			return false;			

          });
          
    });
		
		
    </script>

@include('front.footer')