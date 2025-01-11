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
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
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
                        <a href="/"> Home </a>
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
                            <a href="/about" class="circle-button">
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
                                    <span>About Ardent Digital Trends</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Welcome to Ardent Digital Trends
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Established in September 2016, Ardent Digital Trends is a leading marketing consultancy
                                firm
                                based in Nairobi, Kenya. We specialize in helping businesses harness the power of
                                technology,
                                data, and strategy to achieve exceptional growth and results. With a commitment to
                                innovation
                                and measurable impact, we empower our clients to thrive in competitive markets. Our
                                mission is simple:
                                To deliver cutting-edge marketing solutions that drive ROI and foster long-term success.
                            </p>
                            <div class="icon-items-area">
                                <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <i class="icon-01"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Why Choose Us?</h3>
                                        <p>
                                            At Ardent Digital Trends, we combine expertise with a human touch to ensure
                                            every solution
                                            aligns with your unique goals. We’re not just about strategies; we’re about
                                            results. Here’s why
                                            businesses trust us:
                                        </p>

                                    </div>
                                </div>
                                <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <i class="icon-02"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Our Services</h3>
                                        <p>Our expertise spans across various services designed to propel your business
                                            forward:</p>

                                    </div>
                                </div>
                            </div>
                            <div class="about-button">
                                <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                                    <a href="/contact">
                                        <span class="theme-btn">ABOUT US MORE </span><span class="arrow-btn"><i
                                                class="fa-regular fa-arrow-up-right"></i></span></a>
                                </div>
                                {{-- <a href="/about" class="link-btn wow fadeInUp" data-wow-delay=".5s">EXPLORE
                                    MORE</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Founder Section Start -->
    <section class="founder-section fix section-padding pt-0 bg-cover"
        style="background-image: url('assets/img/testimonial/testimonial-bg.jpg')">
        <div class="container">
            <div class="founder-wrapper-2">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="founder-image">
                            <img src="assets/img/testimonial/03.png" alt="Founder Image"
                                class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s" />
                            {{-- <div class="rocket-shape">
                            <img src="assets/img/testimonial/rocket.png" alt="img" />
                        </div>
                        <div class="msg-shape float-bob-y">
                            <img src="assets/img/testimonial/msg.png" alt="img" />
                        </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="founder-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>Meet Our Founder</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Sheila Ombogo – Leading the way with 13+ years of marketing expertise
                                </h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                With over 13 years of marketing expertise spanning Africa, the Middle East, and Europe,
                                our founder is passionate about helping businesses achieve their potential. Having
                                worked with leading brands and startups alike, they bring a wealth of experience in:
                            </p>
                            <ul class="founder-expertise wow fadeInUp" data-wow-delay=".7s">
                                <li>Crafting data-driven marketing strategies.</li>
                                <li>Leveraging programmatic advertising for optimal results.</li>
                                <li>Navigating digital transformation in various industries.</li>
                            </ul>
                            <p class="wow fadeInUp" data-wow-delay=".9s">
                                As a visionary leader, they’ve built Ardent Digital Trends into a trusted partner for
                                businesses looking to innovate, grow, and succeed.
                            </p>
                            <div class="connect-button wow fadeInUp" data-wow-delay="1s">
                                <a href="/contact" class="main-button">
                                    <span class="theme-btn">Connect With Us</span><span class="arrow-btn"><i
                                            class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Founder Section End -->

    <!-- Cta Counter Section Start -->
    <section class="cta-counter-section-3 fix section-bg section-padding bg-cover"
        style="background-image: url('assets/img/cta-counter-bg.jpg')">
        <div class="container">
            <div class="cta-counter-wrapper-2">
                <div class="section-title-area">
                    <div class="section-title">
                        <div class="sub-title bg-color-3 wow fadeInUp">
                            <span>Our Achievements</span>
                        </div>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            Make your marketing <br />
                            more effective with Ardent Digital Trends
                        </h2>
                    </div>
                    <div class="counter-box-area">
                        <div class="counter-text wow fadeInUp" data-wow-delay=".3s">
                            <h2><span class="count">500</span>+</h2>
                            <p>Projects Delivered</p>
                        </div>
                        <div class="counter-text wow fadeInUp" data-wow-delay=".5s">
                            <h2><span class="count">500</span>+</h2>
                            <p>Happy Clients</p>
                        </div>
                        <div class="counter-text wow fadeInUp" data-wow-delay=".7s">
                            <h2><span class="count">24</span></h2>
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
    <!-- Cta Counter Section End -->

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
                <h2>Our Values</h2>
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
                                We operate with transparency and honesty, always prioritizing our client's interests
                                while maintaining ethical practices in everything we do.
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
                            <h3>Innovation</h3>
                            <p>
                                We believe in leveraging the latest technology and trends, especially AI and data
                                analytics, to drive innovative solutions that meet our clients’ unique needs.
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
                            <h3>Collaboration</h3>
                            <p>
                                We work closely with our clients, understanding their goals and challenges to build
                                customized solutions. Together, we achieve success.
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
                            <h3>Excellence</h3>
                            <p>
                                We strive for excellence in everything we do. From strategy to execution, our goal is to
                                provide results that exceed expectations and drive meaningful business growth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Values Section End -->




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
