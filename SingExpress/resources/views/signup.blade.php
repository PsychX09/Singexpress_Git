<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
</head>

<body class="container-fluid p-0 m-0 d-flex align-items-center d-flex justify-content-center text-center">
    <div class="row container-fluid p-0 justify-content-center m-2" style="width: 75%; height: 75%;">
        <!-- left Image -->
        <div class="col-5 p-0">
            <img class="w-100 h-100" src="{{ asset('images/signup.jpg') }}" alt="sign up">
        </div>
        <!-- right form -->
        <div class="col-7 bg-dark p-0 d-flex align-items-center text-center">
            <!-- sign up content -->
            <div class="container-fluid p-2 d-flex align-items-center flex-column">

                <h1 class="text-light">
                    Create an account
                </h1>
                <!-- form -->
                <form action="{{ route('homepage') }}" method="POST" class="div_form">
                    @csrf
                    <!-- inputs -->
                    <!-- email -->
                    <div class="row text-start d-flex justify-content-center mt-2 mb-3">
                        <label class="form-label text-light ms-3" for="Email">Email</label> <br>
                        <input type="email" class="input_signup form-control" name="email" id="email" placeholder="Enter your email" required> <br>
                    </div>

                    <!-- password -->
                    <div class="row text-start d-flex justify-content-center mt-2 mb-3">
                        <label class="form-label text-light ms-3 " for="password">Password</label> <br>
                        <div class="input-group">
                            <input type="text" class="input_signup form-control ms-2" name="password" id="password" placeholder="Enter your password" required>
                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password')">
                                <i class="fas fa-eye" id="eye-icon-password"></i> <!-- Default eye icon -->
                            </button><br>
                        </div>

                    </div>
                    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script>
                        $('#password, #confirm_password').on('keyup', function() {
                            if ($('#password').val() == $('#confirm_password').val()) {
                                $('#message').html('Matching').css('color', 'green');
                            } else
                                $('#message').html('Not Matching').css('color', 'red');
                        });
                    </script> -->

                    <!-- confirm password -->
                    <div class="row text-start d-flex justify-content-center mt-2 mb-2">
                        <label class="form-label text-light ms-3" for="password ">Confirm Password</label> <br>

                        <div class="input-group">
                            <input type="text" class="input_signup form-control ms-2" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required>
                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('confirm_password')">
                                <i class="fas fa-eye" id="eye-icon-c_password"></i> <!-- Default eye icon -->
                            </button>
                            <br>
                            
                        </div>
                        <span id="message"></span>    
                    </div>


                    <script>
                        function togglePassword(id) {
                            const passwordField = document.getElementById(id);
                            const button = passwordField.nextElementSibling; // Get the button next to the input
                            const icon = button.querySelector('i'); // Get the icon inside the button
                            if (passwordField.type === 'password') {
                                passwordField.type = 'text';
                                icon.classList.add('fa-eye'); // Remove the eye icon
                                icon.classList.remove('fa-eye-slash'); // Add the eye-slash icon
                            } else {
                                passwordField.type = 'password';
                                icon.classList.add('fa-eye-slash'); // Remove the eye-slash icon
                                icon.classList.remove('fa-eye'); // Add the eye icon
                            }
                        }
                    </script>


                    <!-- terms and conditions,.... -->
                    <p class="signup_p text-center">By signing up I agree to the
                        <a href="#" class="t_and_c text-decoration-underline fw-bold">terms and conditions<br>and privacy policy</a><br>
                    </p>

                    <br>
                    <!-- sign up btn -->
                    <div class="text-center w-100 d-flex align-items-center justify-content-center mb-1">
                        <button type="submit" class="signup_btn input_signup btn btn-outline-light d-flex align-items-center justify-content-center">Sign Up</button>
                    </div>

                    <!-- already have an account -->
                    <p class="signup_pl text-light">Already have an account?
                        <a href="{{ route('login') }}" class="signup_p_a text-decoration-none fw-bold">Log in.</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>