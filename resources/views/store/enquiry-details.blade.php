
@include('front.header')

<div class="container mt-3">
  <div class="row">
    @include('store.sidebar')
    <div class="col-sm-9">
      <div class="card px-3 py-3">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row">
            <div class="col-sm-6"><h5><b>Enquiry Details</b></h5></div>     
            </div>
            <form>

                <div class="form-row mt-2">                  
                
                <table class="table">
            <tr>

                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Contact</th>
            </tr>
            <tr>
                <td>{{$enquiry->name}}</td>
                <td>{{$enquiry->email}}</td>
                <td>{{$enquiry->contact}}</td>
                
            </tr>
			
			<tr>

                <th>Alternate Contact</th>
                <th>Customer Address</th>
                <th>Date</th>
            </tr>
            <tr>
                <td>{{$enquiry->alternate_contact}}</td>
                <td>{{$enquiry->address}}</td>
                <td>{{$enquiry->created_at}}</td>
                
            </tr>
			
			
            
        </table>
            <br/>
			@if($enquiry->prescription)
				<b>Prescription</b>
				<a href="{{asset('front/prescription').'/'.$enquiry->prescription}}" target="_blank" class="alert text-danger">View Now</a>
		   @endif
                
                </div> 
            </form>
        </div>
        
        </div>
        </div>
      </div>
    </div>
  </div>

  @include('front.footer')


