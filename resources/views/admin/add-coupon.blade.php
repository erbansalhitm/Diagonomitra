    @include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Add Coupon
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{url('admin/add-coupon')}}">Add Coupon</a></li>
    <li><a href="{{url('admin/add-coupon')}}">Add Coupon</a></li>
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
	
	@if(session('success'))
	<div class="alert alert-success">
	{{ session('success') }}
	</div>
	@elseif(session('error'))
	<div class="alert alert-danger">
	{{ session('error') }}
	</div>
	@endif
	
	@foreach($errors->all() as $error)
	<div class="alert alert-danger">
	{{$error}}
	</div>
	@endforeach
    
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action ="{{ url('admin/add-coupon') }}" enctype="multipart/form-data">
    <div class="box-body">
	{{ csrf_field() }}

	    
    <div class="form-group">
    <label for="exampleInputEmail1">Code</label>
    <input type="text" class="form-control"  id="exampleInputname" name="code" placeholder="Enter Code" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Discount Amount</label>
    <input type="text" class="form-control"  id="exampleInputname" name="amount" placeholder="Enter Discount Amount" required>
    </div>
    
    <!-- /.box-body -->
    
    <div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
    
    
    </div>
    
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
    
   
    

    @include('admin.footer');
    
