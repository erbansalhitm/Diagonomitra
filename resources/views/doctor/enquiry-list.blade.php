
@include('front.header')

<div class="container mt-3">
  <div class="row">
    @include('doctor.sidebar')
    <div class="col-sm-9">
      <div class="card px-3 py-3">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row">
            <div class="col-sm-6"><h5><b>Enquiry List</b></h5></div>
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    @if(session('msg'))
                        {!!session('msg')!!}
                    @endif
                    
                </div>
                
            </div>
            
             <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Consulting Mode</th>
                    <th>Date</th>
                    <th>Time Slot</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($enquiry as $enq)    
                  <tr>
                    <td>{{$enq->name}}</td>
                    <td>{{$enq->mobile}}</td>
                    <td>{{$enq->mode}}</td>
                    <td>{{$enq->date}}</td>
                    <td>{{$enq->time}}</td>
                    <td><a href="{{route('doctor.enquiry-details',$enq->id)}}" class="text-info">Details</a> | <a href="{{route('doctor.delete-enquiry',$enq->id)}}" class="text-danger">Delete</a></td>
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


