 <div class="col-sm-3">
      <div class="card px-3 py-3">
        <p class="mb-0"><img class="profileicons" src="{{asset('front')}}/images/profile_pic.svg"> {{$user->name}}</p>
      </div>
      <div class="card py-3 mt-2">
        
        <a class="light_color_text px-3" href="{{route('user.booking-list')}}"> <img class="smallicons" src="{{asset('front')}}/images/box.svg"> Bookings <span class="float-right"><img src="{{asset('front')}}/images/arrow_right.svg"></span></a>
        <hr>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <label class="light_color_text px-3"><img class="smallicons" src="{{asset('front')}}/images/account.svg"> Account Settings</label>
          <a class="nav-link profile_patient active pl-5 pr-0" href="{{route('user.dashboard')}}" >Personal Information</a>
         
        </div>
        
        <a class="py-3 px-3 light_color_text" href="{{route('user.logout')}}"><img class="smallicons" src="{{asset('front')}}/images/logout.svg"> Logout</a>
      </div>
    </div>