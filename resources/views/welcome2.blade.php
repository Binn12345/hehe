<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<style>
    *{
        font-family: 'Nunito', sans-serif;
    }
    .container{

        margin-top: 50px;
        margin-bottom: 50px;
        height: 50vh;
           
    }
    
</style>
<body>
    <div class="container">

        <label>Username</label>
        <input type="text" placeholder="username">
        <br>
        <label>Paassword</label>
        <input type="text" placeholder="**********">
        <br>
        <button type="submit" name="submit">
        login
        </button>   
        <a href="{{('register')}}">Register an Account</a> 
        

    </div>

</body>
</html>