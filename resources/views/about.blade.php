<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Gramentheme" />
    <meta name="description" content="Digtek - Digital Marketing Agency Html Template" />
    <!-- ======== Page title ============ -->
    <title>Digtek - Digital Marketing Agency Html Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.svg" />
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css" />
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <!--<< Color.css >>-->
    <link rel="stylesheet" href="assets/css/color.css" />
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    @include('loader')

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-regular fa-arrow-up"></i>
    </button>

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    @include('header')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg')">
        <div class="left-shape">
            <img src="assets/img/breadcrumb-shape.png" alt="img" />
        </div>
        <div class="right-shape">
            <img src="assets/img/breadcrumb-shape-2.png" alt="img" />
        </div>
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">about us</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html"> Home </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>about us</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Section Start -->
    <section class="about-section-2 fix section-padding">
        <div class="bg-shape">
            <img src="assets/img/about/bg-shape-2.png" alt="img" />
        </div>
        <div class="right-shape float-bob-x">
            <img src="assets/img/case-studies/right-shaape.png" alt="img" />
        </div>
        <div class="container">
            <div class="about-wrapper-2">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/img/about/01.jpg" alt="img" class="wow img-custom-anim-left"
                                data-wow-duration="1.5s" data-wow-delay="0.3s" />
                            <div class="box-shape float-bob-y">
                                <img src="assets/img/about/box-shape-2.png" alt="img" />
                            </div>
                            <div class="gap-shape float-bob-x">
                                <img src="assets/img/about/grap-2.png" alt="img" />
                            </div>
                            <a href="about.html" class="circle-button">
                                <i class="fa-regular fa-arrow-up-right"></i>
                                <span class="text-circle">
                                    <img src="assets/img/about/white-text.png" alt="img" />
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>About Company</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Let’s make something awesome together
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                We're not just another agency – we're your digital growth
                                partners. With years of industry experience and a passion for
                                innovation, our team is dedicated to delivering measurable
                                results propel your business forward.
                            </p>
                            <div class="icon-items-area">
                                <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <i class="icon-01"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Analytics Reporting</h3>
                                        <p>
                                            Collaboratively formulate principle capital.
                                            Progressively evolve user
                                        </p>
                                    </div>
                                </div>
                                <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <i class="icon-02"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Data Guard Sentinel</h3>
                                        <p>
                                            Collaboratively formulate principle capital.
                                            Progressively evolve user
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-button">
                                <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                                    <a href="about.html">
                                        <span class="theme-btn">ABOUT US MORE </span><span class="arrow-btn"><i
                                                class="fa-regular fa-arrow-up-right"></i></span></a>
                                </div>
                                <a href="about.html" class="link-btn wow fadeInUp" data-wow-delay=".5s">EXPLORE
                                    MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Counter Section Start -->
    <section class="cta-counter-section-3 fix section-bg section-padding bg-cover"
        style="background-image: url('assets/img/cta-counter-bg.jpg')">
        <div class="container">
            <div class="cta-counter-wrapper-2">
                <div class="section-title-area">
                    <div class="section-title">
                        <div class="sub-title bg-color-3 wow fadeInUp">
                            <span>Counter</span>
                        </div>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            Make your marketing <br />
                            more effective
                        </h2>
                    </div>
                    <div class="counter-box-area">
                        <div class="counter-text wow fadeInUp" data-wow-delay=".3s">
                            <h2><span class="count">19.4</span>K</h2>
                            <p>Projects Done</p>
                        </div>
                        <div class="counter-text wow fadeInUp" data-wow-delay=".5s">
                            <h2><span class="count">95.2</span>K</h2>
                            <p>Happy Clients</p>
                        </div>
                        <div class="counter-text wow fadeInUp" data-wow-delay=".7s">
                            <h2><span class="count">142.6</span>K</h2>
                            <p>Team Members</p>
                        </div>
                    </div>
                </div>
                <div class="cta-video-image wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <img src="assets/img/cta-video.jpg" alt="img" />
                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-icon video-popup">
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section Start -->
    <section class="value-section fix section-padding section-bg pt-0">
        <div class="value-shape">
            <img src="assets/img/value-shape.png" alt="img" />
        </div>
        <div class="value-shape-2">
            <img src="assets/img/value-shape-2.png" alt="img" />
        </div>
        <div class="container">
            <div class="section-title text-center wow fadeInUp" data-wow-delay=".3s">
                <h2>Our values</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="value-box-items">
                        <div class="icon">
                            <i class="icon-01"></i>
                        </div>
                        <div class="content">
                            <h3>Integrity</h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively
                                evolve user revolutionary hosting services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="value-box-items">
                        <div class="icon">
                            <i class="icon-02"></i>
                        </div>
                        <div class="content">
                            <h3>Simplicity</h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively
                                evolve user revolutionary hosting services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="value-box-items">
                        <div class="icon">
                            <i class="icon-03"></i>
                        </div>
                        <div class="content">
                            <h3>Performance</h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively
                                evolve user revolutionary hosting services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="value-box-items">
                        <div class="icon">
                            <i class="icon-04"></i>
                        </div>
                        <div class="content">
                            <h3>Integrity</h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively
                                evolve user revolutionary hosting services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section-3 section-padding pt-0">
        <div class="overlay-shape">
            <img src="assets/img/testimonial/overlay-shape.png" alt="img" />
        </div>
        <div class="overlay-shape-2">
            <img src="assets/img/testimonial/overlay-shape-2.png" alt="img" />
        </div>
        <div class="left-shape">
            <img src="assets/img/testimonial/left-shape.png" alt="img" />
        </div>
        <div class="right-shape">
            <img src="assets/img/testimonial/right-shape.png" alt="img" />
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title bg-color-2 wow fadeInUp">
                    <span>TESTIMONIALS</span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    What our happy customers <br />
                    are saying
                </h2>
            </div>
            <div class="testimonial-wrapper-3 style-2">
                <div class="client-1">
                    <img src="assets/img/testimonial/06.png" alt="img" />
                </div>
                <div class="client-2">
                    <img src="assets/img/testimonial/07.png" alt="img" />
                </div>
                <div class="client-3">
                    <img src="assets/img/testimonial/08.png" alt="img" />
                </div>
                <div class="client-4">
                    <img src="assets/img/testimonial/09.png" alt="img" />
                </div>
                <div class="swiper testimonial-slider-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="icon">
                                    <img src="assets/img/testimonial/quote.png" alt="img" />
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                    Mauris nullam the as integer quam dolor nunc semper.
                                    faucibus pulvinar neque. The as Suscipit tristique mauris
                                    consectetur platea.
                                </p>
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="assets/img/testimonial/05.png" alt="img" />
                                    </div>
                                    <div class="content">
                                        <h6>Esther Howard</h6>
                                        <span>Trader, USA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="icon">
                                    <img src="assets/img/testimonial/quote.png" alt="img" />
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                    Mauris nullam the as integer quam dolor nunc semper.
                                    faucibus pulvinar neque. The as Suscipit tristique mauris
                                    consectetur platea.
                                </p>
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="assets/img/testimonial/05.png" alt="img" />
                                    </div>
                                    <div class="content">
                                        <h6>Esther Howard</h6>
                                        <span>Trader, USA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="icon">
                                    <img src="assets/img/testimonial/quote.png" alt="img" />
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                    Mauris nullam the as integer quam dolor nunc semper.
                                    faucibus pulvinar neque. The as Suscipit tristique mauris
                                    consectetur platea.
                                </p>
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="assets/img/testimonial/05.png" alt="img" />
                                    </div>
                                    <div class="content">
                                        <h6>Esther Howard</h6>
                                        <span>Trader, USA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <!--<< All JS Plugins >>-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Circle Progress Js >>-->
    <script src="assets/js/circle-progress.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
</body>

</html>
