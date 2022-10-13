@extends('layouts.app')
  <title>
    BCP - Home
  </title>
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 

                    @include('inc.body')    
                </div>
                
            </div>
        </div>
    </div>
</div> --}}
    

  <!--/Main-->
  <div class="content-wrapper" >
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <br>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>0</h3>
                <p>Daily Student Apply</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
               <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>0   </h3>

              <p>Audit trail</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>         
      </div>
      {{-- cHART --}}
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Line Chart</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="lineChart" style="height:250px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
    </section>
    
@endsection
