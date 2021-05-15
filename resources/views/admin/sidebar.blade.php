    <!DOCTYPE html>
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Form </title>
	
	
	<link rel="stylesheet" href="{{asset('admin-css/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin-css/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin-css/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('admin-css/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('admin-css/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('admin-css/plugins/iCheck/all.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('admin-css/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('admin-css/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin-css/bower_components/select2/dist/css/select2.min.css')}}">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin-css/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin-css/dist/css/skins/_all-skins.min.css')}}">
    
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin-css/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    
    
	
	
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    
    <header class="main-header">
    <!-- Logo -->
    <a href="{{url('')}}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
    
    <!-- User Account: style can be found in dropdown.less -->
    <li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="{{asset('admin-css/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
    <span class="hidden-xs">
	Administrator
    </span>
    </a>
    <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
    <img src="{{asset('admin-css/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
    
    <p>
    Administrator
    <small>Admi Panel</small>
    </p>
    </li>
    <li class="user-footer">
    
    <div class="pull-left">
    <a href="{{url('admin/logout')}}" class="btn btn-default btn-flat">Logout</a>
    </div>
    </li>
    </ul>
    </li>
    <!-- Control Sidebar Toggle Button -->
    </ul>
    </div>
    </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
    <div class="pull-left image">
    <img src="{{asset('admin-css/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
    <p>Admin Panel</p>
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

    <li>
    <a href="{{url('admin/dashboard/')}}">
    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
    </li>
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Slider</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/add-slider/')}}"><i class="fa fa-circle-o"></i>Add Slider</a></li>
        <li><a href="{{url('admin/slider-list/')}}"><i class="fa fa-circle-o"></i>Slider List</a></li>
        </ul>
    </li>
    
    <!---<li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Top Services</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/add-service/')}}"><i class="fa fa-circle-o"></i>Add Service</a></li>
        <li><a href="{{url('admin/service-list/')}}"><i class="fa fa-circle-o"></i>Service List</a></li>
        </ul>
    </li>
	--->
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Specialists</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/add-specialists/')}}"><i class="fa fa-circle-o"></i>Add Specialists</a></li>
        <li><a href="{{url('admin/specialists-list/')}}"><i class="fa fa-circle-o"></i>Specialists List</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Doctors</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/add-doctors/')}}"><i class="fa fa-circle-o"></i>Add Doctors</a></li>    
        <li><a href="{{url('admin/doctors-list/')}}"><i class="fa fa-circle-o"></i>Doctors List</a></li>
        </ul>
    </li>
    
     <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Stores</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/stores-list/')}}"><i class="fa fa-circle-o"></i>Stores List</a></li>
        <li><a href="{{url('admin/stores-enquiry-list')}}"><i class="fa fa-circle-o"></i>Stores Enquiry  List</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Lab Test</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/add-labtest/')}}"><i class="fa fa-circle-o"></i>Add Lab Test</a></li>
        <li><a href="{{url('admin/labtest-list/')}}"><i class="fa fa-circle-o"></i>Lab Test List</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Pharmacy</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/add-pharmacy/')}}"><i class="fa fa-circle-o"></i>Add Pharmacy</a></li>
        <li><a href="{{url('admin/pharmacy-list/')}}"><i class="fa fa-circle-o"></i>Pharmacy List</a></li>
        </ul>
    </li>
	
	<li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Orders</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/order-list/')}}"><i class="fa fa-circle-o"></i>Order List</a></li>
        </ul>
    </li>
	
	<li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Doctor Enquiry</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/doctor-enquiry-list/')}}"><i class="fa fa-circle-o"></i>Enquiry List</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Users</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/users-list/')}}"><i class="fa fa-circle-o"></i>Users List</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Testimonial</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/add-testimonial/')}}"><i class="fa fa-circle-o"></i>Add Testimonial</a></li>
        <li><a href="{{url('admin/testimonial-list/')}}"><i class="fa fa-circle-o"></i>Testimonial List</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Blogs</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/add-blog/')}}"><i class="fa fa-circle-o"></i>Add Blog</a></li>
        <li><a href="{{url('admin/blog-list/')}}"><i class="fa fa-circle-o"></i>Blog List</a></li>
        </ul>
    </li>
    
     <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Coupons</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/add-coupon/')}}"><i class="fa fa-circle-o"></i>Add Coupon</a></li>
        <li><a href="{{url('admin/coupon-list/')}}"><i class="fa fa-circle-o"></i>Coupon List</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Seller</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('admin/seller-list/')}}"><i class="fa fa-circle-o"></i>Seller List</a></li>
        </ul>
    </li>
    
    </ul>
    </section>
    <!-- /.sidebar -->
    </aside>
