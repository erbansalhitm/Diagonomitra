    @include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Add Lab Test
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{url('admin/add-labtest')}}">Add Lab Test</a></li>
    <li><a href="{{url('admin/add-labtest')}}">Add Lab Test</a></li>
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
    <form role="form" method="POST" action ="{{ url('admin/add-labtest') }}" enctype="multipart/form-data">
    <div class="box-body">
	{{ csrf_field() }}

	    
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"  id="exampleInputname" name="name" placeholder="Enter Name" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Old Price</label>
    <input type="text" class="form-control"  id="exampleInputname" name="oldprice" placeholder="Enter old price" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">New Price</label>
    <input type="text" class="form-control"  id="exampleInputname" name="newprice" placeholder="Enter new price" required>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
    <select class="form-control" name="labtestType" id="labTestType">
        <option value="">Select Type</option>
        <option value="Preventive Health Checkups">Preventive Health Checkups</option>
        <option value="Popular Health Package">Popular Health Package</option>
        <option value="both">Common</option>
    </select>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Discription</label>
    <textarea class="textarea"   name="discription" placeholder="Enter Discription"
    style="width: 100%; height: 108px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control"  id="exampleInputname" name="image" placeholder="Enter Image" style="border-color:rgb(221, 221, 221);">
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
    
