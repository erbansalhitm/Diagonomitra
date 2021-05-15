
@include('front.header')

<div class="container mt-3">
  <div class="row">
    @include('doctor.sidebar')
    <div class="col-sm-9">
      <div class="card px-3 py-3">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row">
            <div class="col-sm-6"><h5><b>Slot List</b></h5></div>
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    @if(session('msg'))
                        {!!session('msg')!!}
                    @endif
                    
                </div>
                
                
            </div>
            
             <table class="table">
                <thead>
                  <tr>
                    <th>Slot</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($slots as $slot)    
                  <tr>
                    <td>{{$slot->slot}}</td>
                    <td><a href="{{route('doctor.delete-slot',$slot->id)}}">Delete</a></td>
                  </tr>
                @endforeach
                </tbody>
              </table>    
            
        </div>
        
        </div>
        </div>
      </div>
    </div>
  </div>

  @include('front.footer')


