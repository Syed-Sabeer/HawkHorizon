<div id="preloader">
    <div class="loading" data-loading-text="Hawk Horizon" style="font-size: 40px;"></div>
</div>
<!-- ./ preloader -->

   <!-- header-area-start -->
   <header class="header header-7 sticky-active">
    <div class="primary-header">
        <div class="primary-header-inner">
            <div class="header-logo d-lg-block">
                <a href="index">
                    <img class="logo-dark" src="{{ asset('assets/img/logo/logo-2.png')}}" alt="Logo">
                   <img class="logo-light" src="{{ asset('assets/img/logo/logo-2.png')}}" alt="Logo">
                 <img class="logo-light-2" src="{{ asset('assets/img/logo/logo-3.png')}}" alt="Logo">
                </a>
            </div>
            <div class="header-menu-wrap">
                <div class="mobile-menu-items">
                    <ul>
                        <li class="">
                            <!-- mega-menu -->
                            <a href="{{ route('home') }}">Home</a>
                            <!-- <ul>
                                    <li><a href="index">Web Design</a></li>
                                    <li><a href="index-2">Creative Studio</a></li>
                                    <li><a href="index-3">Web Development</a></li>
                                    <li><a href="index-4">Modern Agency</a></li>
                                    <li><a href="index-5">It Solution</a></li>
                                    <li><a href="index-6">Digital Agency</a></li>
                                    <li><a href="index-7">Corporate Agency</a></li>
                                    <li><a href="index-8">Web Agency</a></li>
                                    <li><a href="index-9">Creative Agency</a></li>
                                    <li><a href="index-10">Digital Studio</a></li>
                                    <li><a href="index-11">Startup Agency</a></li>
                                    <li><a href="index-12">It Studio</a></li>
                                </ul> -->
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <!-- <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="about">About</a></li>
                                    <li><a href="team">Team</a></li>
                                    <li><a href="team-details">Team Details</a></li>
                                    <li><a href="project">Portfolio</a></li>
                                    <li><a href="project-details">Portfolio Details</a></li>
                                    <li><a href="pricing">Pricing Plans</a></li>
                                    <li><a href="faq">Faq</a></li>
                                    <li><a href="error">404 Error</a></li>
                                </ul>
                            </li> -->
                        <!-- <li class="menu-item-has-children">
                                <a href="service">Services</a>
                                <ul>
                                    <li><a href="service">Service</a></li>
                                    <li><a href="service-details">Service Details</a></li>
                                </ul>
                            </li> -->
                        <li class="menu-item-has-children">
                            <a href="{{ route('service') }}">Services</a>
                            <ul>
                                <li><a href="{{ route('service.webdesigndev') }}">WEB DESIGN & DEVELOPMENT</a></li>
                                <li><a href="{{ route('service.seo') }} ">Search Engine Optimization</a></li>
                                <li><a href="{{ route('service.socialmediamarketing') }}">Social Media Marketing</a></li>
                                <li><a href="{{ route('service.googleads') }}">Google Ads</a></li>
                                <li><a href="email-marketing">Email Marketing</a></li>
                                <li><a href="graphic-designing">Graphic Designing</a></li>
                                <li><a href="content-writing">Content Writing</a></li>
                                <li><a href="google-my-business">Google My Business</a></li>
                                <li><a href="e-commerce-website">E-Commerce Website</a></li>

                                <!-- <li><a href="service-details">Service Details</a></li> -->
                            </ul>
                        </li>
                        <!-- <li><a href="blog-grid">Blog</a></li> -->
                        <li><a href="{{ route('contact') }}">Contact</a></li>

                        <!-- <li class="menu-item-has-children">
                                <a href="shop">Shop</a>
                                <ul>
                                    <li><a href="shop">Shop</a></li>
                                    <li><a href="shop-details">Shop Details</a></li>
                                    <li><a href="cart">Cart</a></li>
                                    <li><a href="wishlist">Wishlist</a></li>
                                    <li><a href="checkout">Checkout</a></li>
                                </ul>
                            </li> -->
                        <!-- <li class="menu-item-has-children">
                                <a href="blog-grid">Blog</a>
                                <ul>
                                    <li><a href="blog-grid">Blog Grid</a></li>
                                    <li><a href="blog-grid-2">Blog list</a></li>
                                    <li><a href="blog-details">Blog Details</a></li>
                                </ul>
                            </li> -->

                    </ul>
                </div>
            </div>
            <!-- /.header-menu-wrap -->
            <div class="header-right-wrap">
                <div class="header-right">
                    <div class="search-icon dl-search-icon">
                        <i class="fa-regular fa-magnifying-glass"></i>
                    </div>
                    <div class="sidebar-icon">
                        <button class="sidebar-trigger open">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2C0 0.89543 0.895431 0 2 0H7C8.10457 0 9 0.895431 9 2V7C9 8.10457 8.10457 9 7 9H2C0.89543 9 0 8.10457 0 7V2Z" fill="currentColor"/>
                                <path d="M0 14C0 12.8954 0.895431 12 2 12H7C8.10457 12 9 12.8954 9 14V19C9 20.1046 8.10457 21 7 21H2C0.89543 21 0 20.1046 0 19V14Z" fill="currentColor"/>
                                <path d="M12 2C12 0.89543 12.8954 0 14 0H19C20.1046 0 21 0.895431 21 2V7C21 8.10457 20.1046 9 19 9H14C12.8954 9 12 8.10457 12 7V2Z" fill="currentColor"/>
                                <path d="M12 14C12 12.8954 12.8954 12 14 12H19C20.1046 12 21 12.8954 21 14V19C21 20.1046 20.1046 21 19 21H14C12.8954 21 12 20.1046 12 19V14Z" fill="currentColor"/>
                            </svg>
                        </button>
                    </div>
                    <div class="header-btn">
                        <a href="contact" class="rr-primary-btn">Let's Talk <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- /.header-right -->
            </div>
        </div>
        <!-- /.primary-header-inner -->
    </div>
