
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel for BCP</title>
    <link rel="shortcut icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="https://bcpedu.elearningcommons.com/css/app.css">
    <script src="https://kit.fontawesome.com/4643fcc724.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        


        



    </div>

    <div class="flex flex-col flex-auto min-w-0 mt-28">
        <!-- Main -->
        <div class="flex flex-col flex-auto items-center p-6 sm:p-10">
            <div class="logo">
                <img class="w-36" src="https://bcpedu.elearningcommons.com/images/bcp-olp-logo-mini2.png" alt="">
            </div>

            <div class="school_name mt-12 text-4xl sm:text-5xl text-center">
                Bestlink College of the Philippines
            </div>

            <div class="mt-20 flex flex-0 w-3/4">
                <div class="grid sm:grid-cols-2 gap-10 w-full">
                    <a href ={{route('register')}}
                        class="uppercase text-center px-8 py-3 text-white text-xl tracking-wider font-bold rounded-xl transition duration-500 ease-in-out bg-blue-800 hover:bg-blue-600 transform hover:-translate-y-1 hover:scale-110"
                        role="button">Register as Super Admin</a>

                    <a href={{route('student.cre')}}
                        class="uppercase text-center px-8 py-3 text-white text-xl tracking-wider font-bold rounded-xl transition duration-500 ease-in-out bg-blue-400 hover:bg-blue-700 transform hover:-translate-y-1 hover:scale-110"
                        role="button">Register as Student</a>

                </div>
            </div>

            <div class="mt-20 flex flex-0">
                <div class="grid grid-cols-2 gap-10">
                    <a class="button__items" href="#" target="_blank">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>

                    <a class="button__items" href="#" target="_blank">
                        <i class="fas fa-school fa-2x"></i>
                    </a>
                </div>
            </div>
            <!-- Footer -->

        </div>
    </div>
</body>

</html>
