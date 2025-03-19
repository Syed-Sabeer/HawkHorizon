@extends('layouts.master')


@section('main-container')



<section class="page-header" data-background="{{ asset('assets/img/bg-img/page-header-bg.jpg')}}">
    <div class="overlay"></div>
    <div class="shapes">
        <div class="shape shape-1"><img src="{{ asset('assets/img/shapes/page-header-shape-1.png')}}" alt="shape"></div>
        <div class="shape shape-2"><img src="{{ asset('assets/img/shapes/page-header-shape-2.png')}}" alt="shape"></div>
        <div class="shape shape-3"><img src="{{ asset('assets/img/shapes/page-header-shape-3.png')}}" alt="shape"></div>
    </div>
    <div class="container">
        <div class="page-header-content text-center">
            <h1 class="title">About Our Company</h1>
            <h4 class="sub-title"><a class="home" href="/">Home </a><span></span><a class="inner-page" href="about.html"> About Us</a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->

<section class="about-section-2 pt-130 pb-130">
    <div class="container">
        <div class="row about-wrap-2 gy-lg-0 gy-4 align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="about-img-box">
                    <div class="shapes">
                        <img class="shape shape-1" src="{{ asset('assets/img/shapes/about-shape-1.png')}}" alt="about">
                        <img class="shape shape-2" src="{{ asset('assets/img/shapes/about-shape-2.png')}}" alt="about">
                    </div>
                    <div class="img-1 reveal">
                        <img src="{{ asset('assets/img/images/about-img-2.jpg')}}" alt="about">
                    </div>
                    <div class="img-2 reveal">
                        <img src="{{ asset('assets/img/images/about-img-3.jpg')}}" alt="about">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="about-content-2">
                    <div class="section-heading">
                        <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">About Our Company</h4>
                        <h2 class="section-title" data-text-animation data-split="word" data-duration="1">The Hawk Horizon Digital Difference.</h2>
                        <p>
                            At Hawk Horizon Digital, we understand that every business is unique and requires a tailored marketing approach. That’s why we take the time to analyze your business, goals, and target audience to craft a personalized strategy that drives results. Our team of experts stays ahead of industry trends and innovations, ensuring your business maintains a competitive edge. With our expertise and passion for digital marketing, we are committed to delivering exceptional results that exceed your expectations.
                        </p>
                    </div>
                    <div class="about-items">
                        <div class="about-item">
                            <div class="icon"><img src="{{ asset('assets/img/icon/about-1.png')}}" alt="icon"></div>
                            <div class="content"><h4 class="title">Professional Creative <br>Team Members</h4></div>
                        </div>
                        <div class="about-item">
                            <div class="icon"><img src="{{ asset('assets/img/icon/about-2.png')}}" alt="icon"></div>
                            <div class="content"><h4 class="title">Provide Market Standard <br>Service to Client’s</h4></div>
                        </div>
                    </div>
                    <a href="#" class="rr-primary-btn">Get Started Now <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ about-section -->

<section class="process-section-2 fade-wrapper">
    <div class="container">
        <div class="section-heading text-center">
            <span class="bg-text">Studio</span>
            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5">Work Process</h4>
            <h2 class="section-title" data-text-animation data-split="word" data-duration="1">
                Quality Service For Growth <br>Your Branding Identity
            </h2>
        </div>
        <div class="row gy-lg-0 gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="process-box fade-top">
                    <span class="number">01</span>
                    <h3 class="title">Client Consultation</h3>
                    <p>Understanding client requirements, goals, and expectations to create a tailored strategy for success.</p>
                    <a href="about.html" class="read-more">Read More<i class="fa-sharp fa-regular fa-chevrons-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="process-box fade-top">
                    <span class="number">02</span>
                    <h3 class="title">Research and Analysis</h3>
                    <p>Conducting thorough market research and data analysis to identify opportunities and develop effective solutions.</p>
                    <a href="about.html" class="read-more">Read More<i class="fa-sharp fa-regular fa-chevrons-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="process-box fade-top">
                    <span class="number">03</span>
                    <h3 class="title">Project Revisions & Launch</h3>
                    <p>Refining the project through iterations and ensuring a seamless launch for maximum impact and efficiency.</p>
                    <a href="about.html" class="read-more">Read More<i class="fa-sharp fa-regular fa-chevrons-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ./ process-section-2 -->

<section class="counter-section counter-2">
    <div class="container">
        <div class="row gy-lg-0 gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <h3 class="title"><span class="odometer" data-count="10">0</span></h3>
                    <p>Years of <br>Experience</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <h3 class="title"><span class="odometer" data-count="18">0</span></h3>
                    <p>Sillded <br> Perforamce</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <h3 class="title"><span class="odometer" data-count="32">0</span></h3>
                    <p>Visited <br> Conference</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <h3 class="title"><span class="odometer" data-count="1">0</span>k</h3>
                    <p>Years of <br>Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ counter-section -->

<div class="running-text running-3">
    <div class="bg-img" data-background="assets/img/bg-img/running-bg.jpg"></div>
    <div class="carouselTicker carouselTicker-nav" data-speed="fast">
        <ul class="text-anim carouselTicker__list scroller__inner inner-3">
            <li>Latest Projects</li>
            <li class="stroke-text">Web Development</li>
            <li>Latest Projects</li>
            <li class="stroke-text">Web Development</li>
            <li>Latest Projects</li>
            <li class="stroke-text">Web Development</li>
            <li>Latest Projects</li>
            <li class="stroke-text">Web Development</li>
        </ul>
    </div>
