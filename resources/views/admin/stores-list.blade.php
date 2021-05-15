

@include('admin.sidebar'); 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stores List
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('admin/stores-list')}}">Stores List</a></li>
     <li><a href="{{url('admin/stores-list')}}">Stores List</a></li>
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
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($stores as $store)
                <tr>
                    <td><img src="{{asset('front/stores/').'/'.$store->image}}" width="100px"></td>
                    <td>{{$store->name}}</td>
                    <td>{{$store->mobile}}</td>
                    <td>{{$store->email}}</td>
                    <td>
                        <input type="hidden" name="store_id" class="store_id" value="{{$store->id}}">
                        <select class="form-control status" name="status">
                        <option value="0" {{($store->status=='0')?'selected':''}}>Unapproved</option>
                        <option value="1" {{($store->status=='1')?'selected':''}}>Approved</option>
                        </select>
                    </td>
                  <td>
                      <a href="{{ url('admin/stores-view/').'/'.$store->id."/"}}">View</a> |
                      <a href="{{ url('admin/qrcode-view/').'/'.$store->id."/"}}">QR Code</a> |
                      <a href="{{ url('admin/stores-delete/').'/'.$store->id."/"}}">Delete</a>
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
                var store_id = self.closest('td').find('.store_id').val();
                    
                $.ajax({
                    type: 'GET',
                    url: "{{route('admin.update-store-status')}}",
                    data: {"status": status,"store_id":store_id},
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
