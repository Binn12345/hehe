@extends('layouts.app')

@section('content')


@include('layouts.outModal')
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
      <h1>Student Data</h1>
      <div class = " ">
        <form method="POST" action="{{route('import')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputFile">Import excel file</label>
                <input type="file" id="exampleInputFile" name="file" accept=".xlsx, .xls, .csv">
            </div>
        <input type="submit" class="btn btn-primary" value="Submit"/>
        </form>
    </div>  
      <div class = "pull-left" style="margin-top: 10px;
                                    margin-bottom: 10px;">                              
        
        <a class = "btn btn-success" href="{{ route('student.create') }}">Add New Data</a>
        <a class = "btn btn-danger" href="{{ route('student.getDataPDF') }}">Export as PDF</a>
        <a class = "btn btn-info" href="{{ route('student.getDataEXCEL')}}">Export as Excel</a>
        <a class = "btn btn" href="{{ route('student.getDataCSV')}}" style="color: white;
                                                                            background-color: rgb(86, 206, 246)">Export as CSV</a>
    </div>  
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Data</li>
      </ol>
    </section>
    <br>
    
<section class="content">
        <div class="box" style="margin-top: 10px;">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class ="table table-striped row">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Birthdate</th>          
                    <th>Birthplace</th> 
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>  
                    <th>Action</th>
                </tr>
            @foreach($students as $student)
                <tbody>
                    <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->Fullname}}</td>
                    <td>{{$student->Gender}}</td>
                    <td>{{$student->Birthdate}}</td>
                    <td>{{$student->Birthplace}}</td>
                    <td>{{$student->Contact}}</td>
                    <td>{{$student->Email}}</td>
                    <td>{{$student->Address}}</td>
                    <td>
                        <form method="POST" action="{{ route('student.destroy',$student->id) }}">
                            <a class="btn btn-primary" href="{{ route ('student.edit',$student->id) }}">EDIT</a>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                                <input type = "submit" class = "btn btn-danger delete user" value="Delete">
                        </form>
                    <td>
                    </tr>
                </tbody>
            @endforeach
            </table>
            </div>  
        </div>
    </section>
</div>  


@endsection