@extends('layouts.app')

<title>
    BCP - Audit Trail
</title>
@section('content')
    {{-- <section class="content-header">
        <h1>
        Data Tables
        <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
        </ol>
    </section> --}}

<div class = "content-wrapper" style="font-size: 10px;">
    <section class="content-header"style="font-size: 10px;">
        <div class="row">
          <div class="col-xs-12">
            
  
            <div class="box">
 
              <div class="box-body" style="font-size: 10px;">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr style="font-size: 10px;">
                    <th>Actor</th>
                    <th>State</th>
                    <th>Role</th>
                    <th>Last Access</th>
                    
                  </tr>
                  </thead>
                  @foreach($students as $student)
                        <tbody style="font-size: 10px;">
                            <tr>
                                <td>{{$student->actor}}</td>
                                <td>{{$student->state}}</td>
                                <td>{{$student->role}}</td>
                                {{-- <td>{{$student->ip_address}}</td> --}}
                                <td>{{$student->created_at}}</td>
                            </tr>
                        </tbody>
                    @endforeach 
                </table>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->actor}}</td>
                        <td>{{$student->state}}</td>
                        <td>{{$student->role}}</td>
                        <td>{{$student->created_at}}</td>
                    </tr>
                @endforeach 
            </tbody>
            <tfoot>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div> --}}
</div>
@endsection



{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready( function () {
        $('#audit_unique').DataTable();
    } );
</script> --}}
{{-- 
<section class="content">
    <div class="box" style="margin-top: 10px;">
        <div class="box-header">
            <h3 class="box-title"></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="margin-left:20px;">
            <div class="table-responsive-lg">
                <table class="table" id="audit_unique">
                    <tr>
                        <th>Actor</th>
                        <th>State</th>
                        <th>Role</th>
                        <th>Last Access</th>
                    </tr>
                    @foreach($students as $student)
                        <tbody>
                            <tr>
                                <td>{{$student->actor}}</td>
                                <td>{{$student->state}}</td>
                                <td>{{$student->role}}</td>
                                <td>{{$student->created_at}}</td>
                            </tr>
                        </tbody>
                    @endforeach 
                </table>
    </div>
        </div>  
    </div>
</section> --}}