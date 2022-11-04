@extends('layouts.app')
<title>

        BCP - Announcement

</title>
@section('content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <div class="pad margin no-print">
                        <div class="callout callout-danger" style="margin-bottom: 0!important;">
                          <h4><i class="fa fa-info"></i> Note:</h4>
                          This page has been enhanced for announcement editing.
                        </div>
                      </div>
          
        </section>

      
        @php
                      
        $image = DB::table('announcement')->where('id',$announcement->id)->first();
        
        $images = explode('|', $image->image);
        @endphp
        <section class = "content"> 
                <div class = "row">

                 <div class = "col-xs-12" >
                       

                  <form action="{{route('announcement.update', $announcement)}}" enctype="multipart/form-data" method="POST">
                      @csrf
                      @method('PUT')
                        <div class="post" style="margin-left: 20px;">
                                                
                                <div class="user-block">
                                    <label >Recent Posted</label> 
                                    <img class="img-circle img-bordered-sm" src="../../../dist/img/avatar5.png" alt="user image">   
                                    <span class="username">   
                                      {{-- {{URL::to('images/'.Auth::user()->image)}}              --}}
                                      <a href="#">{{$announcement->actRole}}.</a>
                                      <a href="#" class="pull-right btn-box-tool"><i class=""></i></a>
                                    </span>
                                    <span class="description" style="margin-left: 10px;">Shared publicly - {{$announcement->created_at}}</span>
                                </div>
                                                
                               <div class="timeline-body">
                                  @foreach($images as $item)
                                    <img src="{{URL::to($item)}}" alt="..." class="margin" style="width:60px; height:60px;  ">       
                                  @endforeach
                                </div>  

                                <p style="margin-left:10px;">
                                   {{$announcement->content}}
                                </p>  
                        </div>
           
                        
                        <div class="col-xs-6">
                                
                                <input class="form-control input-lg" type="text" name="title" value="{{$announcement->title}}" placeholder="Title" style="font-family:'Courier New', Courier, monospace;
                                                                                                                                    height: 70px;" required>
                        
                        </div>
                        <div class="col-xs-6">
                                {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                                {{-- <div class="col-sm-10"> --}}
                                  <input class="form-control input-lg" type="file" name="images[]" accept="image/png, image/gif, image/jpeg"  multiple style="font-family:'Courier New', Courier, monospace;
                                                                                                                            height: 70px;">
                                {{-- </div> --}}
                              </div>
                        <div class="col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">     
                        
                        <textarea class="form-control input-lg" type="text" placeholder="Write a something" value="{{$announcement->content}}" name="content" style="font-family:'Courier New', Courier, monospace;
                                                                                    height: 200px;" required></textarea> 
                                      
                        </div>
                        <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary" style="margin-right: 20px;   width: 100%; padding-top: 15px; padding-bottom: 15px;">
                            Update
                        </button>
                        
                      
                        </div>
                  </form>
                </div>
                    
                       
                </div>
        </section>


</div>






@endsection