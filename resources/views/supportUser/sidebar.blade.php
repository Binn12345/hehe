

<aside class="main-sidebar" style="font-size:12px;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    {{-- <div class="user-panel">
      <div class="pull-left image">
        <img src="../../../dist/img/avatar5.png" class="img-circle" alt="User Image">
      </div>
  
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="{{Route('student')}}"><i class="fa fa-circle text-success"></i> Online</a>
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
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class=" treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('adm.dash')}}"><i class="fa fa-circle"></i> Overview</a></li>
        </ul>
      </li>

      <li>
        <a href="{{Route('userManage')}}">
          <i class="glyphicon glyphicon-home" style="color:rgb(111, 111, 255);"></i> <span>Home</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-blue">new</small>
          </span>
        </a>
      </li>

      {{-- <li>
        <a href="#">
          <i class="glyphicon glyphicon-bullhorn" style="color:rgb(192, 201, 71);"></i> <span>Announcement</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-blue">new</small>
          </span>
        </a>
      </li> --}}

      
      

      <li>
        <a href="{{Route('userCreate')}}">
          <i class="glyphicon glyphicon-plus-sign" style="color:rgb(156, 207, 255, 0.739);"></i> <span>Manage Accounts</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-blue">new</small>
          </span>
        </a>
      </li>

      <li>
        <a href="{{Route('adm.list')}}">
          <i class="glyphicon glyphicon-bookmark" style="color:rgb(255, 57, 39);"></i> <span>Users List</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-blue">new</small>
          </span>
        </a>
      </li> 
      
      <li class="header"><i class="glyphicon glyphicon-alert"></i> &nbsp; FAIR WARNING</li>
      <li>
        <a href="{{Route('readUs')}}">
          <i class="glyphicon glyphicon-exclamation-sign"></i> <span>ReadUs</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-blue">new</small>
          </span>
        </a>
      </li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>