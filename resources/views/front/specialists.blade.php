@include('front.header')

<style>

    .sub{
            background: #ba388f;
    }
    .search-wrap-1{
        /*background:#e7e7e7;*/
    box-shadow: 0 2px 20px 0 rgba(0,0,0,.1);
    }
    .search-property-1{
            padding: 8px 22px;
    }
    .form-group{
        width:24%;
        float: left;
        margin-bottom:0;
    }
    .search-property-1 input{
        border: none;
    border-radius: 0;
    border-right: 1px solid #cacaca;
    }
    .search-property-1 select{
        border: none;
    border-radius: 0;
    border-right: 1px solid #cacaca;
    }
    .w-bg{
        /*background:#777;*/
    }
    .w-bg span{
            float: left;
    padding-top: 6px;
    }
</style>

<div class="container">
  <div class="row mt-4">
      
      
      <div class="col-lg-12 col-md-12">
          <div>
              <div class="search-wrap-1 ftco-animate">
					<form action="#" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg-12">
		        			    <div class="w-bg">
		        			        
		        			        
		        			     <span>
		        			         <i class="fas fa-map-marked-alt"></i> 
		        			     </span>  
		        			     <div class="form-group">
		        			         
        		          				<div class="form-field">
        		          					
        				                <input type="text" class="form-control" placeholder="Search place">
        				              </div>
        			              </div>
        			             <div class="form-group">
		        					
		        					<div class="form-field">
    		          					<div class="select-wrap">
            		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
            		                      <select name="" id="" class="form-control">
            		                        <option value="">Search Speciality</option>
            		                        <option value="">Doctor Speciality</option>
            		                        <option value="">Doctor Speciality</option>
            		                        <option value="">Doctor Speciality</option>
            		                        <option value="">Doctor Speciality</option>
            		                        
            		                      </select>
            		                    </div>
        				            </div>
        				            
        			             </div>
        			             <div class="form-group">
		        					
		        					<div class="form-field">
		          					    <div class="icon"><span class="ion-ios-calendar"></span></div>
        				                <input type="text" class="form-control checkout_date" placeholder="Lookup with Doctor's Name">
        				             </div>
        			             </div>
        			             <div class="form-group">
		        					<div class="form-field">
				                    <input type="submit" value="Search" class="form-control btn btn-primary sub">
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
  
    <div class="row">
      
        @foreach($doctors as $doctor)
        
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-3">
        <div class="card doctor_details px-2 py-2">
          <div class="row">
            <div class="col-4 col-sm-3">
              <img src="{{asset('front/doctors/').'/'.$doctor->image}}">
            </div>
            <div class="col-8 col-sm-5 nopadding">
              <h6><b>{{$doctor->name}}</b></h6>
              <p class="f-12 mb-0">{{$doctor->specialists}}</p>
              <small>15 Years Experience Overall</small>
              <p class="blue_color_text">₹ 500 Consultation Fee at clinic</p>
            </div>
            <div class="col-12 col-sm-4">
              <a type="button" href="{{route('doctor-profile',$doctor->slug)}}" class="mt-2 blue_color_border bookappointment">Book Appointment</a>
            </div>
          </div>
        </div>
        </div>
        
        @endforeach
    
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
    