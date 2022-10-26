@extends('layouts.app')

<title>
    BCP - Announcement     
</title>
@section('content')
    <div class="content-wrapper" >
        <section class="content-header">
            <div class="box box-info">
                <div class="box-header with-border">
                  <center>

                    <h3 class="box-title" style="
                  font-family:'Courier New', Courier, monospace;
                  font-size: 2rem;">Announcement</h3>

                  </center>

                  @php
                      
                      $image = DB::table('announcement')->where('id',32)->first();
                      $images = explode('|', $image->image);
                  @endphp
                  @foreach($images as $item)
                    <img src ="{{URL::to($item)}}" style="height:60%; width:60%;" alt="">
                    <br>
                  @endforeach
                  
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="lineChart" style="height:250px"></canvas>
                  </div>
                </div>

                    



              </div>
        </section>
    </div>
    
@endsection
