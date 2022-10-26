@extends('layouts.index')

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
        @php
                      
        $image = DB::table('announcement')->where('id',32)->first();
        $images = explode('|', $image->image);
    @endphp
    @foreach($images as $item)
      <img src ="{{URL::to($item)}}" style="height:60%; width:60%;" alt="">
      <br>
    @endforeach
      </ol>
    </section>
</div>
@endsection