</header>
<!-- /.Main Header -->



<div id="sidebar-area" class="sidebar-area">
    <button class="sidebar-trigger close">
        <svg class="sidebar-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" width="16px" height="12.7px" viewBox="0 0 16 12.7"
            style="enable-background: new 0 0 16 12.7" xml:space="preserve">
            <g>
                <rect x="0" y="5.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.1569 7.5208)" width="16"
                    height="2"></rect>
                <rect x="0" y="5.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 6.8431 -3.7929)" width="16"
                    height="2"></rect>
            </g>
        </svg>
    </button>
    <div class="side-menu-content">
        <div class="side-menu-logo">
            <a class="dark-img" href="index"><img src="{{ asset('assets/img/logo/logo-2.png')}}" alt="logo"></a>
           <a class="light-img" href="index"><img src="{{ asset('assets/img/logo/logo-3.png')}}" alt="logo"></a>
        </div>
        <div class="side-menu-wrap"></div>
        <div class="side-menu-about">
            <div class="side-menu-header">
                <h3>About Us</h3>
            </div>
            <p>At Hawk Horizon Digital, we understand that every business is unique and requires a tailored marketing approach. That’s why we take the time to analyze your business, goals, and target audience to craft a personalized strategy that drives results. Our team of experts stays ahead of industry trends and innovations, ensuring your business maintains a competitive edge. With our expertise and passion for digital marketing, we are committed to delivering exceptional results that exceed your expectations.</p>
            <a href="contact" class="rr-primary-btn">Contact Us</a>
        </div>
        <div class="side-menu-contact">
            <div class="side-menu-header">
                <h3>Contact Us</h3>
            </div>
            <ul class="side-menu-list">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <p>For GMB 7901 4TH ST N STE 19630 ST. PETERSBURG, FL. US 33702 </p>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:+000123456789">+1(267)3158273</a>
                </li>
                <li>
                    <i class="fas fa-envelope-open-text"></i>
                    <a href="mailto:info@hawkhorizon.com">info@hawkhorizon.com</a>
                </li>
            </ul>
        </div>
        <!-- <ul class="side-menu-social">
            <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="g-plus"><a href="#"><i class="fab fa-fab fa-google-plus"></i></a></li>
        </ul> -->
    </div>
</div>
<!--/.sidebar-area-->