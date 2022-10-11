<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <style>
            * {
            font-family: 'Times New Roman', Times, serif;
            }
            .container{
            
            top: auto;
            bottom: auto;
            width: 100%;
            justify-content: center; 
            align-items: center;
            display: flex;
            background-size: cover;
            background-position: center;
            }
            .l{
                font-size: 4rem;
            }
            .reg{
                background: whitesmoke;
                margin-bottom: 20px;
                margin-top: 5vh;
                width: 80%;
                padding: 70px;
                border-radius: 15px;
                }

            .col-md-4{
                font-size: 20px;
                margin-bottom: 20px;
            }
            .btn{
                margin-left: 10px;
                
                width: auto;
            }
            .lname{
                max-width: 200em;
            }
            .btn{
                display: block;
                width: 100%;
                border: none;
                background-color: #04AA6D;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
                

            }
            .btnn{
                display: block;
                width: 100%;
                border: none;
                background-color:#04AA6D;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
                
            }
    </style>    
    <body>
    <div class="container">
       
            <form action="" id="myform" class="reg" method="POST">
                <label class="l">
                    Registration &#33;
                </label><br>
                <span style="margin-bottom: 200px;">
                    Enter your personal details
                </span>
                <hr style="
                            position: relative;
                            top: 5px;
                            border: none;
                            height: 4px;
                            background: black;
                            margin-bottom: 1px;">
                
                
                <br>
                <br>

                <div class="col-md-4">
                    <label class="fname">Fullname</label>
                    <input type="text" name="fname" id="fname" placeholder="Firstname" required>
                    <h5 id="userFname" style="color: red;">
						**Fullname is missing
					</h5>
                </div>
               
                <div class="col-md-4">
                    <label>Gender</label>
                    
                    <input type="text" name="gender" id="gender" placeholder="Gender" required>
                    <h5 id="userGender" style="color: red;">
						**Gender is required
					</h5>
                </div>
                <div class="col-md-4">
                    <label>Birthdate</label>
                    <input type="date" name="dob" id="bd" placeholder="Birthdate" required>
                </div>
                <div class="col-md-4">
                    <label>Birthplace</label>
                    <input type="text" name="bp" id="bp" placeholder="Birthplace" required>
                    <h5 id="userBirthplace" style="color: red;">
						**Birthplace is required
					</h5>
                </div>
                <div class="col-md-4">
                    <label>Contact</label>
                    <input type="text" name="contact" id="cn" max-length="11"; placeholder="ex. 09" required>
                    <h5 id="userContact" style="color: red;">
						**Contact number is required
					</h5>
                </div>
                <div class="col-md-4">
                    <label>Email</label>
                    <input type="email" name="email" id="em" placeholder="Email" required>
                    <h5 id="userEmail" style="color: red;">
						**Email is required
					</h5>
                </div>
                
                <div class="col-md-4">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." style="width: 610px; height: 110px;"></textarea>
                    <input type="text" name="address" id="ad" placeholder="Address" required>
                </div>

                <button type="submit" name="submit" id="submitbtn" class="btn btn-primary" > Create </button>
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
                } else if (usernameValue.length < 3 || usernameValue.length > 100) {
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
                    else if (bp.length < 3 || bp.length > 100) {
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
                    else if (em.length < 3 ||em.length > 100) {
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

</body>
</html>