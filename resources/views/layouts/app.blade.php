<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sastha Jewellery">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="{{ asset('/style.css') }}" rel="stylesheet">
    <!-- <script src="{{ asset('/jas.js') }}"></script>-->


    @yield('custom_styles')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        img {

            border-radius: 100em;
            /* Remove any border */
        }
        .navbar {
    background: linear-gradient(39deg, #0a6162 0%, #0d6153 50%, #106140 100%);
    border-bottom: 2px solid transparent; /* Add a transparent border at the bottom */
    transition: border-bottom-color 0.3s ease-in-out; /* Add transition for smooth effect */
}

.navbar.navbar-scrolled {
    border-bottom-color: #ffffff; /* Change border color when scrolled */
}

.navbar-brand img {
    max-height: 70px; /* Adjust the max height of the logo */
}

.navbar-nav .nav-link {
    padding: 0.5rem 1rem; /* Adjust padding for nav links */
    font-size: 1.1rem; /* Adjust font size for nav links */
}


/* Add additional styles as needed */

    </style>
</head>
<script>$(document).ready(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) {
            $(".navbar").addClass("navbar-scrolled");
        } else {
            $(".navbar").removeClass("navbar-scrolled");
        }
    });
});

</script>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark shadow-s text-white fixed-top" style="background-color: #0a6168">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/img/logo.jpg" alt="Sastha Jewellery" style="width: auto; height: 100px;">
        </a>

        <!-- Toggler button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a href="{{ route('/') }}"  class="nav-link">
            Home
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#about" data-scroll>
            About
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#product" data-scroll>
            Products
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#contact" data-scroll>
            Contact
        </a>
    </li>
</ul>

        </div>
    </div>
</nav>



        <main class="py">
            @yield('content')
        </main>
    </div>



    <footer class="footer mt-auto py-3 bg-dark text-white">
        @yield('footer')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>About Us</h5>
                    <p>Where elegance meets craftsmanship. <br>We offer a wide range of exquisite jewelry pieces crafted with precision and passion. <br>Shop with confidence and indulge in the beauty of Sastha Jewelry. <br>Experience luxury at its finest.</p>
                </div>
                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <address>
                        Sastha Jewellery<br>
                        #302, Shop No 19, 2nd Floor,<br>
                        DD Complex - Bigbazzar st, <br>
                        Coimbatore - 641001 <br>
                        Phone: 9566824184<br>
                        Email: sasthajweles@gmail.com<br>
                        <div class="social-icons my-2">
                            <a href="#" class="social-icon text-white mx-2"><i class="fa-brands fa-twitter fa-xl"></i></a>
                            <a href="#" class="social-icon text-white mx-2"><i class="fa-brands fa-instagram fa-xl"></i></a>
                            <a href="#" class="social-icon text-white mx-2"><i class="fa-brands fa-snapchat fa-xl"></i></a>
                        </div>
                    </address>
                </div>
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('/') }}" class="h5 text-white" style="text-decoration: none;">Home</a></li>
                        <li><a href="{{ url('/#about') }}" class="h5 text-white" style="text-decoration: none;">About</a></li>
                        <li><a href="{{ url('/#product') }}" class="h5 text-white" style="text-decoration: none;">Products</a></li>
                        <li><a href="{{ url('/#contact') }}" class="h5 text-white" style="text-decoration: none;">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center">
            &copy; {{ date('Y') }} By Sastha Jewellery. All Rights Reserved.
        </div>
    </footer>


</body>

</html>