<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>SingExpress HomePage</title>
</head>

<body class="container-fluid p-1">
    <div class="">
        <nav class="list-inline bg-black p-1 d-flex justify-content-between align-items-center">
            <ul class="cus_fsize list-inline text-dark list-inline-item mb-1 ms-5">
                <li class="list-inline-item">
                    <a href="{{ route('homepage') }}" class="p-3 pt-2 pb-2 fontcustom_style text-decoration-none {{ request()->routeIs('homepage') ? 'active' : '' }}">HOME</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('reservation') }}" class="p-3 pt-2 pb-2 fontcustom_style text-decoration-none {{ request()->routeIs('reservation') ? 'active' : '' }}">RESERVATION</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('contact') }}" class="p-3 pt-2 pb-2 fontcustom_style text-decoration-none {{ request()->routeIs('contact') ? 'active' : '' }}">CONTACT US</a>
                </li>
            </ul>
            <img src="{{ asset('images/logo_.png') }}" alt="logo" class="p-3 pt-2 pb-2 list-inline-item img-fluid me-3 pt-4  {{ request()->routeIs('homepage') ? 'active' : '' }}" style="width: 120px; height: auto">
        </nav>
    </div>

    <div class="row align-items-center mt-3">

        <div class="col-7" ;>
            <h1 class="p-auto m-auto">
                ENJOY <br>
                OUR NEW <br>
                KARAOKE</h1>

            <div class="container-fluid align-items-center text-center m-auto mt-3" style="width: 50%;">
                <a href="{{ route('reservation') }}" class="a_tag btn btn-light btn-lg btn-block w-75">BOOK A RESERVATION</a>
            </div>

            <p class="p_custom text-center p-4">LOOKING TO MAKE YOUR NEXT EVENT A HIT? RESERVE OUR <br>
                EXCLUSIVE KARAOKE SONGBOOK AND GET ACCESS TO <br>
                THOUSANDS OF SONGS ACROSS DIFFERENT GENRES! <br>
                PERFECT FOR PARTIES, GATHERINGS, OR ANY SPECIAL<br>
                OCCASION, OUR KARAOKE BOOK WILL ENSURE EVERYONE <br>
                GETS A CHANCE TO SING THEIR HEART OUT.</p>

        </div>

        <div class="col-5">
            <img src="{{ asset('images/micbg.png') }}" alt="mic" class=" mx-auto d-block img-fluid float-start" style="width: 80%;">
        </div>

    </div>
</body>

</html>