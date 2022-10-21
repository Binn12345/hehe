<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon">
        
        <title>
            BCP
        </title>  
        <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            font-size: 10px;
            width: 100%;
          }
          
          #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
          }
          
          #customers tr:nth-child(even){background-color: #f2f2f2;}
          
          #customers tr:hover {background-color: #ddd;}
          
          #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #037ec5;
            color: white;
          }
          .example-modal .modal {
          position: relative;
          top: auto;
          bottom: auto;
          right: auto;
          left: auto;
          display: block;
          z-index: 1;
        }
    
        .example-modal .modal {
          background: transparent !important;
        }
          
        </style>
        {{-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f; 
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}
    </head>
    <body>
        @include('index2')
    </body>
</html>
