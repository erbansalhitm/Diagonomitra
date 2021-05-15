    @include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Seller Details
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Store Details</a></li>
    <li><a href="#">Store Details</a></li>
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
	
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <table class="table">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><img src="{{asset('front/stores/').'/'.$stores->image}}" width="100px"></td>
                <td>{{$stores->name}}</td>
                <td>{{$stores->mobile}}</td>
                <td>{{$stores->email}}</td>
            </tr>
            
        </table>
        
        <br>
        <label>Address: {{$stores->address}}</label>
        <hr/>
        <label>Pincode: {{$stores->pincode}}</label>
        <hr/>
        <label>Discription: {{$stores->discription}}</label>
    </div>
    
    
    </div>
    
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
    
   
    

    @include('admin.footer');
    
