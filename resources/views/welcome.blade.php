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

    <!-- Hero Section Start -->
    <section class="hero-section hero-2" style="background-image: url('assets/img/hero/hero-bg-2.png')">
        <div class="trophy-shape">
            <img src="assets/img/hero/trophy-shape.png" alt="img" />
        </div>
        <div class="left-shape">
            <img src="assets/img/hero/left-shape.png" alt="img" />
        </div>
        <div class="right-shape">
            <img src="assets/img/hero/right-shape.png" alt="img" />
        </div>
        <div class="rocket-shape float-bob-y">
            <img src="assets/img/hero/rocket-2.png" alt="img" />
        </div>
        <div class="container-fluid">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h6 class="wow fadeInUp">Ardent Digital Trends</h6>
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            Shaping Tomorrow’s Digital Landscape Today.
                        </h1>

                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            Our mission is simple: To deliver cutting-edge marketing solutions that drive ROI and foster
                            long-term success.
                        </p>
                        <div class="hero-button">
                            <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                                <a href="/about">
                                    <span class="theme-btn">EXPLORE MORE </span><span class="arrow-btn"><i
                                            class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                            {{-- <a href="/about" class="link-btn wow fadeInUp" data-wow-delay=".5s">EXPLORE MORE</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-image">
                        <img src="assets/img/hero/hero-image-2.png" alt="img" class="wow img-custom-anim-left"
                            data-wow-duration="1.5s" data-wow-delay="0.3s" />
                        <div class="bg-shape">
                            <img src="assets/img/hero/bg-shape-2.png" alt="img" />
                        </div>
                        <div class="box-shape">
                            <img src="assets/img/hero/box-shape.png" alt="img" />
                        </div>
                        <div class="gap-shape">
                            <img src="assets/img/hero/gap-box.png" alt="img" />
                        </div>
                        <div class="cursor-shape">
                            <img src="assets/img/hero/cursor.png" alt="img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-wrapper-2">
            <h4 class="brand-title">500 + Brands Trust Us</h4>
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/01.png" alt="img" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/02.png" alt="img" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/03.png" alt="img" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/04.png" alt="img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Service Section Start -->
    <section class="service-section fix section-padding">
        <div class="left-shape float-bob-y">
            <img src="assets/img/service/left-shape.png" alt="img" />
        </div>
        <div class="right-shape">
            <img src="assets/img/service/right-shape.png" alt="img" />
        </div>
        <div class="bg-shape">
            <img src="assets/img/service/bg-shape.png" alt="img" />
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="sub-title wow fadeInUp">
                        <span>Our Services</span>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        AI-Powered Marketing and Digital Transformation
                    </h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    Stay ahead with cutting-edge AI tools and marketing automation. We help businesses adapt and thrive
                    in the digital age by integrating technology into their marketing processes.
                </p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items"
                        style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; text-align: center; background-color: #fff; border: 1px solid #e5e5e5; border-radius: 10px; padding: 20px; height: 100%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="icon">
                            <img src="assets/img/service/icon-1.png" alt="img"
                                style="max-width: 80px; margin-bottom: 20px;" />
                        </div>
                        <div class="content"
                            style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <h4 style="font-size: 20px; margin: 10px 0;"><a href="/services">Digital
                                    Marketing Audit & Strategy</a></h4>
                            <p style="font-size: 14px; margin-bottom: 20px; line-height: 1.6;">
                                Get a comprehensive analysis of your digital marketing efforts. We identify gaps,
                                uncover opportunities, and develop data-driven strategies that deliver ROI.
                            </p>
                            <a href="/services" class="link-btn" style="margin-top: auto;">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-box-items"
                        style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; text-align: center; background-color: #fff; border: 1px solid #e5e5e5; border-radius: 10px; padding: 20px; height: 100%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="icon">
                            <img src="assets/img/service/icon-2.png" alt="img"
                                style="max-width: 80px; margin-bottom: 20px;" />
                        </div>
                        <div class="content"
                            style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <h4 style="font-size: 20px; margin: 10px 0;"><a href="/services">Media
                                    Buying</a></h4>
                            <p style="font-size: 14px; margin-bottom: 20px; line-height: 1.6;">
                                Maximize your reach with targeted ads via Programmatic Ads, Meta (Facebook & Instagram),
                                TikTok, and LinkedIn.
                            </p>
                            <a href="/services" class="link-btn" style="margin-top: auto;">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-box-items"
                        style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; text-align: center; background-color: #fff; border: 1px solid #e5e5e5; border-radius: 10px; padding: 20px; height: 100%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="icon">
                            <img src="assets/img/service/icon-3.png" alt="img"
                                style="max-width: 80px; margin-bottom: 20px;" />
                        </div>
                        <div class="content"
                            style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <h4 style="font-size: 20px; margin: 10px 0;"><a href="/services">ROI-Driven
                                    Marketing Strategies</a></h4>
                            <p style="font-size: 14px; margin-bottom: 20px; line-height: 1.6;">
                                Our campaigns focus on what matters most – results. From lead generation to conversions,
                                we deliver strategies that make a tangible impact on your bottom line.
                            </p>
                            <a href="/services" class="link-btn" style="margin-top: auto;">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section fix section-padding" style="background-image: url('assets/img/about/about-bg.png')">
        <div class="left-shape float-bob-y">
            <img src="assets/img/about/left-shape.png" alt="img" />
        </div>
        <div class="container">
            <div class="brand-wrapper">
                <h4 class="brand-title">500 + Brands Trust Us</h4>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="assets/img/brand/01.png" alt="img" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="assets/img/brand/02.png" alt="img" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="assets/img/brand/03.png" alt="img" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="assets/img/brand/04.png" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/img/about/01.png" alt="img" class="wow img-custom-anim-left"
                                data-wow-duration="1.5s" data-wow-delay="0.3s" />
                            <div class="bg-shape">
                                <img src="assets/img/about/bg-shape.png" alt="img" />
                            </div>
                            <div class="grap-shape float-bob-x">
                                <img src="assets/img/about/grap.png" alt="img" />
                            </div>
                            <div class="box-shape float-bob-y">
                                <img src="assets/img/about/box-shape.png" alt="img" />
                            </div>
                            <div class="emoji-shape">
                                <img src="assets/img/about/emoji.png" alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>ABOUT ARDENT</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Welcome to Ardent Digital Trends
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Established in September 2016, Ardent Digital Trends is a leading marketing consultancy
                                firm based in Nairobi, Kenya. We specialize in helping businesses harness the power of
                                technology, data, and strategy to achieve exceptional growth and results. With a
                                commitment to innovation and measurable impact, we empower our clients to thrive in
                                competitive markets.
                            </p>
                            <div class="circle-progress-bar-wrapper">
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".3s">
                                    <div class="circle-bar" data-percent="85" data-duration="2000"></div>
                                    <div class="content">
                                        <h6>
                                            Paid search <br />
                                            marketing
                                        </h6>
                                    </div>
                                </div>
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".5s">
                                    <div class="circle-bar" data-percent="95" data-duration="2000"></div>
                                    <div class="content">
                                        <h6>
                                            Search engine <br />
                                            optimization
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                                <a href="/about">
                                    <span class="theme-btn"> EXPLORE MORE </span><span class="arrow-btn"><i
                                            class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Case Study Section Start -->
    <section class="case-study-section fix section-padding">
        <div class="overlay-shape">
            <img src="assets/img/case-studies/overlay-shape.png" alt="img" />
        </div>
        <div class="left-shape float-bob-x">
            <img src="assets/img/case-studies/left-shape.png" alt="img" />
        </div>
        <div class="right-shape float-bob-x">
            <img src="assets/img/case-studies/right-shaape.png" alt="img" />
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="sub-title wow fadeInUp">
                        <span>Case Studies</span>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Empowering Businesses with Tech-Driven <br />
                        Marketing Solutions
                    </h2>
                </div>
                <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                    <a href="/about">
                        <span class="theme-btn"> LEARN MORE </span>
                        <span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="case-study-wrapper">
                <div class="row">
                    <div class="col-xxl-6 wow fadeInUp">
                        <div class="case-study-box-items">
                            <div class="thumb">
                                <img src="assets/img/case-studies/01.jpg" alt="img" />
                                <div class="post-box-items">
                                    <ul>
                                        <li>
                                            <a href="/services">AI-Powered Marketing
                                                <i class="fa-regular fa-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="/services">Digital Transformation
                                                <i class="fa-regular fa-arrow-up-right"></i></a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="/services">Media Buying
                                                <i class="fa-regular fa-arrow-up-right"></i></a>
                                        </li>
                                        <li>
                                            <a href="/services">New Market Penetration
                                                <i class="fa-regular fa-arrow-up-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="project-title">
                                    <a href="/services">
                                        <img src="assets/img/case-studies/icon.png" alt="img" />
                                        Tailored Marketing Strategies
                                    </a>
                                </h3>
                                <span class="number">01</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="main-box">
                            <div class="box wow fadeInUp">
                                <div class="title-items">
                                    <h3>
                                        <a href="/services">Digital Audits</a>
                                    </h3>
                                    <span class="number">02</span>
                                </div>
                                <span class="number-hover">02</span>
                                <div class="project-content">
                                    <h3>
                                        <a href="/services">Comprehensive Digital Audits</a>
                                    </h3>
                                    <p>
                                        Identify gaps and opportunities with data-driven insights to maximize your ROI.
                                    </p>
                                    <a href="/services" class="link-btn">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                            <div class="box bg-1 wow fadeInUp wow" data-wow-delay=".2s">
                                <div class="title-items">
                                    <h3>
                                        <a href="/services">Sales</a>
                                    </h3>
                                    <span class="number">03</span>
                                </div>
                                <span class="number-hover">03</span>
                                <div class="project-content">
                                    <h3>
                                        <a href="/services">Sales & Marketing Training</a>
                                    </h3>
                                    <p>
                                        Empower your teams with actionable insights and strategies to close deals
                                        faster.
                                    </p>
                                    <a href="/services" class="link-btn">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                            <div class="box bg-2 active wow fadeInUp wow" data-wow-delay=".4s">
                                <div class="title-items">
                                    <h3><a href="/services">Tech-Driven</a></h3>
                                    <span class="number">04</span>
                                </div>
                                <span class="number-hover">04</span>
                                <div class="project-content">
                                    <h3><a href="/services">Tech-Driven Innovation</a></h3>
                                    <p>
                                        Stay ahead with AI tools, marketing automation, and data analytics.
                                    </p>
                                    <a href="/services" class="link-btn">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                            <div class="box bg-3 wow fadeInUp wow" data-wow-delay=".6s">
                                <div class="title-items">
                                    <h3><a href="/services">Market Research</a></h3>
                                    <span class="number">05</span>
                                </div>
                                <span class="number-hover">05</span>
                                <div class="project-content">
                                    <h3><a href="/services">Market Research & Reporting</a></h3>
                                    <p>
                                        Make data-informed decisions with expert market analysis and insights.
                                    </p>
                                    <a href="/services" class="link-btn">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Audience Section Start -->
    <section class="audience-section fix section-padding bg-cover"
        style="background-image: url('assets/img/audience-bg.jpg')">
        <div class="container">
            <div class="audience-wrapper">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="audience-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-3 wow fadeInUp">
                                    <span class="wow fadeInUp">Client Success Stories</span>
                                </div>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                    Marketing Strategies That Drive Results
                                </h2>
                            </div>
                            <div class="client-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="client-logo">
                                    <img src="assets/img/hero/logo.png" alt="img" />
                                </div>
                                <div class="client-img">
                                    <img src="assets/img/hero/client.png" alt="img" />
                                    <div class="star-icon">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <span>450+ positive reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="audience-right">
                            <div class="audience-img wow fadeInUp" data-wow-delay=".3s">
                                <img src="assets/img/audience-img.jpg" alt="img" />
                            </div>
                            <div class="counter-box-area">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".5s">
                                    <h2><span class="count">500</span>+</h2>
                                    <div class="content">
                                        <h4>Successful Projects</h4>
                                        <p>
                                            Over 500 projects delivered with measurable impact and client satisfaction.
                                        </p>
                                    </div>
                                </div>
                                <div class="counter-box wow fadeInUp" data-wow-delay=".7s">
                                    <h2><span class="count">300</span>M+</h2>
                                    <div class="content">
                                        <h4>Marketing Investment</h4>
                                        <p>
                                            Over $300 million invested in cutting-edge strategies and marketing
                                            solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding">
        <div class="container">
            <div class="testimonial-wrapper">
                <div class="section-title-area">
                    <div class="section-title">
                        <div class="sub-title bg-color-2 wow fadeInUp">
                            <span>TESTIMONIALS</span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            What our awesome <br />
                            customers say
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".5s">
                        At Ardent Digital Trends, we believe that great marketing starts with understanding your
                        audience.
                        <br />
                        Our founder’s vision is to craft strategies that resonate deeply, ensuring that every
                        piece of content and every campaign connects with your target market and drives meaningful
                        engagement.
                    </p>

                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-4">
                        <div class="testimonial-left wow fadeInUp" data-wow-delay=".3s">
                            <div class="client-img">
                                <img src="assets/img/testimonial/10.png" alt="img" />
                                <div class="content">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p>15k+(reviews)</p>
                                </div>
                            </div>
                            <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                                <button class="array-prev">
                                    <i class="fa-regular fa-arrow-left-long"></i>
                                </button>
                                <button class="array-next">
                                    <i class="fa-regular fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-8">
                        <div class="swiper testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="icon">
                                            <img src="assets/img/testimonial/icon.png" alt="img" />
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonial/01.png" alt="img" />
                                            <div class="shape-img">
                                                <img src="assets/img/testimonial/shape.png" alt="img" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="client-info">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <h5>Esther Wanjiru</h5>
                                                <span>Nursing Assistant - Nairobi, Kenya</span>
                                            </div>
                                            <p>
                                                "Working with Ardent Digital Trends was a game-changer for our business.
                                                Their strategies
                                                don’t just look good on paper – they deliver results!"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="icon">
                                            <img src="assets/img/testimonial/icon.png" alt="img" />
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonial/02.png" alt="img" />
                                            <div class="shape-img">
                                                <img src="assets/img/testimonial/shape.png" alt="img" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="client-info">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <h5>Ahmed Al-Farsi</h5>
                                                <span>Marketing Manager - Dubai, UAE</span>
                                            </div>
                                            <p>
                                                "The digital marketing audit and strategy were spot on. We saw a
                                                significant improvement in ROI, especially with our targeted campaigns
                                                across social media."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="icon">
                                            <img src="assets/img/testimonial/icon.png" alt="img" />
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonial/02.png" alt="img" />
                                            <div class="shape-img">
                                                <img src="assets/img/testimonial/shape.png" alt="img" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="client-info">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <h5>Lucas Pohlmann</h5>
                                                <span>Digital Marketer - Berlin, Germany</span>
                                            </div>
                                            <p>
                                                "We were able to scale our digital marketing efforts with their expert
                                                guidance. The media buying service gave us better targeting for our ad
                                                campaigns, and the results speak for themselves."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="icon">
                                            <img src="assets/img/testimonial/icon.png" alt="img" />
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonial/04.png" alt="img" />
                                            <div class="shape-img">
                                                <img src="assets/img/testimonial/shape.png" alt="img" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="client-info">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <h5>Oluwaseun Adebayo</h5>
                                                <span>Business Development Manager - Lagos, Nigeria</span>
                                            </div>
                                            <p>
                                                "The ROI-driven marketing strategies they implemented were exactly what
                                                we needed to boost sales and close deals faster. They truly understand
                                                what works in today's digital landscape."
                                            </p>
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
    <!-- Testimonial Section End -->


    <!-- Contact Section Start -->
    <section class="contact-section fix section-padding">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="sub-title bg-color-3 wow fadeInUp">
                        <span class="wow fadeInUp">Book a Consultation</span>
                    </div>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Let’s tailor a marketing strategy just for you
                    </h2>
                </div>
                <p class="white-text wow fadeInUp" data-wow-delay=".5s">
                    Book a 3.5-hour consultation session at Ksh 25,000. <br />
                    Choose your preferred time slot below.

                </p>
                <p class="white-text wow fadeInUp" data-wow-delay=".5s">
                    Available Time Slots:
                    <br />
                    • Morning: 9:00 AM - 12:30 PM
                    <br />
                    • Afternoon: 2:00 PM - 5:30 PM
                </p>
            </div>
            <div class="contact-wrapper">
                <div class="row g-4">
                    <div class="col-xl-6">
                        <div class="contact-form-area">
                            <h3>Book Your Consultation</h3>
                            <form action="#" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name"
                                                placeholder="Full Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="email" name="email" id="email"
                                                placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="number" name="number" id="number"
                                                placeholder="Phone Number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <!-- Date picker input field -->
                                            <input type="date" name="consultation_date" id="consultation_date"
                                                placeholder="Select Date" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <!-- Time picker input field -->
                                            <input type="time" name="consultation_time" id="consultation_time"
                                                placeholder="Select Time" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Message (optional)"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked="" />
                                            <label class="form-check-label" for="flexCheckChecked">
                                                I agree to the terms and conditions.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="theme-btn">
                                            Book Consultation
                                            <i class="fa-solid fa-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127641.16174540039!2d36.76499659864798!3d-1.3032076027568165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1736596305705!5m2!1sen!2ske"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                            <div class="contact-info-wrapper">
                                <h2>Contact Info</h2>
                                <div class="shape-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="39"
                                        viewBox="0 0 29 39" fill="none">
                                        <path d="M0 0L29 39V0H0Z" fill="#6A47ED" />
                                    </svg>
                                </div>
                                <div class="shape-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="39"
                                        viewBox="0 0 29 39" fill="none">
                                        <path d="M29 0L0 39V0H29Z" fill="#6A47ED" />
                                    </svg>
                                </div>
                                <div class="contact-info style2">
                                    <div class="icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            Nairobi,<br />
                                            Kenya
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info style2">
                                    <div class="icon">
                                        <i class="fa-regular fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a href="tel:+254 718 434829">+254 718 434829</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info style2 border-none">
                                    <div class="icon">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a
                                                href="mailto::info@ardentdigitaltrends.com">info@ardentdigitaltrends.com</a>
                                        </h3>
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
