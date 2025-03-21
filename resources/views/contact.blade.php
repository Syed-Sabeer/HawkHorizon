@extends('layouts.master')


@section('main-container')

<div id="smooth-wrapper">
    <div id="smooth-content">

    <section class="page-header" data-background="{{ asset('assets/img/bg-img/page-header-bg.jpg')}}">
        <div class="overlay"></div>
        <div class="shapes">
            <div class="shape shape-1"><img src="{{ asset('assets/img/shapes/page-header-shape-1.png')}}" alt="shape"></div>
            <div class="shape shape-2"><img src="{{ asset('assets/img/shapes/page-header-shape-2.png')}}" alt="shape"></div>
            <div class="shape shape-3"><img src="{{ asset('assets/img/shapes/page-header-shape-3.png')}}" alt="shape"></div>
        </div>
        <div class="container">
            <div class="page-header-content text-center">
                <h1 class="title">Contact Us</h1>
                <h4 class="sub-title"><a class="home" href="index.html">Home </a><span></span><a class="inner-page" href="contact.html"> Contact Us</a></h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="contact-section pt-130 pb-130">
        <div class="container">
            <div class="row gy-lg-0 gy-5">
                <div class="col-lg-5 col-md-12">
                    <div class="contact-content">
                        <div class="section-heading">
                            <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">Contact Us</h4>
                            <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Excited About The Project?
                                Please Get In Touch.</h2>
                            <!-- <p>Thank you for your interest in Attach Web Agency. We're excited to hear from you and discuss...</p> -->
                        </div>
                        <div class="contact-list">
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-light fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Main Office</h4>
                                    <p>5 Hillcrest dr Downingtown PA 19335.</p>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-light fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Florida Office</h4>
                                    <p>For GMB 7901 4TH ST N STE 19630 ST. PETERSBURG, FL. US 33702</p>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-light fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Canada Office</h4>
                                    <p>907 Stonebridge Ave, Mississauga, Ontario L5V, CA</p>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-light fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">United Kingdom Office</h4>
                                    <p>71-75 Shelton Street, London, England WC2H 9JQ,GB</p>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Phone Number</h4>
                                    <span><a href="tel:+65485965789">+1(267)3158273</a></span>
                                    <!-- <span><a href="mailto:hello@acadu.com">hello@acadu.com</a></span> -->
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-light fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Email Address</h4>
                                    <span>info@hawkhorizon.com</span>
                                    <!-- <span>Sunday & Saturday: 10:30 - 22:00</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="blog-contact-form form-2">
                        <div class="request-form">
                            <form action="mail.php" method="post" id="ajax_contact" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Email address*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone number*">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <div class="nice-select select-control form-control country" tabindex="0"><span class="current">Select Queary Topic</span><ul class="list"><li data-value="" class="option selected focus">Select Queary Topic</li><li data-value="vdt" class="option">Plan One</li><li data-value="can" class="option">Plan Two</li><li data-value="uk" class="option">Plan Three</li></ul></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item message-item">
                                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button id="submit" class="rr-primary-btn" type="submit">Submit Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ contact-section -->

    <div class="map-wrapper pb-130">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8826.923787362664!2d-118.27754354757262!3d34.03471770929568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1566525118697!5m2!1svi!2s" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <!-- ./ map-wrapper -->


    @endsection