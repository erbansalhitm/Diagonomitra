    @php
	
		$store_detail = DB::table('stores')->where('id',$enquiry->store_id)->first();
	@endphp
	
	
	@include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Store Enquiry Details
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Store Enquiry Details</a></li>
    <li><a href="#">Store Enquiry Details</a></li>
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

                <th>Store Name</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Contact</th>
            </tr>
            <tr>
                <td>{{$store_detail->name ?? ''}}</td>
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
    
    
    </div>
    
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
    
   
    

    @include('admin.footer');
    
