@include('admin.sidebar'); 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Enquiry List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Enquiry</a></li>
        <li class="active">Enquiry List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
				@if(session('success'))
				<div class="alert alert-success">
				{{ session('success') }}
				</div>
				@elseif(session('error'))
				<div class="alert alert-danger">
				{{ session('error') }}
				</div>
				@endif
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				<tr>
                    <th>Doctor Name</th>
                    <th>Customer Name</th>
                    <th>Consulting Mode</th>
                    <th>Date</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($enquiry as $enq)
					@php
						$doctor_detail = DB::table('doctors')->where('id',$enq->doctor_id)->first();
					@endphp
					<tr>
						<td>{{$doctor_detail->name ?? ''}}</td>
						<td>{{$enq->name}}</td>
						<td>{{$enq->mode}}</td>
						<td>{{$enq->date}}</td>
						<td>{{$enq->payment_status}}</td>
						<td><a href="{{route('admin.enquiry-details',$enq->id)}}" class="text-info">Details</a> | <a href="{{route('admin.delete-enquiry',$enq->id)}}" class="text-danger">Delete</a></td>
					</tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

 @include('admin.footer'); 
