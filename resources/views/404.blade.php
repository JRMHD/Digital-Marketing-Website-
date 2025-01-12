<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Not Found | Return to Ardent Digital Trends</title>
    <meta name="description"
        content="Sorry, the page you're looking for cannot be found. Explore our digital marketing services, AI solutions, and consultation options at Ardent Digital Trends Nairobi.">
    <meta name="author" content="Ardent Digital Trends">

    <!-- Prevent Search Engines from Indexing 404 Page -->
    <meta name="robots" content="noindex,follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ardentdigitaltrends.com/404">
    <meta property="og:title" content="Page Not Found | Ardent Digital Trends">
    <meta property="og:description"
        content="Sorry, the page you're looking for cannot be found. Discover our digital marketing services and solutions instead.">
    <meta property="og:image" content="https://ardentdigitaltrends.com/assets/img/logo-og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ardentdigitaltrends.com/404">
    <meta property="twitter:title" content="Page Not Found | Ardent Digital Trends">
    <meta property="twitter:description"
        content="Sorry, the page you're looking for cannot be found. Discover our digital marketing services and solutions instead.">
    <meta property="twitter:image" content="https://ardentdigitaltrends.com/assets/img/logo-og-image.jpg">

    <!-- Additional Meta Tags -->
    <meta name="language" content="English">
    <meta name="geo.region" content="KE">
    <meta name="geo.placename" content="Nairobi">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/color.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Return to Homepage Script -->
    <script>
        // Redirect to homepage after 60 seconds
        setTimeout(function() {
            window.location.href = 'https://ardentdigitaltrends.com';
        }, 60000);
    </script>
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
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Page Not Found</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="/"> Home </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>Page Not Found</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Error Section Start -->
    <section class="Error-section section-padding fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="error-items">
                        <div class="error-image wow fadeInUp" data-wow-delay=".3s">
                            <img src="assets/img/404.png" alt="404 error illustration" />
                        </div>
                        <div class="error-content">
                            <h2 class="wow fadeInUp" data-wow-delay=".5s">
                                <span>Oops!</span> Page not found
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".3s">
                                Whoops, this is embarrassing. Looks like the page you were
                                looking for was not found.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                Redirecting to homepage in <span id="countdown" class="fw-bold text-primary">10</span>
                                seconds...
                            </p>
                            <div class="main-button justify-content-center wow fadeInUp" data-wow-delay=".5s">
                                <a href="/">
                                    <span class="theme-btn">BACK TO HOME</span>
                                    <span class="arrow-btn">
                                        <i class="fa-regular fa-arrow-up-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Countdown timer
            let timeLeft = 10;
            const countdownElement = document.getElementById('countdown');

            const countdown = setInterval(function() {
                timeLeft--;
                countdownElement.textContent = timeLeft;

                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    window.location.href = '/';
                }
            }, 1000);
        </script>
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
