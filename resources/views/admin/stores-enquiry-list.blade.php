@include('admin.sidebar'); 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stores Enquiry List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Stores Enquiry</a></li>
        <li class="active">Stores Enquiry List</li>
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
                    <th>Store Name</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Contact</th>
                    <th>Action</th>
                    
                </tr>
                </thead>
                <tbody>
                @foreach($enquiry as $enq)
					@php
						$store_detail = DB::table('stores')->where('id',$enq->store_id)->first();
					@endphp
					<tr>
						<td>{{$store_detail->name ?? ''}}</td>
						<td>{{$enq->name}}</td>
						<td>{{$enq->email}}</td>
						<td>{{$enq->contact}}</td>
						<td><a href="{{ url('admin/stores-enquiry-details/').'/'.$enq->id."/"}}" >Details</a> | <a href="{{ url('admin/stores-enquiry-delete/').'/'.$enq->id."/"}}">Delete</a></td>
						
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
