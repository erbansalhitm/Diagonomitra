    @include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Edit Doctor
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Edit Doctor</a></li>
    <li><a href="#">Edit Doctor</a></li>
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
    <form role="form" method="POST" action ="{{ route('admin.doctors-edit',$doctor->id)}}" enctype="multipart/form-data">
    <div class="box-body">
	{{ csrf_field() }}

	<div class="form-group">
    <label for="exampleInputEmail1">Specialist</label>
    <select class="form-control"  id="exampleInputname" name="specialist" required>
        <option value="{{$doctor->specialists}}">{{$doctor->specialists}}</option>
		@foreach($specialists as $specialist)
		<option value="{{$specialist->name}}">{{$specialist->name}}</option>
		@endforeach
	</select>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"  id="exampleInputname" name="name" placeholder="Enter Doctor Name" value="{{$doctor->name}}" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control"  id="exampleInputname" name="mobile" placeholder="Enter Doctor Mobile" value="{{$doctor->mobile}}" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" class="form-control"  id="exampleInputname" name="password" placeholder="Enter Doctor Password" value="{{$doctor->password}}" required>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control"  id="exampleInputname" name="email" placeholder="Enter Doctor Email" value="{{$doctor->email}}" >
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Experience in Years</label>
    <input type="text" class="form-control"  id="exampleInputname" name="experience" placeholder="Enter Experience" value="{{$doctor->experience}}" >
    </div>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Fee</label>
    <input type="text" class="form-control"  id="exampleInputname" name="fee" placeholder="Enter Fee" value="{{$doctor->fee}}" required>
    </div>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control"  id="exampleInputname" name="address" placeholder="Enter Address" value="{{$doctor->address}}" >
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Pincode</label>
    <input type="text" class="form-control"  id="exampleInputname" name="pincode" placeholder="Enter Pincode" value="{{$doctor->pincode}}" >
    </div>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Timing</label>
    <input type="text" class="form-control"  id="exampleInputname" name="timing" placeholder="Enter Timing" value="{{$doctor->timing}}" >
    </div>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Qualifications</label>
    <input type="text" class="form-control"  id="exampleInputname" name="qualifications" placeholder="Enter Qualifications" value="{{$doctor->qualifications}}" >
    </div>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Memberships</label>
    <input type="text" class="form-control"  id="exampleInputname" name="memberships" placeholder="Enter Memberships" value="{{$doctor->memberships}}" >
    </div>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Awards</label>
    <input type="text" class="form-control"  id="exampleInputname" name="awards" placeholder="Enter Awards" value="{{$doctor->awards}}" >
    </div>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Professional Experience</label>
    <textarea class="textarea"   name="professional_experience" placeholder="Enter Professional Experience"
    style="width: 100%; height: 108px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$doctor->professional_experience}}</textarea>
    </div>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Discription</label>
    <textarea class="textarea"   name="discription" placeholder="Enter Discription"
    style="width: 100%; height: 108px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$doctor->discription}}</textarea>
    </div>

    
    <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control"  id="exampleInputname" name="image" placeholder="Enter Image">
    </div>
    
    <img src="{{asset('front/doctors/').'/'.$doctor->image}}" width="200px">
    

    
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
    
