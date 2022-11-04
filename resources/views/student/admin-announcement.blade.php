@extends('layouts.app')

<title>
    BCP - Announcement     
</title>
@section('content')
    <div class="content-wrapper" >
        <section class="content-header">
            <div class="box box-info">
                <section class="content-header">
                    <div class="pad margin no-print">
                            <div class="callout callout-info" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              This page has been enhanced for adding annonuncement, 
                            </div>
                          </div>
              
            </section>
                <div class="box-header with-border">
                  <center>

                    <h3 class="box-title" style="
                  font-family:'Courier New', Courier, monospace;
                  font-size: 2rem;">Announcement</h3>

                  </center>

                  
                  
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
                  </div>

                  
                  
                  <section class="content" style="margin-top:30px;">
                    <div class="box" style="margin-top: 10px;">
                        <div class="box-header">
                            <h3 class="box-title">

                                
                                {{-- <a class="fa fa-bell" data-toggle="modal" data-target="#modal-Announcement" style="cursor: pointer"></a>   --}}
                                <button class="btn btn-primary"  data-toggle="modal" data-target="#modal-Announcement" >
                                    <i class="fa fa-bell"style="cursor: pointer;"></i>  &nbsp; Add new
                                </button>

                            </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" >
                            <div class="table-responsive-lg" >
                                <table class="table" style="font-size:10px;" >
                            <tr>
                                {{-- @php
                                dd($students);    
                                @endphp --}}
                                <th>Title</th>    
                                <th>Description</th>
                                <th>code_content</th>
                                <th>Image</th>
                                <th>Date Posted</th>
                                <th>Action</th>
                            </tr>
                        @if(!empty($announcements) && $announcements->count() )
                        @foreach($announcements as $announcement)
                            <tbody>
                                <tr>
                                <td>{{$announcement->title}}</td>
                                <td>{{$announcement->content}}</td>
                                <td>{{$announcement->code_content}}</td>
                                <td  style="font-size:5px;" >{{$announcement->image}}</td> 
                                <td>{{$announcement->created_at}}</td>
                               
                                <td>
                                     <form method="POST" action="{{ route('announcement.destroy',$announcement->id) }}"> 
                                      
                                         @csrf
                                        {{-- <a class="glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#modal-studentView"></a>&nbsp; --}}
                                        <a class="glyphicon glyphicon-pencil" href="{{ route ('announcement.edit',$announcement->id) }}" style="color: green;"></a>&nbsp;
                                        {{ csrf_field() }}
                                        <a class="glyphicon glyphicon-trash"data-toggle="modal" data-target="#modal-delAn" style="color: red;"></a>&nbsp;
                                        @include('confirm.modalConAnnounce')
                                        {{-- {{ method_field('DELETE') }}
                                        
                                            <input class="btn btn-danger" type ="submit"  value="Delete" >
                                            
                                            </input> --}}
                                           
            
                                    </form>
                                <td>
                                </tr>
                            </tbody>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="10">
                                    <div class="callout callout-danger" style="margin-top:10px;">
                                        
                    
                                    <center>
                                        <p>No data Found.</p>   
                                    </center>
                                </div>
                                </td> 
                            </tr>
                            @endif
                        </table>
                        </div>  
                    </div>
                </section>
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
