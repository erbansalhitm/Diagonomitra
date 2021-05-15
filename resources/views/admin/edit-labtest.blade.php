    @include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Edit Lab Test
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Edit Lab Test</a></li>
    <li><a href="#">Edit Lab Test</a></li>
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
    <form role="form" method="POST" action ="{{ route('admin.labtest-edit',$labtest->id)}}" enctype="multipart/form-data">
    <div class="box-body">
	{{ csrf_field() }}

	    
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"  id="exampleInputname" name="name" placeholder="Enter  Name" value="{{$labtest->name}}" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Old Price</label>
    <input type="text" class="form-control"  id="exampleInputname" name="oldprice" placeholder="Enter Old Price" value="{{$labtest->oldprice}}" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">New Price</label>
    <input type="text" class="form-control"  id="exampleInputname" name="newprice" placeholder="Enter New Price" value="{{$labtest->newprice}}" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Discription</label>
    <textarea class="textarea"   name="discription" placeholder="Enter Discription"
    style="width: 100%; height: 108px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$labtest->discription}}</textarea>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control"  id="exampleInputname" name="image" placeholder="Enter Image">
    </div>
    
    <img src="{{asset('front/labtest/').'/'.$labtest->image}}" width="200px">
    

    
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
    
