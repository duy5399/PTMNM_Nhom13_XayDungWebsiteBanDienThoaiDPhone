<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <base href="{{asset('public/admin/css')}}/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Login_v10/Login_v10/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/css/util.css">
    <link rel="stylesheet" type="text/css" href="Login_v10/Login_v10/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">

                <form class="login100-form validate-form flex-sb flex-w" method="post">
                    {{csrf_field()}}
                    <span class="login100-form-title p-b-51">
                        Login
                    </span>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                        <input class = "input100" type="text" name="username" value="{{old('username')}}" id="username" placeholder="Username" autofocus="" required="">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class = "input100" type="password" name="password" id="password" placeholder="Password" required="">
                        <span class="focus-input100"></span>
                    </div>

                    <?php
                        // $error = Session::get('error');
                        // if($error){
                        //     echo $error;
                        //     Session::put('error', null);
                        // }
                    ?>
                    @include('admin.layouts.note_error')

                    <div class="container-login100-form-btn m-t-17">
                        <input class="login100-form-btn" type="submit" name="btn_login" id="btn_login" value="Login">
                    </div>
                
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="Login_v10/Login_v10/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="Login_v10/Login_v10/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="Login_v10/Login_v10/vendor/bootstrap/js/popper.js"></script>
    <script src="Login_v10/Login_v10/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="Login_v10/Login_v10/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="Login_v10/Login_v10/vendor/daterangepicker/moment.min.js"></script>
    <script src="Login_v10/Login_v10/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="Login_v10/Login_v10/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="Login_v10/Login_v10/js/main.js"></script>

</body>
</html>