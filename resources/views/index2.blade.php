@extends('data')

@section('content')
    <nav class="navbar navbar-inverse" style="background-color:rgb(0, 0, 0);">
      <div class="container"> 
        
        <div class="navbar-header">
          <img src="https://bcp.edu.ph/images/logo50.png" alt="BCP" class="d-inline-block align-middle pt-2 pl-2">&nbsp;
        
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          {{-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">--/--/--</a></li>
              <li><a href="#">--/--/--</a></li>
              <li><a href="#">--/--/--</a></li>
            </ul>
          </li> --}}
          <li><a href="#">Courses</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('student.cre')}}" style="color: white;"><span class="glyphicon glyphicon-user"></span>&nbsp;Register Online</a></li>
          <li><a data-toggle="modal" data-target="#modal-default"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
        </ul> 
      </div>
    </nav>


    <div class="container" style="margin-top: 15vh;">
        <div class="justify-content-center">
            <div class="col-lg-12">

                {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Launch Default Modal
                </button> --}}
              <div class="modal fade" id="modal-default" style="margin-top: 5vh;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        
                      <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                        @csrf
                        <div class="box-body">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail3" name="email"placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label" >Password</label>
          
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword3" name="password"  placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    @guest
                                      @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="float: right;">
                                            {{ __('I forgot my Password') }}
                                        </a>
                                      @endif  
                                    @endguest
                                </div>      
                                
                            </div>
                          </div>
                         
                        </div>
                        <!-- /.box-body -->
                        
                              {{-- <div class="box-footer">
                            
                              <button type="submit" class="btn btn-primary" style="margin-right: 20px;  float: right; width: 96%; padding-top: 15px; padding-bottom: 15px;">
                                  {{ __('Login') }}
                              </button>
                              
          
                              
                              </div> --}}
                            
                        <!-- /.box-footer -->
                      




                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" style="margin-right: 15px;  float: right; width: 96%; padding-top: 15px; padding-bottom: 15px;">
                        {{ __('Login') }}
                     </button> 
                    </div>
                  </form>
                  </div>
                  <!-- /.modal-content -->
                </div>

              {{-- <a type="button" href="{{route('login')}}" class="btn btn-primary btn-block" style="margin-top: 20vh;
                color: rgb(249, 247, 247);   padding-top: 20px;
                padding-bottom: 20px;
                font-size: 2rem;
                text-align: center;
                text-decoration: none;
                font-weight: bold;
                font-size: 20px;
                font-family: sans-serif, arial;
                ">Access to Login</a>
                 --}}

            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@if ($message = Session::get('success'))

    <script>
      swal("Account!","{!!Session::get('success')!!}","success",{button:"OK",});
    </script>

@endif

















{{-- <div class = "row" >
        <div class ="pull-left">
            <label style="font-size: 20px;">
                Student Data
            </label>
         </div>
    
</div>
   
    <div class = "row">
        <form method="POST" action="{{route('import')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputFile">Import excel file</label>
                <input type="file" id="exampleInputFile" name="file" accept=".xlsx, .xls, .csv">
            </div>
        <input type="submit" class="btn btn-primary" value="Submit"/>
        </form>
    </div>  
</div>
    <div class = "pull-left" style="margin-top: 10px;
                                    margin-bottom: 10px;">                              
        
        <a class = "btn btn-success" href="{{ route('student.create') }}">Add New Data</a>
        <a class = "btn btn-danger" href="{{ route('student.getDataPDF') }}">Export as PDF</a>
        <a class = "btn btn-info" href="{{ route('student.getDataEXCEL')}}">Export as Excel</a>
        <a class = "btn btn" href="{{ route('student.getDataCSV')}}" style="color: white;
                                                                            background-color: rgb(86, 206, 246)">Export as CSV</a>
    </div>  

<br>
<br>
@if ($message = Session::get('success'))

    <div class ="alert alert-success">
        <p>{{ $message }}</p>
        
    </div>
    <br>
    <br>
@endif
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
</table> --}}

@endsection
