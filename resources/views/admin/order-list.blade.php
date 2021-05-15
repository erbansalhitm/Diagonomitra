

@include('admin.sidebar'); 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Order List
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('admin/Order-list')}}">Order List</a></li>
     <li><a href="{{url('admin/Order-list')}}">Order List</a></li>
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
                  <th>Order Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Amount</th>
                  <th>Payment Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                <tr>
				  <td>{{$order->order_id}}</td>
                  <td>{{$order->billing_name}}</td>
                  <td>{{$order->billing_email}}</td>
                  <td>{{$order->total_amount}}</td>
                  <td>{{$order->payment_status}}</td>
                  <td><a href="{{url('admin/order-delete').'/'.$order->id}}">Delete</a></td>

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
