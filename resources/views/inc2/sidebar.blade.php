<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            
            
            
            Vendetta
{{--               
                {{ Auth::user()->name }}
               --}}
             
          
          
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <ul class="sidebar-menu person" data-widget="tree">
        <li class="header">Navigation</li>  
          <li class="active treeview" style="height: auto;">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li class="active"><a href="{{route('student2.haha')}}"><i class="fa fa-circle-o"></i> #</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>#</a></li>
            </ul>
          </li>
          
          
      </ul>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Profile</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('student2.haha')}}">
          <i class="fa fa-pie-chart"></i>
          <span>Announcement</span>
        </a>
      </li> 
    </section>
    <!-- /.sidebar -->
  </aside>
  