@extends('layouts.index')
<title>
  BCP - Announcement
</title>
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Announcements
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Announcements</li>
      </ol>
      
    </section>
    {{-- main content --}}
    @php
                      
    $announcements = DB::table('announcement')->get();
 
    @endphp
    
    {{-- <img src ="{{URL::to($item)}}" style="height:10%; width:10%;" alt=""> --}}
    
    
    <section class = "content"> 
      <div class = "row">
        <div class="col-md-1"></div>
        <div class="col-md-10" style="margin-top:25px;">
          <div class="box box-solid">
            
            
            <!-- /.box-header -->
            @if(!empty($announcements) && $announcements->count()) 
            @foreach ($announcements as $image)
                @php
                        $images = explode('|', $image->image); 
                @endphp
              <br>
              
                <div class="box-body">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      {{-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1" class=" "></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li> --}}
                     
                      @foreach ($images as $key => $item)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="{{$key==0 ? 'active' : ''}}"></li>
                      @endforeach
                    </ol>
                     
                    <div class="carousel-inner">
                      @foreach($images as $key => $item)
                      <div class="item {{ $key == 0 ? 'active' : ''}}">

                        <center><img src ="{{URL::to($item)}}"></center>
                       
                      </div>

                      @endforeach
                      </div>
                      
                    </div>
                    <br>

                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/avatar5.png" alt="user image">
                            <span class="username">
                              <a href="#">{{$image->actRole}}.</a>
                              <a href="#" class="pull-right btn-box-tool"><i class="f"></i></a>
                            </span>
                        <span class="description">Shared publicly - {{$image->created_at}}</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$image->content}}
                      </p>
                      <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                        </li>
                        <li class="pull-right">
                          <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                            </a></li>
                      </ul>

                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div>
                  </div>
            @endforeach
            @else
            <div class="callout callout-danger" style="margin-top:100px; padding: 50px;">
                        
    
             
                  <p>There are no more announcements to show right now  .</p>   
              </center>
            </div>
            @endif
            </div>
               
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-1">
          
        </div>

      </div>
      
    </section>
   
  </div>
@endsection

  {{-- @php
                      
      $image = DB::table('announcement')->where('id',41)->first();
      $images = explode('|', $image->image);  
  @endphp
  @foreach($images as $item)
    <img src ="{{URL::to($item)}}" style="height:10%; width:10%;" alt="">
    <br>
   --}}