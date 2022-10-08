@extends('data')

@section('content')
<div class = "row" >
        <div class ="pull-left">
            <label style="font-size: 20px;">
                Users Data
            </label>
         </div>
    
</div>

    <div class = "pull-left">
        
        <a class = "btn btn-success" href="{{ route('student.create') }}">Add New Data</a>
        <a class = "btn btn-danger" href="{{ route('student.create') }}">Export</a>
        {{-- <a class = "btn btn-info href="{{ route('i') }}">Add New Data</a> --}}
    </div>  


@if ($message = Session::get('success'))

    <div class ="alert alert-success">
        <p>{{ $message }}</p>
        
    </div>
    <br>
    <br>
@endif
<table class ="table table-striped"> 
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

@endsection
