@extends('layouts.pdfSupport')

@section('content')
<div class = "container">
<div class = "row" >
        <div class ="pull-left">
            <center>
                <label style="font-size: 20px;">
                    Student Data
                </label>
            </center>   
         </div>
    
</div>
<hr style="
                            position: relative;
                            top: 5px;
                            border: none;
                            height: 3px;
                            /* background: black; */
                            margin-bottom: 10px;">
{{-- @if ($message = Session::get('success'))

    <div class ="alert alert-success">
        <p>{{ $message }}</p>
        
    </div>
    <br>
    <br>
@endif --}}
<table class ="table table-striped" id="customers">
    <tr>
        <th>#</th>
        <th>Email</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birthdate</th>
        <th>PNO</th>
        <th>Address</th> 
       
    </tr>

    @foreach($students as $student)
    <tbody>
        <tr>
          <td>{{$student->user_id}}</td>
          <td>{{$student->email}}</td>
          <td>{{$student->Fullname}}</td>
          <td>{{$student->gender}}</td>
          <td>{{$student->Birthdate}}</td>
          <td>{{$student->Contact}}</td>    
          <td>{{$student->Address}}</td>    

          
        </tr>
      </tbody>
    @endforeach
</table>

@endsection

