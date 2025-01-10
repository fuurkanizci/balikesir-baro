<!--  HEADER   -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>
        @hasSection('title')
            <blade
                yield|(%26%2339%3Btitle%26%2339%3B)%20%7C%20%7B%7Benv(%2526%252339%253BAPP_NAME%2526%252339%253B)%7D%7D%0D />
        @else
            {{ env('APP_NAME') }}
        @endif
    </title>
    @vite(['resources/js/app.js'])
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
            rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/countup.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

</head>

<body>

    <i id="scrollToTopBtn"
        class="fa-solid fa-arrow-up d-flex justify-content-center align-items-center back-to-top"></i>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand logo-stngs" href="#"><img class=" "
                    src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/logo.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto header-settings">
                    <li class="nav-item d-flex flex-row">
                        <a class="nav-link header-link-effects menu-borders" href="#home">ana sayfa</a>
                        <p class="header-slash select-disable">/</p>
                    </li>
                    <li class="nav-item d-flex flex-row">
                        <a class="nav-link header-link-effects" href="#section1">öne çıkanlar</a>
                        <p class="header-slash select-disable">/</p>
                    </li>
                    <li class="nav-item d-flex flex-row">
                        <a class="nav-link header-link-effects" href="#section2">HAKKIMIZDA</a>
                        <p class="header-slash select-disable">/</p>
                    </li>
                    <li class="nav-item d-flex flex-row">
                        <a class="nav-link header-link-effects" href="#section3">günün özel menüsü</a>
                        <p class="header-slash select-disable">/</p>
                    </li>
                    <li class="nav-item d-flex flex-row">
                        <a class="nav-link header-link-effects" href="#section4">menü</a>
                        <p class="header-slash select-disable">/</p>
                    </li>
                    <li class="nav-item d-flex flex-row">
                        <a class="nav-link header-link-effects" href="#section5">rezervasyon</a>
                        <p class="header-slash select-disable">/</p>
                    </li>
                    <li class="nav-item d-flex flex-row">
                        <a class="nav-link header-link-effects" href="#section6">son ETKİNLİKLER</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('body')
    <footer>
        <div class="footer-settings">
            <div class="footer-gap">
                <div id="footer-copyright" class="text-white"></div>
                <div>
                    <img class="d-flex footer-img"
                        src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/logo.png') }}">
                </div>
                <div class="d-flex flex-row gap-1">
                    <a class="icons-effects" href=""><i class="fa-brands fa-dribbble "></i></a>
                    <a class="icons-effects" href=""><i class="fa-solid fa-rss "></i></a>
                    <a class="icons-effects" href=""><i class="fa-brands fa-google-plus-g "></i></a>
                    <a class="icons-effects" href=""><i class="fa-brands fa-facebook-f "></i></a>
                    <a class="icons-effects" href=""><i class="fa-brands fa-x-twitter "></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>


<!--  CONTENTS   -->


<!--  FOOTER   -->
