

@include('admin.sidebar'); 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Doctors List
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('admin/doctors-list')}}">Doctors List</a></li>
     <li><a href="{{url('admin/doctors-list')}}">Doctors List</a></li>
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
                  <th>Specialists</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($doctors as $doctor)
                <tr>
                    <td><img src="{{asset('front/doctors/').'/'.$doctor->image}}" width="100px"></td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->specialists}}</td>
                    <td>
                        <input type="hidden" name="doctor_id" class="doctor_id" value="{{$doctor->id}}">
                        <select class="form-control status" name="status">
                        <option value="0" {{($doctor->status=='0')?'selected':''}}>Unapproved</option>
                        <option value="1" {{($doctor->status=='1')?'selected':''}}>Approved</option>
                        </select>
                    </td>
                  <td>
                      <a href="{{ url('admin/doctors-edit/').'/'.$doctor->id."/"}}">Edit</a> |
                      <a href="{{ url('admin/doctors-delete/').'/'.$doctor->id."/"}}">Delete</a>
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
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.status').on('change',function(){
                var status = $(this).val();
                var self= $(this);
                var doctor_id = self.closest('td').find('.doctor_id').val();
                    
                $.ajax({
                    type: 'GET',
                    url: "{{route('admin.update-doctor-status')}}",
                    data: {"status": status,"doctor_id":doctor_id},
                    success:function(res){
                    if(res) {
                            alert('done');
                        }
                    }
                })
            })
        })
    </script>

 @include('admin.footer'); 
