@extends('layouts/app2')
<link rel="icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon">
<title>BCP - Registration</title>
<nav class="navbar navbar-inverse" style="background-color:rgb(0, 0, 0);">
  <div class="container"> 
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('bug')}}">BCP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('bug')}}">Home</a></li>
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
      <li><a href="{{route('student.cre')}}"><span class="glyphicon glyphicon-user"></span>&nbsp;Register</a></li>
      {{-- <li><a data-toggle="modal" data-target="#modal-default"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li> --}}
    </ul> 
  </div>
</nav>

@section('content') 
<div class="container" style="margin-top: 5vh;
                              margin-bottom:6vh">
    <div class="justify-content-center">
        <div class="col-lg-12">   
        
            <div class="box box-info">
                <div class="box-header with-border">
                  <br>
                  <h3 class="box-title" style="margin-left: 15px;
                  font-family:'Courier New', Courier, monospace;
                  font-size: 4rem;">Register an Account</h3>
                  <br><br>
                  
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{-- {{$errors}} --}}

                {{-- @if($errors->any())
                <div>
                  <ul style="list-style-type:none;">
                    @foreach($errors->all() as $err )
                    <li>
                      {{$err}}
                    </li>
                    @endforeach
                  </ul>
                </div>  
                @endif --}}
                @if($errors->any())
                  <div class="callout callout-danger">
                    <h4>ERROR!</h4>
    
                    <ul style="list-style-type:none;">
                      @foreach($errors->all() as $err )
                      <li>
                        {{$err}}
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                <form class="form-horizontal" action="{{route('student.store')}}" method="POST" id="contact_form">
                  @csrf
                  <div class="box-body">
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" name="lastname" id="lname" placeholder="Lastname" style="font-family:'Courier New', Courier, monospace;" required>
                        {{-- <h5 id="userLname" style="color: red;">
                          **lastname is missing
                        </h5> --}}
                      {{-- </div> --}}
                    </div>
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" name="firstname" placeholder="Firstname" style="font-family:'Courier New', Courier, monospace;" required>
                      {{--   --}}
                    </div>
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" name="middlename" placeholder="Middlename / Optional" style="font-family:'Courier New', Courier, monospace;" required>
                    {{--   --}}
                    </div>
                    

                    <div class="col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">      
                      <textarea class="form-control" placeholder="Present Address" name="address"style="font-family:'Courier New', Courier, monospace;" required></textarea>
                    </div>
                    {{-- age based on datepicker --}}
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" name="age" placeholder="99" style="font-family:'Courier New', Courier, monospace;" required>
                    {{--   --}}
                    </div>
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        
                        <input class="form-control input-lg" type="date" name="dob" placeholder="Birthdate" style="font-family:'Courier New', Courier, monospace;" required>
                    {{--   --}}
                    </div>
                    <div class="col-xs-4" style="margin-bottom: 10px;">
                      
                        <select name="gender" id="gender-select" type="text" class="form-control input-lg" style="font-family:'Courier New', Courier, monospace;" required >
                          <option value="" hidden>Choose your Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="custom">Custom</option>    
                        </select>
                        
                
                    </div>
                    
                    <div class="col-xs-12" style="margin-bottom: 10px;">
                      <textarea class="form-control" placeholder="Place of Birth" name="birthplace" style="font-family:'Courier New', Courier, monospace;" ></textarea>    
                    </div>
                    <div class="col-xs-6" style=" " >
                    
                        
                      <input class="form-control input-lg" type="email" name="email" placeholder="Personal Email Address" style="font-family:'Courier New', Courier, monospace;" required>
               
                    </div>
                      <div class="col-xs-6" style=" " >
                    
                        
                      <input class="form-control input-lg" type="text " name="contact" placeholder="Contact" style="font-family:'Courier New', Courier, monospace;" required>
               
                    </div> 
                    
                    <div class="col-xs-12" style="margin-top:20px;">
                      <div class="box box-default box-solid collapsed-box">
                        <div class="box-header with-border">
                          <h4 class="box-title" style="margin-left: 5px;
                          font-family:'Courier New', Courier, monospace;
                          font-size: 3rem;">Credentials</h4>
            
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                          </div>
                          <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: none;">
                          <div class="col-xs-12">
                            {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                            {{-- <div class="col-sm-10"> --}}
                              <input class="form-control input-lg" type="text" name="username" placeholder="username" style="font-family:'Courier New', Courier, monospace;" required>
                          {{--   --}}
                          </div>
                          {{-- <div class="col-xs-6">
                            
                              <input class="form-control input-lg" type="password" name="pw" placeholder="Password" style="font-family:'Courier New', Courier, monospace;">
                          
                          </div>
                          <div class="col-xs-6">
                           
                              <input class="form-control input-lg" type="password" name="pw" placeholder="Confirm Password" style="font-family:'Courier New', Courier, monospace;">
                        
                          </div> --}}
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>

                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="margin-right: 20px;   width: 100%; padding-top: 15px; padding-bottom: 15px;">
                      Create
                    </button>
                  </div>
                  <!-- /.box-footer -->
                </form>

                <script>
                  if($('#contact_form').length > 0)
                  {
                    $('#contact_form').validate({

                        rules : {


                          
                        }


                    })
                  }
                </script>
              </div>
        </div>
    </div>
</div>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@if ($message = Session::get('success'))

    <script>
      swal("Account!","{!!Session::get('success')!!}","success",{button:"OK",});
    </script>
    
@endif --}}
@endsection
{{-- <script>

$(document).ready(function () {


           $("#userLname").hide();
            let userLnameError = true;
            $("#lname").keyup(function () {
                validatelname();
            });
    
            function validatelname() {
                let usernameValue = $("#lname").val();
                if (usernameValue.length == "") {
                $("#userLname").show();
                LnError = false;
                return false;
                } else if (usernameValue.length < 3 || usernameValue.length > 100) {
                $("#userLname").show();
                $("#useLname").html("*maximum of 100 character");
                usernameError = false;
                return false;
                } else {
                $("#userLname").hide();
                }
            }


});

</script> --}}