    @include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Edit How It Work 
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{url('admin/edit-aboutus')}}">Edit How It Work</a></li>
    <li><a href="{{url('admin/edit-aboutus')}}">Edit How It Work</a></li>
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
    <form role="form" method="POST" action ="{{ url('admin/edit-aboutus') }}" enctype="multipart/form-data">
    <div class="box-body">
	{{ csrf_field() }}
	    
    <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control"  id="exampleInputname" name="title" placeholder="Enter title" value="{{$about->title}}">
    </div>
        
    <div class="form-group">
    <label for="exampleInputEmail1">Content</label>
    <textarea class="textarea"   name="content" placeholder="Enter Content"
    style="width: 100%; height: 108px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$about->content}}</textarea>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Before Image</label>
    <input type="file" class="form-control"  id="exampleInputname" name="bimage" placeholder="Enter Image"  >
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">After Image</label>
    <input type="file" class="form-control"  id="exampleInputname" name="aimage" placeholder="Enter Image"  >
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
    
