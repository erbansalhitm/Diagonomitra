<div class="col-sm-3">
  <div class="card px-3 py-3">
    <p class="mb-0"><img class="profileicons" src="{{asset('front/doctors').'/'.$doctor->image}}"> {{$doctor->name}}</p>
  </div>
  <div class="card py-3 mt-2">
    <a class="light_color_text px-3" href="{{route('doctor.enquiry')}}"> <img class="smallicons" src="{{asset('front')}}/images/box.svg"> Enquiry <span class="float-right"><img src="{{asset('front')}}/images/arrow_right.svg"></span></a>
    <hr>
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <label class="light_color_text px-3"><img class="smallicons" src="{{asset('front')}}/images/account.svg"> Account Settings</label>
      <a class="nav-link profile_patient active pl-5 pr-0" href="{{route('doctor.dashboard')}}" >Personal Information</a>
     
    </div>
    <hr>
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <label class="light_color_text px-3"><img class="smallicons" src="{{asset('front')}}/images/account.svg"> Booking Slot</label>
      <a class="nav-link profile_patient active pl-5 pr-0" href="{{route('doctor.add-slot')}}" >Add Slot</a>
      <a class="nav-link profile_patient active pl-5 pr-0" href="{{route('doctor.slot-list')}}" >Slot List</a>
     
    </div>
    <a class="py-3 px-3 light_color_text" href="{{route('doctor.logout')}}"><img class="smallicons" src="{{asset('front')}}/images/logout.svg"> Logout</a>
  </div>
</div>