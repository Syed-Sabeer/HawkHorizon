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
                <h1 class="title">Portfolio</h1>
                <h4 class="sub-title"><a class="home" href="index.html">Home </a><span></span><a class="inner-page" href="project.html"> Portfolio</a></h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="case-study pt-130 pb-130 fade-wrapper">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="cs-item fade-top">
                        <div class="cs-thumb">
                            <img src="{{ asset('assets/img/images/port-1.webp')}}" alt="img">
                            <a class="cs-btn" href="project-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                        <div class="cs-content">
                            <span class="number">01</span>
                            <h3 class="title"><a href="project-details.html">Medical Application Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cs-item fade-top">
                        <div class="cs-thumb">
                            <img src="{{ asset('assets/img/images/port-2.webp')}}" alt="img">
                            <a class="cs-btn" href="project-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                        <div class="cs-content">
                            <span class="number">02</span>
                            <h3 class="title"><a href="project-details.html">Dashboard App Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cs-item fade-top">
                        <div class="cs-thumb">
                            <img src="{{ asset('assets/img/images/port-3.webp')}}" alt="img">
                            <a class="cs-btn" href="project-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                        <div class="cs-content">
                            <span class="number">03</span>
                            <h3 class="title"><a href="project-details.html">Business Task Management</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cs-item fade-top">
                        <div class="cs-thumb">
                            <img src="{{ asset('assets/img/images/port-4.webp')}}" alt="img">
                            <a class="cs-btn" href="project-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                        <div class="cs-content">
                            <span class="number">04</span>
                            <h3 class="title"><a href="project-details.html">NFT Landing Page Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cs-item fade-top">
                        <div class="cs-thumb">
                            <img src="{{ asset('assets/img/images/port-5.webp')}}" alt="img">
                            <a class="cs-btn" href="project-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                        <div class="cs-content">
                            <span class="number">05</span>
                            <h3 class="title"><a href="project-details.html">Universe Landing Page Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cs-item fade-top">
                        <div class="cs-thumb">
                            <img src="{{ asset('assets/img/images/cs-img-6.png')}}" alt="img">
                            <a class="cs-btn" href="project-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                        <div class="cs-content">
                            <span class="number">06</span>
                            <h3 class="title"><a href="project-details.html">Payment App Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cs-item fade-top">
                        <div class="cs-thumb">
                            <img src="{{ asset('assets/img/images/port-7.webp')}}" alt="img">
                        </div>
                        <div class="cs-content">
                            <span class="number">07</span>
                            <h3 class="title">E-Commerce Website UI</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="cs-item fade-top">
                        <div class="cs-thumb">
                            <img src="{{ asset('assets/img/images/port-8.webp')}}" alt="img">
                        </div>
                        <div class="cs-content">
                            <span class="number">08</span>
                            <h3 class="title">AI Chatbot Interface</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="cs-item fade-top">
                        <div class="cs-thumb">
                            <img src="{{ asset('assets/img/images/port-9.webp')}}" alt="img">
                        </div>
                        <div class="cs-content">
                            <span class="number">09</span>
                            <h3 class="title">Travel Booking Platform</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ case-study -->

    @endsection