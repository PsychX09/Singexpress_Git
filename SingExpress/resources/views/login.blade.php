<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

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
            <img class="left_image" src="{{ asset('images/login1.jpg') }}" alt="sign up">
        </div>
        <!-- right form -->
        <div class="right_form col-7 bg-dark p-0 d-flex align-items-center text-center">
            <!-- sign up content -->
            <div class="right_form_child container-fluid p-2 d-flex align-items-center flex-column">

                <h1 class="text-light mt-5 pt-5">
                    Log in
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

                    <!-- password hide -->
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

                    <div class="row d-flex justify-content-center align-items-center mb-2">
                        <div class="col-6 form-check m-0 p-0 w-50 d-flex justify-content-start align-items-center">
                            <input type="checkbox" class="form-check-input m-1" id="rememberMe">
                            <label class="check_text form-check-label text-light p-0 m-0" for="rememberMe">Remember me</label>
                        </div>

                        <!-- forgot password.... -->
                        <p class="col-5 signup_p text-center m-0 d-flex align-items-end justify-content-end p-0">
                            <a href="#" class="t_and_c text-decoration-none fw-bold text-end">Forgot Password?</a><br>
                        </p>
                    </div>


                    <br>
                    <!-- Log in btn -->
                    <div class="text-center w-100 d-flex align-items-center justify-content-center mb-1">
                        <button type="submit" class="signup_btn input_signup btn btn-outline-light d-flex align-items-center justify-content-center">Log in</button>
                    </div>

                    <div class="container mt-5">
                        <div class="divider">OR</div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                    <div class="btn-group d-flex justify-content-space-between p-3">
                        <button type="button" class="btn btn-light px-2 mx-2" style="width: 20%; border-radius: 10px;">
                            <img src="{{ asset('icons/gmailpc.png') }}" alt="facebooklogo" class="" style="width: 40%;">
                        </button>
                        <button type="button" class="btn btn-light px-2 mx-2" style="width: 20%; border-radius: 10px;">
                            <img src="{{ asset('icons/facebookpc.jpg') }}" alt="facebooklogo" class="" style="width: 40%;">
                        </button>
                        <button type="button" class="btn btn-light px-2 mx-2" style="width: 20%; border-radius: 10px;">
                            <img src="{{ asset('icons/instagrampc.png') }}" alt="facebooklogo" class="" style="width: 40%;">
                        </button>
                    </div>

                    <!-- already have an account -->
                    <p class="signup_pl text-light">Don't have an account?
                            <a href="{{ route('signup') }}" class="signup_p_a text-decoration-none fw-bold">Create an account.</a>
                        </p>

                </form>
            </div>
        </div>
    </div>
</body>

</html>