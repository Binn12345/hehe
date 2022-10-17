@extends('layouts.app')

<title>
    BCP - logs
</title>
@section('content')
    <div class="content-wrapper">


      <section class="content">
        <div class="box" style="margin-top: 10px;">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="margin-left:20px;">
                <table class ="table table-striped row">
                <tr>
                    <th>Actor</th>
                    <th>State</th>
                    <th>Access</th>
                </tr>
            {{-- @foreach($students as $student)
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
                    </tr>
                </tbody>
            @endforeach  --}}
            </table>
            </div>  
        </div>
    </section>
</div>   
    </div>
    
@endsection
