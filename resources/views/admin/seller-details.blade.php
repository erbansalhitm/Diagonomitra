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
    <li><a href="#">Seller Details</a></li>
    <li><a href="#">Seller Details</a></li>
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
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>State</th>
                <th>City</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>{{$seller->name}}</td>
                <td>{{$seller->mobile}}</td>
                <td>{{$seller->email}}</td>
                <td>{{$seller->state}}</td>
                <td>{{$seller->city}}</td>
                <td>{{$seller->address}}</td>
            </tr>
            
        </table>
        
        <br>
        <label>Discription: {{$seller->discription}}</label>
    </div>
    
    
    </div>
    
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
    
   
    

    @include('admin.footer');
    