</div>
<!-- ./ running-text -->

<section class="about-section-5 pt-130 pb-130">
    <div class="container">
        <div class="row gy-lg-0 gy-4">
            <div class="col-lg-6">
                <div class="about-content-5">
                    <div class="section-heading">
                        <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">About Company</h4>
                        <h2 class="section-title" data-text-animation data-split="word" data-duration="1">
                            Committed to Excellence for Local & Global Clients
                        </h2>
                    </div>
                    <div class="about-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Our Mission</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Our Vision</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Our Goal</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <h3 class="title">Empowering Businesses with Digital Solutions</h3>
                                <p class="mb-20">Our mission is to provide cutting-edge digital solutions that help businesses establish a strong online presence. We focus on creativity, innovation, and seamless user experiences to drive growth.</p>
                                <p class="mb-0">Through strategic design and technology, we aim to transform ideas into impactful digital realities.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <h3 class="title">Shaping the Future of Digital Innovation</h3>
                                <p class="mb-20">Our vision is to be a global leader in digital transformation, continuously evolving to meet the ever-changing needs of businesses worldwide. We strive to set new benchmarks in quality and customer satisfaction.</p>
                                <p class="mb-0">By embracing technology and innovation, we aim to create a more connected and efficient digital world.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <h3 class="title">Driving Success Through Excellence</h3>
                                <p class="mb-20">Our goal is to deliver high-quality digital solutions that enhance brand identity, increase engagement, and drive measurable results. We prioritize efficiency, creativity, and customer-centric approaches in all our projects.</p>
                                <p class="mb-0">With a focus on long-term success, we aim to empower businesses to thrive in the digital age.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img-wrap-5">
                    <div class="shapes">
                        <div class="shape shape-1"><img src="{{ asset('assets/img/shapes/about-shape-4.png')}}" alt="shape"></div>
                        <div class="shape shape-2"><img src="{{ asset('assets/img/shapes/about-shape-5.png')}}" alt="shape"></div>
                    </div>
                    <div class="about-img reveal">
                        <img class="img-1" src="{{ asset('assets/img/images/about-img-8.png')}}" alt="img">
                    </div>
                    <div class="about-img-2 reveal">
                        <img class="img-2" src="{{ asset('assets/img/images/about-img-9.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ./ about-section -->

<section class="team-section fade-wrapper">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5">Team Members</h4>
            <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Our Expert Team Would Like <br>To Hear From You!</h2>
        </div>
        <div class="row gy-lg-0 gy-5">
            <div class="col-lg-3 col-md-6">
                <div class="team-item fade-top">
                    <div class="team-thumb">
                        <div class="gradient-color"></div>
                        <img src="{{ asset('assets/img/team/team-1.png')}}" alt="team">
                        <ul class="team-social-2">
                            <li class="facebook">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title"><a href="team-details.html">Charlotte Amitina</a></h3>
                        <span>Ui/Ux Designer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item fade-top">
                    <div class="team-thumb">
                        <div class="gradient-color"></div>
                        <img src="{{ asset('assets/img/team/team-2.png')}}" alt="team">
                        <ul class="team-social-2">
                            <li class="facebook">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title"><a href="team-details.html">William Edward</a></h3>
                        <span>Project Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item fade-top">
                    <div class="team-thumb">
                        <div class="gradient-color"></div>
                        <img src="{{ asset('assets/img/team/team-3.png')}}" alt="team">
                        <ul class="team-social-2">
                            <li class="facebook">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title"><a href="team-details.html">Hannah Chloe</a></h3>
                        <span>Product Designer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item fade-top">
                    <div class="team-thumb">
                        <div class="gradient-color"></div>
                        <img src="{{ asset('assets/img/team/team-4.png')}}" alt="team">
                        <ul class="team-social-2">
                            <li class="facebook">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title"><a href="team-details.html">Maiselan Willam</a></h3>
                        <span>Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ team-section -->

<section class="testimonial-section pt-130 pb-130 fade-wrapper">
    <div class="container">
        <div class="section-heading heading-3 text-center">
            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5">Testimonials</h4>
            <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Clients feedback</h2>
        </div>
        <div class="row gy-lg-0 gy-4 testi-wrap justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="testi-item item-3 text-center fade-top">
                    <div class="testi-thumb">
                        <img src="{{ asset('assets/img/testi/testi-author-1.png')}}" alt="img">
                    </div>
                    <div class="testi-content">
                        <h3 class="author">Daniel Joseph <span>Writter</span></h3>
                        <p>Curabitur accumsan nec aliquam mauris placat primis lacinia egestas congue facilisis ligula leo sociosqu consequat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="testi-item item-3 text-center fade-top">
                    <div class="testi-thumb">
                        <img src="{{ asset('assets/img/testi/testi-author-3.png')}}" alt="img">
                    </div>
                    <div class="testi-content">
                        <h3 class="author">Victoria Madison <span>Writter</span></h3>
                        <p>Curabitur accumsan nec aliquam mauris placat primis lacinia egestas congue facilisis ligula leo sociosqu consequat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="testi-item item-3 mb-0 text-center fade-top">
                    <div class="testi-thumb">
                        <img src="{{ asset('assets/img/testi/testi-author-2.png')}}" alt="img">
                    </div>
                    <div class="testi-content">
                        <h3 class="author">Nicholas Thomas <span>Writter</span></h3>
                        <p>Curabitur accumsan nec aliquam mauris placat primis lacinia egestas congue facilisis ligula leo sociosqu consequat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ testimonial-section -->

@endsection