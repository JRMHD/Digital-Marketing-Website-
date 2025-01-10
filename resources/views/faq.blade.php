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
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">FAQ’s</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html"> Home </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>FAQ’s</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Faq Section Start -->
    <section class="faq-section section-padding">
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4 justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-content sticky-style">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>FAQ's</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Let’s make something awesome together
                                </h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                We're not just another agency – we're your digital growth
                                partners. With years of industry experience and a passion for
                                innovation, our team is dedicated to delivering measurable
                                results propel your business forward.
                            </p>
                            <ul class="faq-list">
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Top quality service
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".5s">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Intermodal Shipping
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-accordion-items">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                aria-controls="faq1">
                                                Why Is SEO Important For Small Business?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel
                                                tincidunt massa, quis semper odio.Mauris et mollis
                                                quam. Nullam fringilla erat id ante commodo maximus
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                How do I choose the best SEO Agency?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel
                                                tincidunt massa, quis semper odio.Mauris et mollis
                                                quam. Nullam fringilla erat id ante commodo maximus
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3"
                                                aria-expanded="false" aria-controls="faq3">
                                                Better Security And Faster Server?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel
                                                tincidunt massa, quis semper odio.Mauris et mollis
                                                quam. Nullam fringilla erat id ante commodo maximus
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4"
                                                aria-expanded="false" aria-controls="faq4">
                                                Deployment Within Few Minutes
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel
                                                tincidunt massa, quis semper odio.Mauris et mollis
                                                quam. Nullam fringilla erat id ante commodo maximus
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq5"
                                                aria-expanded="false" aria-controls="faq5">
                                                How to Install WordPress theme on cPanel?
                                            </button>
                                        </h5>
                                        <div id="faq5" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel
                                                tincidunt massa, quis semper odio.Mauris et mollis
                                                quam. Nullam fringilla erat id ante commodo maximus
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq6"
                                                aria-expanded="false" aria-controls="faq6">
                                                Better Security And Faster Server?
                                            </button>
                                        </h5>
                                        <div id="faq6" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel
                                                tincidunt massa, quis semper odio.Mauris et mollis
                                                quam. Nullam fringilla erat id ante commodo maximus
                                            </div>
                                        </div>
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
