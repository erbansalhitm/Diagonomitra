
@include('front.header')

<div class="container mt-3">
  <div class="row">
    @include('doctor.sidebar')
    <div class="col-sm-9">
      <div class="card px-3 py-3">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row">
            <div class="col-sm-6"><h5><b>Add Slot</b></h5></div>
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    @if(session('msg'))
                        {!!session('msg')!!}
                    @endif
                    
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                    
                </div>
                
                
            </div>
            <form name="edit-profile" method="POST" action="{{route('doctor.add-slot')}}">
                {{csrf_field()}}
                <div class="form-row mt-2">
                
                <div class="form-group col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <label for="inputEmail4">Slot Time</label>
                    <input type="text" class="form-control" id="inputEmail4"  name="slot" required >
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


