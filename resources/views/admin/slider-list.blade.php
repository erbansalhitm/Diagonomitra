@include('admin.sidebar'); 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        slider List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">slider</a></li>
        <li class="active">slider List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
				@if(session('success'))
				<div class="alert alert-success">
				{{ session('success') }}
				</div>
				@elseif(session('error'))
				<div class="alert alert-danger">
				{{ session('error') }}
				</div>
				@endif
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Slider Image</th>
                  <th>Slider Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)
                <tr>
                  <td><img src="{{URL::asset('public/front/slider/').'/'.$slider->sliderImage}}" width="100px"></td>
                  <td>@if($slider->status == 1){{"Publish"}}@elseif($slider->status == 0){{"Unpublish"}}@endif</td>
                  <td>
                      <a href="{{ url('admin/slider-delete/').'/'.$slider->id."/"}}">Delete</a>|
                      <a href="{{ url('admin/slider-publish/').'/'.$slider->id."/"}}">Publish</a> | 
                      <a href="{{ url('admin/slider-unpublish/').'/'.$slider->id."/"}}">Unpublish</a>
                  </td>
                </tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

 @include('admin.footer'); 
