@include('front.header')
<div class="main-banner">

</div>

<div class="container-fluid">
  <div class="row mt-4">
      
      
      <div class="col-lg-12 col-md-12">
          <div>
              <div class="search-wrap-1 ftco-animate labtest-search">
			    		<form action="{{route('search-doctor')}}" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg-12">
		        			    <div class="w-bg">
		        			        
    		        			     <span>
    		        			         <i class="fas fa-map-marked-alt"></i> 
    		        			     </span>  
    		        			     <div class="form-group">
    		        			         
            		          			  <div class="form-field">
            				                <input type="text" class="form-control place" placeholder="Search place By Pincode" name="place">
            				              </div>
            				              
            			              </div>
            			             <div class="form-group">
    		        					
    		        					<div class="form-field">
        		          					<div class="select-wrap">
                		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                		                      
                		                      <select name="specialist" class="form-control specialist">
                		                        <option value="">Search Speciality</option>
                		                        @foreach($specialists as $specialist)
                                        		    <option value="{{$specialist->name}}">{{$specialist->name}}</option>
                                        		@endforeach
                		                      </select>
                		                      
                		                    </div>
            				            </div>
            				            
            			             </div>
            			             <div class="form-group">
    		        					
    		        					<div class="form-field">
    		          					    <div class="icon"></div>
            				                <input type="text" class="form-control doctor-name" name="doctor_name" placeholder="Lookup with Doctor's Name" >
            				             </div>
            				             
            			             </div>
            			             <div class="form-group">
            			                 
    		        					<div class="form-field">
    				                    <input type="submit" value="Search" class="form-control btn btn-primary sub" id="search-doctor">
            				            </div>
            				            
            			              </div>
        			              
        			              </div>
		        			</div>
		        		
		        		</div>
		        	</form>
		        </div>
          </div>
      </div>
      
    <!--<div class="category_heading col-sm-12 col-md-12 col-lg-8 col-xl-8">-->
    <!--  <h5><b>Book from 345 doctors in jaipur</b></h5>-->
    <!--</div>-->
    <!--<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2">-->
    <!--  <form class="form-inline header_search f-r">-->
    <!--          <input style="border-radius: 5px 0px 0px 5px;" class="form-control searchbox_width f-14" type="search" placeholder="Search by Doctor" aria-label="Search"><button style="border-radius: 0px 5px 5px 0px;" class="btn purpul_color_bg my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>-->
    <!--        </form>-->
    <!--</div>-->
  </div>

    <div class="inner-box">
    <div class="row mt-5">
          <div class="heading_section mb-4">
            <div class="col-md-9"><h6><b>Doctors in your area</b></h6></div>
          </div>
        </div>
      <div class="row">
        
          @foreach($doctors as $doctor)
          
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-3">
          <div class="card doctor_details">
              <div class="d-flex left-contet-box">
              <figure>  
                <img src="{{asset('front/doctors/').'/'.$doctor->image}}">
              </figure>
              <div class="content-box">
                <!-- <img class="watermark" src="{{asset('front/')}}/images/dlogo.png"> -->
                <h6><b>{{$doctor->name}}</b></h6>
                <p class="f-12 mb-0 specialist">{{$doctor->specialists}}</p><br />
                <div class="d-flex mt-2">
                  <small class="exper">{{$doctor->experience}} Exp</small>
                  <p class="fee">₹ {{$doctor->fee}} </p>  
                </div>
                <div class="action-btns">
                  <a type="button" class="mt-2 blue_color_border know-more" href="{{route('doctor-profile',$doctor->slug)}}">Know More</a>
                  @if(session('user'))
                  <a type="button" data-toggle="modal" data-target="#bookappontmant" class="mt-2 blue_color_border bookappointment">Book Appointment</a>
                  @else
                  <a type="button" data-toggle="modal" data-target="#join_popup" class="mt-2 blue_color_border bookappointment">Book Appointment</a>
                  @endif
                </div>
              </div>
              </div>
              <div class="address">
                  <h3>Address:</h3>
                  <a href="http://maps.google.com/?q = {{$doctor->address}}" target="_blank">
                  <p class="fee d-flex address-content">
                  <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 18.289 26.012">
                      <path d="M9.145 0a9.146 9.146 0 0 0-7.78 13.953l7.259 11.7a.762.762 0 0 0 .648.36h.006a.762.762 0 0 0 .648-.37L17 13.83A9.147 9.147 0 0 0 9.145 0zm6.547 13.047L9.26 23.786 2.66 13.15a7.626 7.626 0 1 1 13.031-.1z" data-name="Path 495"/>
                      <path d="M9.144 4.572a4.572 4.572 0 1 0 4.572 4.572 4.578 4.578 0 0 0-4.572-4.572zm0 7.631a3.058 3.058 0 1 1 3.053-3.058 3.061 3.061 0 0 1-3.053 3.058z" data-name="Path 496"/>
                  </svg>
                  {{$doctor->address}} </p>  
                  </a>
              </div>
              <!-- <div class="action-btns mobile-view-btn">
                <a type="button" class="mt-2 blue_color_border know-more" href="#">Know More</a>
                <a type="button" href="{{route('doctor-profile',$doctor->slug)}}" class="mt-2 blue_color_border bookappointment">Book Appointment</a>
              </div> -->
          </div>
          </div>
          
          @endforeach
      
      </div>
    </div>
