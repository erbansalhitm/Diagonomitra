

@include('admin.sidebar'); 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Health Store List
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('admin/healthstore-list')}}">Health Store List</a></li>
     <li><a href="{{url('admin/healthstore-list')}}">Health Store List</a></li>
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
                  <th>Old Price</th>
                  <th>New Price</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($healthstores as $healthstore)
                <tr>
                  <td><img src="{{asset('front/healthstore/').'/'.$healthstore->image}}" width="100px"></td>
                  <td>{{$healthstore->name}}</td>
                  <td>{{$healthstore->oldprice}}</td>
                  <td>{{$healthstore->newprice}}</td>
                  <td>
                      <a href="{{ url('admin/healthstore-edit/').'/'.$healthstore->id."/"}}">Edit</a> | 
                      <a href="{{ url('admin/healthstore-delete/').'/'.$healthstore->id."/"}}">Delete</a>
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
