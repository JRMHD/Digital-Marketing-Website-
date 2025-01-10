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
    <!-- Preloader Start -->
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
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Our Services</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html"> Home </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Service Section Start -->
    <section class="service-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-1.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="service-details.html">Digital Marketing</a></h4>
                            <p>
                                Lorem dolor amet consectetur read adipiscing any more elit.
                            </p>
                            <a href="service-details.html" class="link-btn">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-2.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="service-details.html">SEO Analytics</a></h4>
                            <p>
                                Lorem dolor amet consectetur read adipiscing any more elit.
                            </p>
                            <a href="service-details.html" class="link-btn">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-3.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="service-details.html">Social Marketing</a></h4>
                            <p>
                                Lorem dolor amet consectetur read adipiscing any more elit.
                            </p>
                            <a href="service-details.html" class="link-btn">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-4.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="service-details.html">Email Marketing</a></h4>
                            <p>
                                Lorem dolor amet consectetur read adipiscing any more elit.
                            </p>
                            <a href="service-details.html" class="link-btn">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-5.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4>
                                <a href="service-details.html">Social Media Marketing</a>
                            </h4>
                            <p>
                                Lorem dolor amet consectetur read adipiscing any more elit.
                            </p>
                            <a href="service-details.html" class="link-btn">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-6.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="service-details.html">Better audiences</a></h4>
                            <p>
                                Lorem dolor amet consectetur read adipiscing any more elit.
                            </p>
                            <a href="service-details.html" class="link-btn">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Start -->
    <section class="team-section fix section-padding bg-cover"
        style="background-image: url('assets/img/service/service-bg.jpg')">
        <div class="shape-img float-bob-y">
            <img src="assets/img/service/rocket-shape.png" alt="img" />
        </div>
        <div class="shape-img-2 float-bob-y">
            <img src="assets/img/service/right-shape-2.png" alt="img" />
        </div>
        <div class="container">
            <div class="team-wrapper style-4">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6">
                        <div class="results-left-items">
                            <div class="content">
                                <h2><span class="count">500</span>+</h2>
                                <h3>Total Project</h3>
                                <p>Lorem dolor amet consectetur adipiscing any more elit.</p>
                            </div>
                            <div class="thumb">
                                <img src="assets/img/service/gap-shape.png" alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="team-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>Best SEO results</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Let’s make something awesome together
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Every pleasure is to be welcomed and every pain avoided.
                                certain circumstances and owing to the claims welcomed and
                                every pain avoided certain circumstances
                            </p>
                            <div class="list-items wow fadeInUp" data-wow-delay=".3s">
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                fill="#6A47ED" />
                                        </svg>
                                        30-day money back guarantee
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                fill="#6A47ED" />
                                        </svg>
                                        Web site Marketing Solutions
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                fill="#6A47ED" />
                                        </svg>
                                        Unlimited Application
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                fill="#6A47ED" />
                                        </svg>
                                        24/7 system Monitoring
                                    </li>
                                </ul>
                            </div>
                            <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                                <a href="team.html">
                                    <span class="theme-btn"> EXPLORE MORE </span><span class="arrow-btn"><i
                                            class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section Start -->
    <section class="pricing-section section-padding">
        <div class="left-shape float-bob-y">
            <img src="assets/img/pricing-left.png" alt="img" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="pricing-content sticky-style">
                        <div class="section-title">
                            <div class="sub-title bg-color-2 wow fadeInUp">
                                <span>OUR PRICNG PLAN</span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Our awesome <br />
                                Pricing Plan
                            </h2>
                        </div>
                        <div class="pricing-tab-header mt-4 mt-md-0">
                            <div class="arrow-shape">
                                <img src="assets/img/arrow.png" alt="img" />
                            </div>
                            <ul class="nav" role="tablist">
                                <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                                    <a href="#monthly" data-bs-toggle="tab" class="nav-link active"
                                        aria-selected="true" role="tab">
                                        Monthly
                                    </a>
                                </li>
                                <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                    <a href="#yearly" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                        role="tab" tabindex="-1">
                                        Yearly
                                    </a>
                                </li>
                            </ul>
                            <div class="save-text">Save 25%</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="tab-content">
                        <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                            <div class="row g-4">
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="pricing-box-items">
                                        <div class="pricing-header">
                                            <div class="content">
                                                <h4>Premium Plans</h4>
                                                <h2>$99 <sub>/ Month</sub></h2>
                                            </div>
                                            <div class="icon">
                                                <img src="assets/img/cloud.png" alt="img" />
                                            </div>
                                        </div>
                                        <ul class="price-list">
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                    Storage</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Weekly
                                                    Backups</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Unlimited
                                                    Free
                                                    SSL</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 24/7 system
                                                    Monitoring</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Free Domain
                                                    ($9.99 value)</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i>
                                                    Dedicated IP
                                                    Address</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> 20+
                                                    Payment
                                                    Methods</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                        </ul>
                                        <div class="price-button">
                                            <a href="pricing.html" class="theme-btn">Get Started Now
                                                <i class="fa-regular fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="pricing-box-items style-2">
                                        <div class="pricing-header">
                                            <div class="content">
                                                <h4>Extended Plan</h4>
                                                <h2>$149 <sub>/ Month</sub></h2>
                                            </div>
                                            <div class="icon">
                                                <img src="assets/img/cloud.png" alt="img" />
                                            </div>
                                        </div>
                                        <ul class="price-list">
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                    Storage</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Weekly
                                                    Backups</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Unlimited
                                                    Free
                                                    SSL</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 24/7 system
                                                    Monitoring</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Free Domain
                                                    ($9.99 value)</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i>
                                                    Dedicated IP
                                                    Address</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> 20+
                                                    Payment
                                                    Methods</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                        </ul>
                                        <div class="price-button">
                                            <a href="pricing.html" class="theme-btn">Get Started Now
                                                <i class="fa-regular fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="yearly" class="tab-pane fade" role="tabpanel">
                            <div class="row g-4">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="pricing-box-items">
                                        <div class="pricing-header">
                                            <div class="content">
                                                <h4>Premium Plans</h4>
                                                <h2>$99 <sub>/ Month</sub></h2>
                                            </div>
                                            <div class="icon">
                                                <img src="assets/img/cloud.png" alt="img" />
                                            </div>
                                        </div>
                                        <ul class="price-list">
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                    Storage</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Weekly
                                                    Backups</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Unlimited
                                                    Free
                                                    SSL</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 24/7 system
                                                    Monitoring</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Free Domain
                                                    ($9.99 value)</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i>
                                                    Dedicated IP
                                                    Address</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> 20+
                                                    Payment
                                                    Methods</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                        </ul>
                                        <div class="price-button">
                                            <a href="pricing.html" class="theme-btn">Get Started Now
                                                <i class="fa-regular fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="pricing-box-items style-2">
                                        <div class="pricing-header">
                                            <div class="content">
                                                <h4>Extended Plan</h4>
                                                <h2>$149 <sub>/ Month</sub></h2>
                                            </div>
                                            <div class="icon">
                                                <img src="assets/img/cloud.png" alt="img" />
                                            </div>
                                        </div>
                                        <ul class="price-list">
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                    Storage</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Weekly
                                                    Backups</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Unlimited
                                                    Free
                                                    SSL</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> 24/7 system
                                                    Monitoring</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1"><i class="fa-regular fa-check"></i> Free Domain
                                                    ($9.99 value)</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i>
                                                    Dedicated IP
                                                    Address</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                            <li>
                                                <span class="price-1 color-2"><i class="fa-solid fa-xmark"></i> 20+
                                                    Payment
                                                    Methods</span>
                                                <span class="icon"><i
                                                        class="fa-regular fa-circle-question"></i></span>
                                            </li>
                                        </ul>
                                        <div class="price-button">
                                            <a href="pricing.html" class="theme-btn">Get Started Now
                                                <i class="fa-regular fa-arrow-right-long"></i></a>
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

    <!-- Cta Contact Section Start -->
    <section class="cta-contact-section pt-0 fix section-padding">
        <div class="container">
            <div class="cta-contact-wrapper bg-cover" style="background-image: url('assets/img/cta-contact-bg.jpg')">
                <div class="cta-image wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <img src="assets/img/contact-img.png" alt="img" />
                </div>
                <div class="section-title mb-0">
                    <div class="sub-title bg-color-3 wow fadeInUp">
                        <span>Contact US</span>
                    </div>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        24/7 Expert Hosting Support <br />
                        Our Customers Love
                    </h2>
                </div>
                <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                    <a href="contact.html">
                        <span class="theme-btn">Talk to a Specialist </span><span class="arrow-btn"><i
                                class="fa-regular fa-arrow-up-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding pt-0 bg-cover"
        style="background-image: url('assets/img/testimonial/testimonial-bg.jpg')">
        <div class="container">
            <div class="testimonial-wrapper-2">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-image">
                            <img src="assets/img/testimonial/03.png" alt="img" class="wow img-custom-anim-left"
                                data-wow-duration="1.5s" data-wow-delay="0.3s" />
                            <div class="rocket-shape">
                                <img src="assets/img/testimonial/rocket.png" alt="img" />
                            </div>
                            <div class="msg-shape float-bob-y">
                                <img src="assets/img/testimonial/msg.png" alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>TESTIMONILAS</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Your Marketing Solutions Happy Clients Says?
                                </h2>
                            </div>
                            <div class="swiper testimonial-slider-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-card-items">
                                            <div class="client-info">
                                                <div class="client-img">
                                                    <img src="assets/img/testimonial/04.png" alt="img" />
                                                </div>
                                                <div class="client-content">
                                                    <h5>Kathryn Murphy</h5>
                                                    <span>Web Designer</span>
                                                </div>
                                            </div>
                                            <p>
                                                There are many variations of passages of the Lorem
                                                Ipsum available, but the majority have suffered
                                                alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly
                                                believable.
                                            </p>
                                            <div class="icon">
                                                <img src="assets/img/testimonial/icon.png" alt="img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card-items">
                                            <div class="client-info">
                                                <div class="client-img">
                                                    <img src="assets/img/testimonial/04.png" alt="img" />
                                                </div>
                                                <div class="client-content">
                                                    <h5>Kathryn Murphy</h5>
                                                    <span>Web Designer</span>
                                                </div>
                                            </div>
                                            <p>
                                                There are many variations of passages of the Lorem
                                                Ipsum available, but the majority have suffered
                                                alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly
                                                believable.
                                            </p>
                                            <div class="icon">
                                                <img src="assets/img/testimonial/icon.png" alt="img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="array-button">
                                <button class="array-prev">
                                    <i class="fa-regular fa-arrow-up-long"></i>
                                </button>
                                <button class="array-next">
                                    <i class="fa-regular fa-arrow-down-long"></i>
                                </button>
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