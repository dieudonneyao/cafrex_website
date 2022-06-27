<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Title -->
        <title>CAFREX - Compagnie &amp; Africaine d'Expertise Agricole | Agriculture</title>
        <!-- Favicon -->
        <link rel="icon" href="img/core-img/favicon.ico">
        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="spinner"></div>
        </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
            <!-- Top Header Area -->
            @include('layouts.header')

            <!-- Navbar Area -->
            @include('layouts.navbar')
        </header>
        <!-- ##### Header Area End ##### -->

        <div>
            @yield('content')
        </div>

        <!-- ##### Footer Area Start ##### -->
                    @include('layouts.footer')
        <!-- ##### Footer Area End ##### -->

        <!-- ##### All Javascript Files ##### -->
        <!-- jquery 2.2.4  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Popper js -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <!-- Bootstrap js -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Owl Carousel js -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- Classynav -->
        <script src="{{asset('js/classynav.js')}}"></script>
        <!-- Wow js -->
        <script src="{{asset('js/wow.min.js')}}"></script>
        <!-- Sticky js -->
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <!-- Magnific Popup js -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Scrollup js -->
        <script src="{{asset('js/jquery.scrollup.min.js')}}"></script>
        <!-- Jarallax js -->
        <script src="{{asset('js/jarallax.min.js')}}"></script>
        <!-- Jarallax Video js -->
        <script src="{{asset('js/jarallax-video.min.js')}}"></script>
        <!-- Active js -->
        <script src="{{asset('js/active.js')}}"></script>
    </body>
</html>