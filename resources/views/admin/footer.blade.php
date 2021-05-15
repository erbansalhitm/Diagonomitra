 <!-- /.content-wrapper -->
  <footer class="main-footer">

    <strong>Copyright &copy; 2018 <a href="http://arrowinfosystem.com">AIS</a>.</strong> All rights
    reserved.
  </footer>

 
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{asset('admin-css/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin-css/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('admin-css/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('admin-css/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('admin-css/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('admin-css/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('admin-css/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin-css/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('admin-css/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('admin-css/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('admin-css/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('admin-css/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin-css/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-css/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-css/dist/js/demo.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('admin-css/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin-css/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin-css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('admin-css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

<script>
$(function () {

    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })

  $(function () {

	  
$('.textarea').wysihtml5({
      toolbar: { fa: true }
    })

  })
  $(document).ready(function() {
    $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 'excel','print',
            
			
        ],
        select: true
    } );
} );

</script>

<style>
.unpublish{background: #f13131!important;color: #fff;font-size: 16px;}
.publish{background: #069e0b!important;color: #fff;font-size: 16px;}
.publish a {color: #fff;font-size: 16px;}
.unpublish a {color: #fff;font-size: 16px;}
</style>



</body>
</html>
