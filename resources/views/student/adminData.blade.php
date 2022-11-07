@extends('layouts.app')

<title>
    BCP - Data Resources        
</title>
@section('content')
    <div class="content-wrapper" >
          
        <section class="content-header">
          
            <div class="box box-info">
                <div class="box-header with-border">
                  <center>

                    <h3 class="box-title" style="
                  font-family:'Courier New', Courier, monospace;
                  font-size: 2rem;">Admin accounts</h3>

                  </center>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    
                    {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
                  </div>
                
                </div>
                <div class="box-body">
                  <div class = "pull-left" style="margin-top: 20px;
                                    margin-bottom: 50px;">                              
        
        <a class = "btn btn-primary" data-toggle="modal" data-target="#modal-CREATE" ><span class="glyphicon glyphicon-user"></span>&nbsp; Add New Data</a>
          </div>
                  <div class="table-responsive-lg">
                    <table class="table" style="font-size:10px;
                                                font-family:'Times New Roman', Times, serif">
                <tr>
                    {{-- <th>ID</th> --}}
                    <th>AD#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Role</th>  
                    <th>Action</th>
                </tr>
                {{-- @php
                dd($admins);
                @endphp --}}
            @if(!empty($admins) && $admins->count() )
            @foreach($admins as $admin)
                <tbody>
                    <tr>
                    {{-- <td>{{$admin->id}}</td> --}}
                    <td hidden>{{$admin->key}}</td>
                    <td>{{$admin->user_id}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->gender}}</td>
                    <td>{{$admin->role}}</td>
                    <td>
                        <form method="POST" action="{{route('admin.DestroyAdminAccount', $admin->id) }}">
                            @csrf
                            <a class="glyphicon glyphicon-eye-open" href="{{ route ('view.profileAdmin',$admin->id) }}"></a>&nbsp;
                            <a class="glyphicon glyphicon-pencil" href="{{ route ('admin.edit',$admin->id) }}" style="color: green;"></a>&nbsp;
                            {{ csrf_field() }}
                            
                            {{-- {{ method_field('DELETE') }} --}}
                            <a class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#modal-del" style="color: red;" ></a>
                            @include('confirm.modalConfirm')
                            
                                {{-- <input class="glyphicon glyphicon-trash" type ="submit" value="Delete" style="color: red"></a> --}}

                        </form>
                    <td>
                    </tr>


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
                </tbody>
            
            </table>
            </div> 
                  <div class="chart">
                    <canvas id="lineChart" style="height:250px"></canvas>
                  </div>
                  



                </div>

                    



              </div>
        </section>
    </div>
    
@endsection
{{-- {!! $admins->links() !!} --}}