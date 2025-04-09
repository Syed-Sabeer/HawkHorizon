<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">
<head>


    <meta charset="utf-8">
    <title>Hawk Horizon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{ asset('assetsCommon/images/favicon.png') }}" />
    
    <link href="{{ asset('assetsMain/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" ')}}/>
    <link href="{{ asset('assetsMain/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetsMain/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetsMain/css/repeatClass.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetsMain/css/custom.css') }}" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css" integrity="sha512-6p+GTq7fjTHD/sdFPWHaFoALKeWOU9f9MPBoPnvJEWBkGS4PKVVbCpMps6IXnTiXghFbxlgDE8QRHc3MU91lJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.4.47/css/materialdesignicons.min.css" integrity="sha512-/k658G6UsCvbkGRB3vPXpsPHgWeduJwiWGPCGS14IQw3xpr63AEMdA8nMYG2gmYkXitQxDTn6iiK/2fD4T87qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">



    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo-1.png')}}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/carouselTicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">

        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-66LD6SEB7V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-66LD6SEB7V');
</script>

    
</head>

<body>

    @include('layouts.nav')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    if (window.innerWidth >= 425) {
                        let startScroll = document.body.scrollHeight * 0.005;
            
                        // Start at the very top first
                        window.scrollTo(0, 0);
            
                        // Then move to 0.5% after a slight delay
                        setTimeout(() => {
                            window.scrollTo(0, startScroll);
                        }, 100);
            
                        window.addEventListener("scroll", function () {
                            if (window.scrollY < startScroll) {
                                window.scrollTo(0, startScroll);
                            }
                        });
                    }
                });
            </script>
            
    @yield('main-container')


    @include('layouts.footer')

    </div>
</div>


<style>
    .whatsapp-button {
        position: fixed;
        bottom: 140px;
        right: 50px;
        z-index: 999;
        background: white;
        padding: 10px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s ease-in-out, opacity 0.5s ease-in-out;
        opacity: 0; /* Initially hidden */
        visibility: hidden;
    }

    .whatsapp-button.show {
        opacity: 1;
        visibility: visible;
    }

    .whatsapp-button:hover {
        transform: scale(1.1);
    }
</style>

<div class="whatsapp-button" id="whatsappButton">
    <a href="https://wa.me/12673158273" target="_blank">
        <i class="fa fa-whatsapp" style="font-size:48px;color:green"></i>
    </a>
</div>

<script>
    setTimeout(function() {
        document.getElementById("whatsappButton").classList.add("show");
    }, 5000); // Show after 5 seconds
</script>




<div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
<!--scrollup-->
    <div id="theme-toogle" class="switcher-button">
        <div class="switcher-button-inner-left"></div>
        <div class="switcher-button-inner"></div>
    </div>

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquary-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-bundle.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/imagesloaded-pkgd.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/venobox.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/meanmenu.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.isotope.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/swiper.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/split-type.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/gsap.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/scroll-trigger.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/scroll-smoother.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.carouselTicker.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/nice-select.js')}}"></script>
    <script src="{{ asset('assets/js/slider.js')}}"></script>
    <script src="{{ asset('assets/js/contact.js')}}"></script>
    <script src="{{ asset('assets/css/java.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>







</body>

</html>
