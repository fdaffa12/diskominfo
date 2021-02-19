<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DASHBOARD | DISKOMINFO SUBANG</title>
  <link rel="icon" href="{{asset('public/images/logdis.png')}}" type="image/png">
	<link rel="stylesheet" type="text/css" href="{{url('public/admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/admin/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/admin/css/ionicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/admin/css/menu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/admin/css/adminstyle.css')}}">	
  <script type="text/javascript" src="{{url('public/admin/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{url('public/admin/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{url('public/admin/js/app.min.js')}}"></script>
  <script type="text/javascript" src="{{url('public/admin/js/script.js')}}"></script>
  </head>
<body>

<div class="sidebar">
	<ul class="sidebar-menu">
		<li><a href="{{url('web-admin')}}" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		<li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Posts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-post')}}"><i class="fa fa-eye"></i>All Posts</a></li>
              <li><a href="{{url('add-post')}}"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
              <li><a href="{{url('viewcategory')}}"><i class="fa fa-plus-circle"></i>Categories</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Pages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-pages')}}"><i class="fa fa-eye"></i>All Pages</a></li>
              <li><a href="{{url('add-page')}}"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-desktop"></i> <span>Application</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-app')}}"><i class="fa fa-eye"></i>All App</a></li>
              <li><a href="{{url('add-app')}}"><i class="fa fa-plus-circle"></i>Add App</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-image"></i> <span>Gallery</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-sliders')}}"><i class="fa fa-eye"></i>All Gallery</a></li>
              <li><a href="{{url('add-slider')}}"><i class="fa fa-plus-circle"></i>Add Gallery</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-image"></i> <span>Advertisements</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-advs')}}"><i class="fa fa-eye"></i>All Advertisements</a></li>
              <li><a href="{{url('add-adv')}}"><i class="fa fa-plus-circle"></i>Add Advertisements</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="{{url('messages')}}">
              <i class="fa fa-envelope"></i> <span>Messages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>            
        </li>       
        <li class="treeview">
            <a href="{{url('settings')}}">
              <i class="fa fa-gear"></i> <span>Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>            
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-address-book"></i> <span>{{Auth::user()->name}}</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('register')}}"><i class="fa fa-user"></i>Add New User</a></li>
              <li><a href="{{url('logout')}}"><i class="fa fa-power-off"></i>Log Out</a></li>
            </ul>
        </li>		
	</ul>
</div>

@yield('content')

<footer>
  <div class="col-sm-6">
    
  </div>
  <div class="col-sm-6">
    <span class="pull-right">Version 2.2.3</span>
  </div>
</footer>


</body>
</html>