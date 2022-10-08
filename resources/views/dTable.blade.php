@extends('layouts.app')

@section('content')


@include('inc.sidebar')
<div class="content-wrapper" style="min-height: 902.75px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
      <h1>
        Student Data
      </h1>
      <div class = "row" align="left">
        <div class = "pull-right">
            <a class = "btn btn-success" href="{{ route('student.create') }}">Add New Data</a>
        </div>
    <div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Data</li>
      </ol>
    </section>
    <br>
    
<section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>BIRTHDATE</th>
                    <th>BIRTHPLACE</th> 
                    <th>CONTACT</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>  
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