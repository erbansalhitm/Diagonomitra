    @php
	
		$doctor_detail = DB::table('doctors')->where('id',$enquiry->doctor_id)->first();
	@endphp
	
	
	@include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Enquiry Details
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Enquiry Details</a></li>
    <li><a href="#">Enquiry Details</a></li>
    </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
    <div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
    <div class="box-header with-border">
	
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <table class="table">
            <tr>
                <th>Booking Id</th>
                <th>Doctor Name</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Mobile</th>
            </tr>
            <tr>
                <td>{{$enquiry->booking_id}}</td>
                <td>{{$doctor_detail->name ?? ''}}</td>
                <td>{{$enquiry->name}}</td>
                <td>{{$enquiry->email}}</td>
                <td>{{$enquiry->mobile}}</td>
                
            </tr>
			
			<tr>
                <th>Consulting Mode </th>
                <th>Booking Date</th>
                <th>Booking Time</th>
                <th>Doctor Fee</th>
                <th>Payment Status</th>
            </tr>
            <tr>
                <td>{{$enquiry->mode}}</td>
                <td>{{$enquiry->date}}</td>
                <td>{{$enquiry->time}}</td>
                <td>{{$enquiry->fee}}</td>
                <td>{{$enquiry->payment_status}}</td>
            </tr>
            
        </table>
		<br/>
        @if($enquiry->prescription)
			<b>Prescription</b>
			<a href="{{asset('front/prescription').'/'.$enquiry->prescription}}" target="_blank" class="alert text-danger">View Now</a>
	   @endif
    </div>
    
    
    </div>
    
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
    
   
    

    @include('admin.footer');
    
