
@extends('layouts.manage')

@section('content')


  <!--/Main-->
  

    
    <!-- Left side column. contains the logo and sidebar -->
 
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      {{-- <section class="content-header">
        <h1>
          Dashboard
          
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section> --}}
      <section class="content-header">
        <h1>
          Dashboard
          <small>Overview</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{Route('userManage')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <section class="content-header">
        <div class="row">
          <div class="col-lg-12">
            
  
            
            <div class="row">
                {{-- <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
        
                    <div class="info-box-content">
                      <span class="info-box-text">CPU Traffic</span>
                      <span class="info-box-number">90<small>%</small></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
        
                    <div class="info-box-content">
                      <span class="info-box-text">Likes</span>
                      <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div> --}}
                <!-- /.col -->
        
                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>
        
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="ion ion-ios-people-outline"></i></span>
        
                    <div class="info-box-content">
                      <span class="info-box-text">Daily Register Student</span>
                      <span class="info-box-number">--/--/--</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
        
                    <div class="info-box-content">
                      <span class="info-box-text">New Employee</span>
                      <span class="info-box-number">--/--/--</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                 <!-- /.col -->
                 <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-green"><i class="ion ion-ios-book-outline"></i></span>
          
                      <div class="info-box-content">
                        <span class="info-box-text">Reports</span> 
                        <span class="info-box-number">--/--/--</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->

              </div>
              <!-- /.box -->
            
          </div>
        </div>
    </section>
  

    </div>
   
    <div class="control-sidebar-bg"></div>
    </div>
    
@endsection