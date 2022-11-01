@extends('layouts.pdfSupport')

@section('content')
<div class = "container">
<div class = "row" >
    <link rel="icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon">
        <div class ="pull-left">
            <center>
                <label style="font-size: 2rem;">
                    Bestlink College of the Philippines
                </label>
                <br>
                <span>
                    #1071 Brgy. Kaligayahan, Quirino Hi-way, Novaliches, Quezon City, Philippines
                </span>
                <br>
                <br>
                <h1>   Student Data </h1>
            </center>   
         </div>
    
</div>
{{-- <hr style="
                            position: relative;
                            top: 5px;
                            border: none;
                            height: 3px;
                            /* background: black; */
                            margin-bottom: 10px;"> --}}
{{-- @if ($message = Session::get('success'))

    <div class ="alert alert-success">
        <p>{{ $message }}</p>
        
    </div>
    <br>
    <br>
@endif --}}
<hr>
<table class ="table table-striped" id="customers">
    <tr>
        <th>Stundent No.</th>
        <th>Username</th>
        <th>Email</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birthdate</th>
        <th>Birthplace</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Lastname</th> 
       
    </tr>

    @foreach($students as $student)
    <tbody>
        <tr>
          <td>{{$student->student_no}}</td>
          <td>{{$student->username}}</td>
          <td>{{$student->email}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->gender}}</td>
          <td>{{$student->birthdate}}</td>
          <td>{{$student->birthplace}}</td>
          <td>{{$student->contact}}</td>    
          <td>{{$student->address}}</td> 
          <td>{{$student->lastname}}</td>    

          
        </tr>
      </tbody>
    @endforeach
</table>

@endsection

