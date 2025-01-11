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
                        <a href="/"> Home </a>
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
                <!-- AI-Powered Marketing and Digital Transformation -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-1.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="/contact">AI-Powered Marketing and Digital Transformation</a></h4>
                            <p>
                                Stay ahead with cutting-edge AI tools and marketing automation. We help businesses adapt
                                and thrive in the digital age by integrating technology into their marketing processes.
                            </p>
                            <a href="/contact" class="link-btn">Learn More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing Audit & Strategy -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-2.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="/contact">Digital Marketing Audit & Strategy</a></h4>
                            <p>
                                Get a comprehensive analysis of your digital marketing efforts. We identify gaps,
                                uncover opportunities, and develop data-driven strategies that deliver ROI.
                            </p>
                            <a href="/contact" class="link-btn">Learn More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Media Buying -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-3.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="/contact">Media Buying</a></h4>
                            <p>
                                Maximize your reach with targeted ads via: Programmatic Ads, Meta (Facebook &
                                Instagram), TikTok, LinkedIn.
                            </p>
                            <a href="/contact" class="link-btn">Learn More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <!-- ROI-Driven Marketing Strategies -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-4.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="/contact">ROI-Driven Marketing Strategies</a></h4>
                            <p>
                                Our campaigns focus on what matters most – results. From lead generation to conversions,
                                we deliver strategies that make a tangible impact on your bottom line.
                            </p>
                            <a href="/contact" class="link-btn">Learn More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Sales & Marketing Team Training -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-5.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="/contact">Sales & Marketing Team Training</a></h4>
                            <p>
                                Empower your teams to work smarter, not harder. We train sales and marketing
                                professionals to target audiences effectively and close deals faster with actionable
                                insights.
                            </p>
                            <a href="/contact" class="link-btn">Learn More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <!-- New Market Penetration -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-box-items mt-0">
                        <div class="icon">
                            <img src="assets/img/service/icon-6.png" alt="img" />
                        </div>
                        <div class="content">
                            <h4><a href="/contact">New Market Penetration</a></h4>
                            <p>
                                Expand your horizons with expert strategies for entering new markets. Whether local or
                                international, we’ll help you make a strong, lasting impression.
                            </p>
                            <a href="/contact" class="link-btn">Learn More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

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
                                <h3>Total Projects</h3>
                                <p>Our work spans across various industries, helping clients achieve their goals through
                                    effective and tailored solutions. We bring meaningful impact to each project,
                                    ensuring that each one aligns with our clients' vision and drives success.</p>
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
                                    <span>Target Audience</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    We work with a wide range of clients to help them scale
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Our services are ideal for various business types. Whether you're a small business, a
                                corporate giant, or a dynamic startup, we tailor strategies to fit your specific needs.
                                We provide actionable insights and scalable solutions to drive growth and success.
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
                                        Small to Medium Enterprises (SMEs): Looking to scale their marketing efforts.
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                fill="#6A47ED" />
                                        </svg>
                                        Corporate Brands: Seeking expert strategies to maintain a competitive edge.
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
                                        Startups: Navigating new markets or building a solid foundation for growth.
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                fill="#6A47ED" />
                                        </svg>
                                        Nonprofits & Institutions: Seeking partnerships for social impact and
                                        innovation.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->



    <!-- Success Stories Call-to-Action Section Start -->
    <section class="cta-contact-section pt-0 fix section-padding">
        <div class="container">
            <div class="cta-contact-wrapper bg-cover" style="background-image: url('assets/img/cta-contact-bg.jpg')">
                <div class="section-title mb-0">
                    <div class="sub-title bg-color-3 wow fadeInUp">
                        <span>SUCCESS STORIES</span>
                    </div>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Case Study: Lead Generation Success <br />
                        Regional SME in the Financial Sector
                    </h2>
                </div>
                <div class="cta-content wow fadeInUp" data-wow-delay=".5s">
                    <p class="text-white">
                        Increased qualified leads by 300% through targeted programmatic advertising. Learn more about
                        how we helped our clients achieve exceptional results.
                    </p>
                </div>
                <div class="main-button wow fadeInUp" data-wow-delay=".7s">
                    <a href="/contact">
                        <span class="theme-btn">Talk to a Specialist</span><span class="arrow-btn"><i
                                class="fa-regular fa-arrow-up-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Success Stories Call-to-Action Section End -->




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
