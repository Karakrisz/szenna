<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self' https: data:;
        img-src 'self' https: http: data:;
        font-src 'self' https: data:;
        style-src 'self' https: 'unsafe-inline';
        script-src 'self' https: 'unsafe-inline' 'unsafe-eval';
    ">
    <title>Szenna Étterem</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- SEO -->
    <meta property="og:title" content="Szenna Étterem" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="Szenna Étterem" />
    <meta property="og:description" content="Szenna Étterem" />

    <link rel="schema.dcterms" href="http://purl.org/dc/terms/">
    <meta name="DC.coverage" content="Hungary" />
    <meta name="DC.description" content="" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.publisher" content="Szenna Étterem" />
    <meta name="DC.title" content="" />
    <!-- App css -->
    <link rel="stylesheet" href="/css/app.css">


</head>

<body class="antialiased">
    <header>
        <nav class="navbar d-flex">
            <div class="hamburger position-relative" id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="navbar-logo-box">
                <img class="navbar-logo-box__img" src="img/header/logo.png" alt="szenna">
            </div>
            <ul class="menu d-flex" id="menu">
                <li><a href="#">Kezdőlap</a></li>
                <li><a href="#">Étlap</a></li>
                <li><a href="#">Rólunk</a></li>
                <li><a href="#">Kapcsolat</a></li>
            </ul>
            <div class="navbar__link-box t-end">
                <p class="navbar__link-box__p">
                    <a class="navbar__link-box__p__link" href="tel:+36209834929">+36 20 983 4929
                        <img class="navbar__link-box__p__link__img" src="img/header/phone.svg" alt="szenna"> </a>
                </p>
                <p class="navbar__link-box__p">
                    <a class="navbar__link-box__p__link" target="_blank"
                        href="https://www.google.com/maps/place/Szenna,+%C3%81rp%C3%A1d+u.+39,+7477/@46.3046177,17.7246791,17z/data=!3m1!4b1!4m6!3m5!1s0x47681471df7c7e79:0xf162ba74a9e3baf8!8m2!3d46.304614!4d17.727254!16s%2Fg%2F11csj0vp_3?authuser=0&entry=ttu">
                        Szenna, Árpád utca 39. <img class="navbar__link-box__p__link__img" src="img/header/map.svg"
                            alt="szenna"> </a>
                </p>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

        <div class="footer-content d-flex">

            <div class="footer-content__link-box">
                <h5 class="footer-content__link-box__h5 text-transform-uppercase">FOGLALJON IDŐPONTOT</h5>
            </div>

            <div class="footer-content__map-box">

            </div>


        </div>

        <script src="js/app.js"></script>
    </footer>
</body>

</html>