</div>

<div class="modal fade" id="bookappontmant" tabindex="-1" role="dialog" aria-labelledby="join_popupTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered width600" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="ModalLongTitle">Book Appointment</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
        <label class="f-12">Select Consultation mode</label>
        
          <div class="consultation_type">
            <div class=""><button class="white-button f-12">
 
            <img class="icon-align ng-star-inserted" src="./Diagonomitra1_files/hospital_blue.svg">

            In Clinic </button><button style=" margin-left: 15px;" class="blue-button">
              

             
            <img class="icon-align ng-star-inserted" src="./Diagonomitra1_files/call_white.svg"> Audio </button><button style=" margin-left: 15px;" class="white-button f-12">

             
            <img class="icon-align ng-star-inserted" src="./Diagonomitra1_files/video_blue.svg"> Video</button></div>
            
          
        </div>
          <div class="form-group row mt-2">
            
            <div class="col-sm-12">
              <label class="f-12">Select Date</label>
              <input type="mobile" class="form-control f-12" id="inputEmail3" placeholder="Choose date">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-12">
              <label class="f-12">Select Slot</label>
              <p class="f-12">Morning (10 slot Available)</p>
              <div class="slot">
               
                 <div class="slot_time"> 10:00 AM </div>
                 <div class="slot_time"> 10:15 AM</div>
                 <div class="slot_time"> 10:20 AM</div>
                 <div class="slot_time"> 10:00 AM </div>
                 <div class="slot_time"> 10:15 AM</div>
                 <div class="slot_time"> 10:20 AM</div>
                 <div class="slot_time"> 10:00 AM </div>
                 <div class="slot_time"> 10:15 AM</div>
                 <div class="slot_time"> 10:20 AM</div>      
              </div>
              <p class="f-12 mt-3">Evening(10 slot Available)</p>
              <div class="slot">
               
                 <div class="slot_time"> 10:00 AM </div>
                 <div class="slot_time"> 10:15 AM</div>
                 <div class="slot_time"> 10:20 AM</div>
                 <div class="slot_time"> 10:00 AM </div>
                 <div class="slot_time"> 10:15 AM</div>
                 <div class="slot_time"> 10:20 AM</div>
                 <div class="slot_time"> 10:00 AM </div>
                 <div class="slot_time"> 10:15 AM</div>
                 <div class="slot_time"> 10:20 AM</div>      
              </div>
                </div>

                   
      </div> 
      <div class="col-sm-12 mt-2 nopadding">
        <div class="float-right">
          <button type="button" class="btn light_color_bg">Cancel</button>
          <button type="button" class="btn blue_color_bg ">Confirm</button>
        </div>
      </div>    
        </form>
        
              
      
      
    </div>
  </div>
</div>



</div>
 
  
@include('front.footer')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
