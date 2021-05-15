

@include('admin.sidebar'); 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Coupon List
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('admin/coupon-list')}}">Coupon List</a></li>
     <li><a href="{{url('admin/coupon-list')}}">Coupon List</a></li>
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
                  <th>Code</th>
                  <th>Discount Amount</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($coupons as $coupon)
                <tr>
                  <td>{{$coupon->code}}</td>
                  <td>{{$coupon->amount}}</td>
                  <td>@if($coupon->status == '1'){{'Active'}}@elseif($coupon->status == '2'){{'Deactive'}}@elseif($coupon->status == '3'){{'Used'}}@endif</td>
                  <td>
                      <a href="{{ url('admin/coupon-edit/').'/'.$coupon->id."/"}}">Edit</a> | 
                      <a href="{{ url('admin/coupon-delete/').'/'.$coupon->id."/"}}">Delete</a> |
                      <a href="{{ url('admin/coupon-active/').'/'.$coupon->id."/"}}">Actice</a> |
                      <a href="{{ url('admin/coupon-deactive/').'/'.$coupon->id."/"}}">Deactive</a>
                  </td>
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
