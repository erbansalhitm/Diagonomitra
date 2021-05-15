
  @include('admin.sidebar');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Slider
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Slider</a></li>
        <li class="active">Add Slider</li>
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
			
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action ="{{url('admin/add-slider')}}" enctype="multipart/form-data">
              <div class="box-body">
			  
				@csrf()
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Slider Image</label>
                  <input type="file" class="form-control" id="exampleInputname" name="sliderImage" placeholder="Upload Slider" >
                </div>
    
				
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
