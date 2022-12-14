@extends('layouts.app')
<title>BCP - Student Data</title>
@section('content')


@include('layouts.outModal')
<div class="content-wrapper"  style="font-size:10px;
font-family:'Times New Roman', Times, serif" >
    <!-- Content Header (Page header) -->
    <section class="content-header" >
        
      <h1>Student Data</h1>
      <div class = " ">
        <form method="POST" action="{{route('imports')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputFile">Import excel file</label>
                <input type="file" id="exampleInputFile" name="file" accept=".xlsx, .xls, .csv">
            </div>
            <input type="submit" class="btn btn-primary" value="Import"/>
        </form>
    </div>  
      <div class = "pull-left" style="margin-top: 20px;
                                    margin-bottom: 50px;">                              
        
        <a class = "btn btn-primary" href ="{{ route('stdReg') }}"><span class="glyphicon glyphicon-user"></span>&nbsp;Add New Data</a>
        <a class = "btn btn-danger" href="{{ route('student.getDataPDF') }}"><span class="glyphicon glyphicon-download"></span>&nbsp;Generate PDF</a>
        <a class = "btn btn-info" href="{{ route('student.getDataEXCEL')}}"><span class="glyphicon glyphicon-export"></span>&nbsp;Export Excel</a>
        <a class = "btn btn-success" href="{{ route('student.getDataCSV')}}"><span class="glyphicon glyphicon-export"></span>&nbsp;Export CSV</a>
    </div>  
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Data</li>
      </ol> --}}
    </section>
    <br>
    
<section class="content" style="margin-top:40px;">
        <div class="box" style="margin-top: 40px;">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive-lg" style="margin-bottom: 50px;">
                    <table class="table">   
                <tr>
                    {{-- @php
                    dd($students);    
                    @endphp --}}

                    <th>ID</th>
                    <th>SNO</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Role</th>  
                    <th>Action</th>
                </tr>
            @if(!empty($students) && $students->count()) 
            @foreach($students as $student)
                <tbody>
                    <tr>
                    <td hidden>{{$student->key}}</td>
                    <td>{{$student->id}}</td>
                    <td>{{$student->student_no}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->role}}</td>
                   
                    <td>
                        <form method="POST" action="{{ route('DestroyStud', $student->id) }}" >
                            @csrf
                            <a class="glyphicon glyphicon-eye-open" href="{{ route ('view.profile',$student->id) }}"></a>&nbsp;
                            <a class="glyphicon glyphicon-pencil" href="{{ route ('student.edit',$student->id) }}" style="color: green;"></a>&nbsp;
                            {{ csrf_field() }}
                            
                            {{-- {{ method_field('DELETE') }} --}}
                            <a class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#modal-Studentdel" style="color: red;" ></a>
                            @include('confirm.modalConfirm2')

                        </form>
                    <td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="10">
                    <div class="callout callout-danger" style="margin-top:15px; padding:40px">
                        
    
                    <center>
                        <p>No Student Records Found.</p>   
                    </center>
                  </div>
                </td> 
            </tr>
            @endif
                </tbody>
            
           
                
            </table>
            </div>  
        </div>
    </section>
</div>  


@endsection