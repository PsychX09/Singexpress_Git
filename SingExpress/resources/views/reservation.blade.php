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

    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
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

    <div class="container-fluid row align-items-center">

        <!-- RESERVATION -->
        <div class="container col-6 mt-5"
            class="left_row">
            <div class="left_row_content_up row">

                <div class="left_row_content m-2" style="border: solid black;">

                    <div class="left_row_info text-center align-items-center" style="">
                        <h1 class="text-center p-0 pt-2 mb-0">PLATINUM</h1>
                        <h3 class="text-center p-1 m-0">Volume 99 T-X <br>
                            Series & New <br>
                            Song Addional list <br>
                            Included</h3>

                        <button class="rent_button btn btn-outline-dark m-2 mt-3">RENT NOW</button>
                        <button class="details_button btn btn-outline-secondary m-1">DETAILS</button>

                    </div>

                    <div class="left_row_info2">
                        <div class="img-1 p-0 m-2">
                            <img src="{{ asset('images/mic1new.jpg') }}" class="img-1-content" alt="" style="border: solid black;">
                        </div>
                        <div class="img-1 p-0 m-2">
                            <img src="{{ asset('images/micspeaker.jpg') }}" class="img-1-content" alt="" style="border: solid black;">
                        </div>
                    </div>

                </div>

                <div class="left_row_content m-2" style="border: solid black;">

                    <div class="left_row_info text-center align-items-center">
                        <h1 class="text-center p-0 pt-2 mb-0">PLATINUM</h1>
                        <h3 class="text-center p-0 m-0">Volume 99<br>
                         Reyna/2/3C/SE<br> 
                         Series & New <br>
                         Song Addional list 
                         <br>Included</h3>

                        <button class="rent_button btn btn-outline-dark m-2 mt-1">RENT NOW</button>
                        <button class="details_button btn btn-outline-secondary m-1">DETAILS</button>

                    </div>

                    <div class="left_row_info2" style="">
                        <div class="img-1 p-0 m-2">
                            <img src="{{ asset('images/mic2.jpg') }}" class="img-1-content" alt="" style="border: solid black;">
                        </div>
                        <div class="img-1 p-0 m-2">
                            <img src="{{ asset('images/mics2speaker.jpg') }}" class="img-1-content" alt="" style="border: solid black;">
                        </div>
                    </div>

                </div>
            </div>

            <div class="left_row_content_up row">

                <div class="left_row_content m-2" style="border: solid black;">

                    <div class="left_row_info text-center align-items-center" style="">
                        <h1 class="text-center p-0 pt-2 mb-0">PLATINUM</h1>
                        <h3 class="text-center p-1 m-0">Volume 99 T-X <br>
                        Series & New Song <br>
                        Addional list<br>
                         Included, Single Mic</h3>

                        <button class="rent_button btn btn-outline-dark m-2 mt-3">RENT NOW</button>
                        <button class="details_button btn btn-outline-secondary m-1">DETAILS</button>

                    </div>

                    <div class="left_row_info2" style="">
                        <div class="img-1 p-0 m-2">
                            <img src="{{ asset('images/mic3.jpg') }}" class="img-1-content" alt="" style="border: solid black;">
                        </div>
                        <div class="img-1 p-0 m-2">
                            <img src="{{ asset('images/micspeaker.jpg') }}" class="img-1-content" alt="" style="border: solid black;">
                        </div>
                    </div>

                </div>

                <div class="left_row_content m-2" style="border: solid black;">

                    <div class="left_row_info text-center align-items-center" style="">
                        <h1 class="text-center p-0 pt-2 mb-0">PLATINUM</h1>
                        <h3 class="text-center p-0 m-0">Volume 99<br>
                         Reyna/2/3C/SE<br> 
                         Series & New <br>
                         Song Addional list 
                         <br>Included</h3>

                        <button class="rent_button btn btn-outline-dark m-2 mt-1">RENT NOW</button>
                        <button class="details_button btn btn-outline-secondary m-1">DETAILS</button>

                    </div>

                    <div class="left_row_info2" style="">
                        <div class="img-1 p-0 m-2">
                            <img src="{{ asset('images/mic2.jpg') }}" class="img-1-content" alt="" style="border: solid black;">
                        </div>
                        <div class="img-1 p-0 m-2">
                            <img src="{{ asset('images/mic3speaker.jpg') }}" class="img-1-content-last ms-3" alt="" style="border: solid black;">
                        </div>
                    </div>

                </div>
            </div>



        </div>

        <!-- MIC -->
        <div class="col-5" style="border: solid red;">

            <!-- <img src="{{ asset('images/micbg.png') }}"
                alt="mic" class=""> -->
        </div>

    </div>
</body>

</html>