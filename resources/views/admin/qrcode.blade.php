    @include('admin.sidebar');
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Store Details
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
		
		<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{urldecode($url)}}&choe=UTF-8" title="{{urldecode($url)}}" />
		
    </div>
    
    
    </div>
    
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
    
   
    

    @include('admin.footer');
    
