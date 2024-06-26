<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Unleash the Potential of Flawless Operations with 100% Payment Reconciliation and Seamless Returns &amp; Claims Management \n Say goodbye to your accounting problems!! Emsera is your gateway to eCommerce financial &amp; Compliance mastery with the complete Tally Accounting setup and many more.">
    <!-- <meta name="theme-color" content="#00acc1" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMSera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,300;1,400&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/wave.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="wrapper" id="wrapper">
        <!-- Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('logo/Logo Color 2@300x.png') }}" alt="Your Logo" height="30"
                        class="d-inline-block align-top">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse justify-content-end font-400 collapse mt-2" id="navbarNav" style="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="service.html" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Service
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#services">Profitability Report for Your eCommerce
                                        Marketplace</a></li>
                                <li><a class="dropdown-item" href="#services">Inventory Loss Calculation</a></li>
                                <li><a class="dropdown-item" href="#services">Claim &amp; Dispute Management</a></li>
                                <li><a class="dropdown-item" href="#services">Demographic Sales Report</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="careers.html">Careers</a>
                        </li>
                        <li class="nav-item text-center">
                            <button class="btn btn-light text-dark d-inline-block" href="#" data-bs-toggle="modal"
                                data-bs-target="#queryFormModal">Request
                                a demo</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <main>
            <!-- hero section Start-->
            <section id="hero">
                <div class="hero-layout">
                    <div class="container">
                        <div class="row
                                justify-content-center">
                            <div class="col-md-12
                                    text-center">
                                <h2 class="display-2 text-shadow">
                                    <span
                                        style="font-family:
                                            'Great Vibes',
                                            cursive;">Welcome
                                        to </span>
                                    EMSera
                                </h2>
                                <br>
                                <h5 class="tagline-text
                                        font-400 text-shadow">
                                    Are you poised to
                                    redefine your
                                    e-commerce and
                                    multichannel
                                    business? EMSera is
                                    your ticket to
                                    soaring
                                    profitability,
                                    pinpoint accuracy,
                                    and operational
                                    brilliance.
                                </h5>
                                <br>
                                <h5 class="tagline-text
                                        font-400 text-shadow">
                                    Say goodbye to your
                                    accounting
                                    problems!! Emsera is
                                    your gateway to
                                    eCommerce financial
                                    &amp; Compliance mastery
                                    with the complete
                                    Tally Accounting
                                    setup and many more.
                                </h5>
                                <br>
                                <h5 class="tagline-text
                                        font-400 text-shadow">
                                    Unleash the
                                    Potential of
                                    Flawless Operations
                                    with 100% Payment
                                    Reconciliation and
                                    Seamless Returns &amp;
                                    Claims Management
                                </h5>
                                <br>
                            </div>
                            {{-- <div class="col-lg-3 col-md-6 mt-2 col-sm-6 mt-md-4">
                                <button data-bs-toggle="modal" data-bs-target="#queryFormModal"
                                    class="btn btn-outline-light w-100">Request
                                    a demo</button>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-2 col-sm-6 mt-md-4">
                                <a href="contact-us.html" class="btn btn-primary w-100">Contact
                                    Us Now</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="hero-wave">
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                        <defs>
                            <path id="gentle-wave" d="M-160 44c30 0 58-18
                                    88-18s
                                    58 18 88 18 58-18 88-18 58 18 88 18
                                    v44h-352z"></path>
                        </defs>
                        <g class="parallax">
                            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"></use>
                            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"></use>
                            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"></use>
                            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
                        </g>
                    </svg>
                </div>
            </section>
            <!-- hero section End -->
            <!-- What we Offer Start-->
            <section id="offer">
                <div class="container">
                    <h1 class="text-center pb-3">What we offer</h1>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6 col-lg-3">
                            <div class="offer-card">
                                <div class="offer-icon">
                                    <img src="{{ asset('assets/images/credit-card.png') }}" alt="">
                                </div>
                                <div class="offer-title">Payment Reconciliation </div>
                                <div class="offer-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dignissimos voluptas sunt est.</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="offer-card">
                                <div class="offer-icon">
                                    <img src="{{ asset('assets/images/credit-card.png') }}" alt="">
                                </div>
                                <div class="offer-title">Payment Reconciliation </div>
                                <div class="offer-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dignissimos voluptas sunt est.</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="offer-card">
                                <div class="offer-icon">
                                    <img src="{{ asset('assets/images/credit-card.png') }}" alt="">
                                </div>
                                <div class="offer-title">Payment Reconciliation </div>
                                <div class="offer-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dignissimos voluptas sunt est.</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="offer-card">
                                <div class="offer-icon">
                                    <img src="{{ asset('assets/images/credit-card.png') }}" alt="">
                                </div>
                                <div class="offer-title">Payment Reconciliation </div>
                                <div class="offer-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dignissimos voluptas sunt est.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- What we Offer End -->
            <!-- Market places Start-->
            <section id="marketplaces">
                <h1 class="text-center py-3">Marketplaces we supports</h1>
                <div class="d-flex justify-content-between swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex flex-column">
                            <img src="{{ asset('assets/images/marketplaces/amazon.png') }}" alt="">
                            <span class="text-justify text-capitalize">Amazon</span>
                        </div>
                        <div class="swiper-slide d-flex flex-column">
                            <img src="{{ asset('assets/images/marketplaces/myntra.png') }}" alt="">
                            <span class="text-justify text-capitalize">myntra</span>
                        </div>
                        <div class="swiper-slide d-flex flex-column">
                            <img src="{{ asset('assets/images/marketplaces/flipkart.png') }}" alt="">
                            <span class="text-justify text-capitalize">flipkart</span>
                        </div>
                        <div class="swiper-slide d-flex flex-column">
                            <img src="{{ asset('assets/images/marketplaces/meesho.png') }}" alt="">
                            <span class="text-justify text-capitalize">meesho</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Market places End -->
            <!-- Services Start-->
            <section id="services">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="py-2">Our Expertise</h1>
                                        <p>
                                            Whatever your eCommerce financial needs may be, EMSera is here to provide
                                            unwavering
                                            support. Our mission is to ensure that your business operates flawlessly
                                            from accounting
                                            and reconciliation to tax compliance and beyond.
                                        </p>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ODD CARD -->
                        <div class="col-md-12 service-container bg-light-grey">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6 text-center order-0 order-md-1">
                                        <img src="{{ asset('assets/images/sv1.png') }}" alt="">
                                    </div>
                                    <div class="col-md-6 order-1 order-md-0">
                                        <h4 class="py-md-4 py-3">
                                            Profitability Report for Your
                                            eCommerce Marketplace
                                        </h4>
                                        <p class="service-description">
                                            Platform revolutionizes sustainable shopping. With a vast selection
                                            of
                                            eco-friendly products, secure payment options, and swift, reliable
                                            delivery,
                                            we provide a seamless experience. Our round-the-clock customer
                                            support
                                            ensures your satisfaction.
                                        </p>
                                        <br>
                                        <a style="width: 200px;" href="service.html" class="btn btn-primary">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- EVEN CARD -->
                        <div class="col-md-12 service-container">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6 text-center order-0 order-md-0">
                                        <img src="{{ asset('assets/images/sv2.png') }}" alt="">
                                    </div>
                                    <div class="col-md-6 order-1 order-md-1 ">
                                        <h4 class="py-md-4 py-3">Inventory Loss Calculation</h4>
                                        <p class="service-description">
                                            Platform revolutionizes sustainable shopping. With a vast selection of
                                            eco-friendly products, secure payment options, and swift, reliable delivery,
                                            we provide a seamless experience. Our round-the-clock customer support
                                            ensures your satisfaction.
                                        </p>
                                        <br>
                                        <a style="width: 200px;" href="service.html" class="btn btn-primary">Read
                                            More</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-dark mt-3 w-100">
                                View More
                            </button>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Services End -->
            <!-- Testimonials Start-->
            <section>
                <div class="container-fluid py-5 bg-light-grey">
                    <h1 class="text-center">Testimonials</h1>
                    <div class="d-flex justify-content-between swiper mySwiper">
                        <div class="swiper-wrapper my-5">
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Albert Flores</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Ronald Richards</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Darrell Steward</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Darrell Steward</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Darrell Steward</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Darrell Steward</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Darrell Steward</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Darrell Steward</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Darrell Steward</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <box-icon type="solid" size="sm" color="white"
                                            name="quote-right"></box-icon>
                                    </div>
                                    <div class="testimonial-header">
                                        <img class="testimonial-image" src="{{ asset('assets/images/person.png') }}"
                                            alt="">
                                        <div>
                                            <div class="testimonial-title">Darrell Steward</div>
                                            <div class="testimonial-rating">
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star"></box-icon>
                                                <box-icon color="#543ab7" type="solid" name="star-half"></box-icon>
                                                <box-icon color="#543ab7" name="star"></box-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        “.. followed by some bogus content. Aenean commodo ligula egget dolor. Aenean
                                        massa. Cum sociis penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.”
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </section>
            <!-- Testimonials End -->
            <!-- Join Us Start-->
            <section id="join-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="display-1">Join Us</h1>
                            <p>Join hands with EMSera and watch your eCommerce venture flourish. Contact us today to
                                explore how our services can transform your financial landscape.</p>
                        </div>
                        <form class="col-md-6 query-form" method="POST" action="{{ route('contact-us') }}">
                            @csrf
                            <label for="">Company Name</label>
                            <input type="text" placeholder="eg : Example Tech" class="form-control">
                            <label for="">Phone</label>
                            <input type="text" placeholder="eg : 00000 00000" class="form-control">
                            <label for="">Email</label>
                            <input type="text" placeholder="eg : info@example.com" class="form-control">
                            <label for="">Marketplaces</label>
                            <input type="text" placeholder="eg : amazon , fipkart ,etc." class="form-control">
                            <label for="">No. Of Orders Per Month</label>
                            <input type="text" placeholder="eg : 225" class="form-control">
                            <br>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-light text-dark w-100">Request a
                                        demo</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-btn-group">
                                        <a href="#" class="icon-btn border-0">
                                            <box-icon name="facebook-circle" color="white"
                                                type="logo"></box-icon>
                                        </a>
                                        <a href="#" class="icon-btn border-0">
                                            <box-icon name="twitter" color="white" type="logo"></box-icon>
                                        </a>
                                        <a href="#" class="icon-btn border-0">
                                            <box-icon name="instagram" color="white" type="logo"></box-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </section>
            <!-- Join Us End -->
        </main>
        <!-- Footer Start-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="pt-5 pt-md-0">EMSera</h2>
                        <span class="text-light-grey">Unleash the Potential of Flawless Operations with 100% Payment
                            Reconciliation and Seamless Returns &amp; Claims Management.</span>
                    </div>
                    <div class="col-md-4">
                        <h5 class="pt-5 pt-md-0">CONTACT DETAILS</h5>
                        <div class="row py-2">
                            <div class="col-1">
                                <box-icon type="solid" name="envelope" color="white"></box-icon>
                            </div>
                            <a href="mailto:info@emsera.in"
                                class="col-9 text-light-grey footer-link">info@emsera.in</a>
                        </div>
                        <div class="row py-2">
                            <div class="col-1">
                                <box-icon type="solid" name="phone" color="white"></box-icon>
                            </div>
                            <a href="tel:+910000000000" class="col-9 text-light-grey footer-link">+91 00000 00000</a>
                        </div>
                        <div class="row py-2">
                            <div class="col-1">
                                <box-icon type="solid" name="map" color="white"></box-icon>
                            </div>
                            <a class="col-9 text-light-grey footer-link">4517 Washington Ave. Manchester, Kentucky
                                39495</a>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <h5 class="pt-5 pt-md-0">PAGES</h5>
                        <div class="row">
                            <a href="index.html" class="col-12 footer-link">Home</a>
                            <a href="service.html" class="col-12 footer-link">Services</a>
                            <a href="about-us.html" class="col-12 footer-link">About Us</a>
                            <a href="careers.html" class="col-12 footer-link">Careers</a>
                            <a href="#" class="col-12 footer-link">Privacy policy</a>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <hr>
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-8 text-small order-1 order-md-0 pt-3 copyright">© 2021 Copyright Company.com
                    </div>
                    <div class="col-md-4 text-right order-0 order-md-1">
                        <div class="icon-btn-group">
                            <a href="#" class="icon-btn">
                                <box-icon name="facebook-circle" color="white" type="logo"></box-icon>
                            </a>
                            <a href="#" class="icon-btn">
                                <box-icon name="twitter" color="white" type="logo"></box-icon>
                            </a>
                            <a href="#" class="icon-btn">
                                <box-icon name="instagram" color="white" type="logo"></box-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Footer End -->
    <!-- Query Modal Start-->
    <!-- Modal -->
    <div class="modal fade" id="queryFormModal" tabindex="-1" aria-labelledby="queryFormModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-primary">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="queryFormModalLabel">Please fill your details</h1>
                    <button type="button" class="icon-btn" data-bs-dismiss="modal" aria-label="Close">
                        <box-icon name="x" color="white"></box-icon>
                    </button>
                </div>
                <div class="modal-body pt-0">
                    <form class="query-form px-4 pt-0" method="POST" action="{{ route('contact-us') }}">
                        @csrf
                        <label for="">Company Name</label>
                        <input type="text" placeholder="eg : Example Tech" class="form-control">
                        <label for="">Phone</label>
                        <input type="text" placeholder="eg : 00000 00000" class="form-control">
                        <label for="">Email</label>
                        <input type="text" placeholder="eg : info@example.com" class="form-control">
                        <label for="">Marketplaces</label>
                        <input type="text" placeholder="eg : amazon , fipkart ,etc." class="form-control">
                        <label for="">No. Of Orders Per Month</label>
                        <input type="text" placeholder="eg : 225" class="form-control">
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-6 d-none d-md-block">
                                <div class="icon-btn-group">
                                    <a href="#" class="icon-btn border-0">
                                        <box-icon name="facebook-circle" color="white" type="logo"></box-icon>
                                    </a>
                                    <a href="#" class="icon-btn border-0">
                                        <box-icon name="twitter" color="white" type="logo"></box-icon>
                                    </a>
                                    <a href="#" class="icon-btn border-0">
                                        <box-icon name="instagram" color="white" type="logo"></box-icon>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-light text-dark w-100">Request a
                                    demo</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
            </div>
        </div>
    </div>
    <!-- Query Modal End-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                50: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>

</body>

</html>
