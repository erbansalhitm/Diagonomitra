    @include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
     Health Store Test
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Edit Health Store</a></li>
    <li><a href="#">Edit Health Store</a></li>
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
    <form role="form" method="POST" action ="{{ route('admin.healthstore-edit',$healthstore->id)}}" enctype="multipart/form-data">
    <div class="box-body">
	{{ csrf_field() }}

	    
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"  id="exampleInputname" name="name" placeholder="Enter  Name" value="{{$healthstore->name}}" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Old Price</label>
    <input type="text" class="form-control"  id="exampleInputname" name="oldprice" placeholder="Enter Old Price" value="{{$healthstore->oldprice}}" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">New Price</label>
    <input type="text" class="form-control"  id="exampleInputname" name="newprice" placeholder="Enter New Price" value="{{$healthstore->newprice}}" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control"  id="exampleInputname" name="image" placeholder="Enter Image">
    </div>
    
    <img src="{{asset('front/healthstore/').'/'.$healthstore->image}}" width="200px">
    

    
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
    
