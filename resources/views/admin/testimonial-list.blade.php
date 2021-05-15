@include('admin.sidebar'); 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Testimonials List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Testimonials</a></li>
        <li class="active">Testimonials List</li>
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
                  <th>Image</th>
                  <th>Name</th>
                  <th>Content</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($testimonials as $testimonial)
                <tr>
                  <td><img src="{{URL::asset('public/front/testimonials/').'/'.$testimonial->image}}" width="50px"></td>
                  <td>{{$testimonial->name}}</td>
                  <td>{{substr($testimonial->content,0,30)}}</td>
                  <td>
                      <a href="{{ url('admin/testimonial-delete/').'/'.$testimonial->id."/"}}">Delete</a> |
                      <a href="{{ url('admin/testimonial-edit/').'/'.$testimonial->id."/"}}">Edit</a>
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
