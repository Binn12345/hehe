@extends('layouts.app')
<title>

        BCP - Edit data

</title>
@section('content')



<div class="content-wrapper">

    <div class = "col-lg-12" style = "margin-top: 50px;" >


        <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('studentt.update', $student) }}" method="POST">

                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="fname" value="{{$student->key}}" required> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gender</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="gender" value="{{$student->gender}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Birthdate</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="dob" value="{{$student->birthdate}}"required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Birthplace</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="bp" value="{{$student->birthplace}}"required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contact</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="contact" value="{{$student->contact}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="{{$student->email}}"required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="{{$student->address}}"required>
                </div>

                
                
              </div>
              <!-- /.box-body -->
    
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>

    </div>

</div>

@endsection





{{-- <div class = "row" >
        <div class ="pull-left">
            <label style="font-size: 20px;">
            <span style="margin-bottom: 200px;">
                    Edit your personal details
                </span>
            </label>
         </div>
</div>
@if($errors->any())
{
    <div class="alert alert-danger">

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
} --}}
{{-- @endif
<div class="row">
    <form action="{{ route('studentt.update', $student)
     }}" method="POST">
     
                <hr style="
                            position: relative;
                            top: 5px;
                            border: none;
                            height: 4px;
                            background: black;
                            margin-bottom: 1px;">
                
                
                <br>
                <br>
                
     @csrf --}}
    {{-- <div class="col-md-4">
                    <label class="fname">Fullname</label>
                    <input type="text" name="fname" id="fname" placeholder="Firstname" value="{{$student->Fullname }}" required>
                    <h5 id="userFname" style="color: red;">
						**Fullname is missing
					</h5>
                </div>
               
                <div class="col-md-4">
                    <label>Gender</label>
                    
                    <input type="text" name="gender" id="gender" placeholder="Gender" value="{{$student->Gender}}"required>
                    <h5 id="userGender" style="color: red;">
						**Gender is required
					</h5>
                </div>
                <div class="col-md-4">
                    <label>Birthdate</label>
                    <input type="date" name="dob" id="bd" placeholder="Birthdate" value="{{$student->Birthdate}}"required>
                </div>
                <div class="col-md-4">
                    <label>Birthplace</label>
                    <input type="text" name="bp" id="bp" placeholder="Birthplace" value="{{$student->Birthplace}}" required>
                    <h5 id="userBirthplace" style="color: red;">
						**Birthplace is required
					</h5>
                </div>
                <div class="col-md-4">
                    <label>Contact</label>
                    <input type="text" name="contact" id="cn" max-length="11"; placeholder="ex. 09"value="{{$student->Contact}}" required>
                    <h5 id="userContact" style="color: red;">
						**Contact number is required
					</h5>
                </div>
                <div class="col-md-4">
                    <label>Email</label>
                    <input type="email" name="email" id="em" placeholder="Email" value="{{$student->Email}}"required>
                    <h5 id="userEmail" style="color: red;">
						**Email is required
					</h5>
                </div>
                
                <div class="col-md-4">
                    <label>Address</label>
                    <input type="text" name="address" id="ad" placeholder="Address" value="{{$student->Address}}"required>
                </div>

                <button type="submit" name="submit" id="submitbtn" class="btn btn-primary" > UPDATE</button>
                <br>
                </form>
            
            </div>    
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
             
            <script>  
        
                $(document).ready(function () {
                    
                    // Validate lastname
                    $("#usercheck").hide();
                    let userLnameError = true;
                    $("#lname").keyup(function () {
                        validatelname();
                    });
            
                    function validatelname() {
                        let usernameValue = $("#lname").val();
                        if (usernameValue.length == "") {
                        $("#usercheck").show();
                        LnError = false;
                        return false;
                        } else if (usernameValue.length < 3 || usernameValue.length > 10) {
                        $("#usercheck").show();
                        $("#usercheck").html("*maximum of 100 character");
                        usernameError = false;
                        return false;
                        } else {
                        $("#usercheck").hide();
                        }
                    }
        
        
                    // Validate firstname
                    $("#userFname").hide();
                    let userFnameError = true;
                    $("#fname").keyup(function () {
                        validateUserFname();
                    });
            
                    function validateUserFname() {
                        let usernameValue = $("#fname").val();
                        if (usernameValue.length == "") {
                        $("#userFname").show();
                        FnError = false;
                        return false;
                        } else if (usernameValue.length < 3 || usernameValue.length > 100) {
                        $("#userFname").show();
                        $("#userFname").html("*maximum of 100 character");
                        usernameError =
                        false;
                        return false;
                        } else {
                        $("#userFname").hide();
                        }
                    } 
        
        
                    //validate middlename
                    $("#userMname").hide();
                    let userMnameError = true;
                    $("#mname").keyup(function () {
                        validateUserMname();
                    });
            
                    function validateUserMname() {
                        let usernameValue = $("#mname").val();
                        if (usernameValue.length == "") {
                        $("#userMname").show();
                        MnError = false;
                        return false;
                        } else if (usernameValue.length < 3 || usernameValue.length > 100) {
                        $("#userMname").show();
                        $("#userMname").html("*maximum of 100 character");
                        usernameError = false;
                        return false;
                        } else {
                        $("#userMname").hide();
                        }
                    }
        
        
        
                        //validate Gender
                        $("#userGender").hide();
                        let userGenderError = true;
                        $("#gender").keyup(function () {
                            validateGender();
                        });
        
                        function validateGender()
                        {
                            let gender = $("#gender").val();
        
                            if (gender.length == 0) {
                                $("#userGender").show();
                            }
                            else if (gender.length < 3 || gender.length > 10) {
                                $("#userGender").show();
                                $("#userGender").html("*maximum of 100 character");
                                userGenderError = false;    
                            }else {
                            $("#userGender").hide();
                            }
                        }
        
                        //validate Birthplace
                        $("#userBirthplace").hide();
                        let userBirthError = true;
        
                        $("#bp").keyup(function () {
                            validateBirthplace();
                        })
        
                        function validateBirthplace()
                        {
                            let bp = $("#bp").val();
        
                            if (bp.length == 0) {
                                $("#userBirthplace").show();
                            }
                            else if (bp.length < 3 || bp.length > 10) {
                                $("#userBirthplace").show();
                                $("#userBirthplace").html("*maximum of 100 character");
                                userBirthError = false;    
                            }else {
                            $("#userBirthplace").hide();
                            }
                        }
        
                        //validate Contact
                        $("#userContact").hide();
                        let userContactError = true;
        
                        $("#cn").keyup(function () {
                            validateContact();
                        })
        
                        function validateContact()
                        {
                            let cn = $("#cn").val();
        
                            if (cn.length == 0) {
                                $("#userContact").show();
                            }
                            else if (cn.length < 3 || cn.length > 11) {
                                $("#userContact").show();
                                $("#userContact").html("*maximum of 11 digit numbers");
                                userContactError = false;    
                            }else{
                            $("#userContact").hide();
                            }
                        }
        
        
                        //validate email
        
                        $("#userEmail").hide();
                        let userEmailError = true;
        
                        $("#em").keyup(function () {
                            validateEmail();
                        })
        
                        function validateEmail()
                        {
                            let em = $("#em").val();
        
                            if (em.length == 0) {
                                $("#userEmail").show();
                            }
                            else if (em.length < 3 ||em.length > 10) {
                                $("#userEmail").show();
                                $("#userEmail").html("*maximum of 100 character");
                                userEmailError = false;    
                            }else{
                            $("#userEmail").hide();
                            }
                        }
                        
        
                        });
        
                $("#submitbtn").click(function () {
                    validatelname();
                    validateUserLname();
                    validateUserFname();
                    validateUserMname();
                    validateGender();
                    validateBirthplace();
                    validateContact();
                    validateEmail();
                    if (
                    LnError == true && 
                    FnError == true &&
                    MnError == true &&
                    GenderError == true &&
                    userBirthError == true &&
                    userEmailError == true  
                    ) {
                    return true;
                    } else {
                    return false;
                    }
                });
                    
                    </script>  
</div> --}}
