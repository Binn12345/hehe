<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" >
    <!-- Sidebar user panel -->
    {{-- <div class="user-panel">
      <div class="pull-left image">
        <img src="../../../dist/img/avatar5.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div> --}}
    <!-- search form -->
    {{-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> --}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree" style="font-size: 10px;">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" >
          <li class="active" ><a href="{{Route('home')}}"><i class="fa fa-circle-o"></i>Overview</a></li>
          <li><a href="{{Route('dash.chart')}}"><i class="fa fa-circle-o"></i>Statistic</a></li>
        </ul>
      </li>
      
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-bell" style="color:rgb(192, 201, 71);"></i>  
          <span>Announcement</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a data-toggle="modal" data-target="#modal-Announcement" style="cursor: pointer"><i class="fa fa-circle-o"></i>Create Announcement</a></li>
          <li><a href="{{route('admin.announce')}}"><i class="fa fa-circle-o"></i>Posted</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-user"></i> <span>Accounts</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a data-toggle="modal" data-target="#modal-CREATE" style="cursor: pointer"><i class="fa fa-circle-o"></i>Create</a></li>
          <li><a href="{{route('dataResource')}}"><i class="fa fa-circle-o"></i> Data</a></li>
        </ul>
      </li>
      <li>
        <a href="{{ route('student.sTable') }}">
          <i class="glyphicon glyphicon-user" style="color:rgb(75, 132, 255);"></i> <span>Student Profile</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-orange"></small>
          </span>
        </a>
      </li>
      
    
      
      <li>
        <a href="{{route('logs')}}">
          <i class="glyphicon glyphicon-align-left" style="color:rgb(241, 118, 90);"></i> <span>Audit Trail</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-red"></small>
            <small class="label pull-right bg-blue"></small>
          </span>
        </a>
      </li>
      
      
    
     
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>