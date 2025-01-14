<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="/" class="header-logo-2">
                            <img src="/assets/img/logo/ardent 2 web wbeb.png" alt="logo-img"
                                style="width: 120px; height: auto;" />
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Our mission is simple: To deliver cutting-edge marketing solutions that drive ROI and foster
                    long-term success.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Nairobi,Kenya</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@ardentdigitaltrends.com"><span
                                        class="mailto:info@ardentdigitaltrends.com">info@ardentdigitaltrends.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Mon-friday, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+254 718 434829">+254 718 434829</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4"></div>
                    <div class="main-button">
                        <a href="/contact">
                            <span class="theme-btn"> Get Started </span><span class="arrow-btn"><i
                                    class="fa-regular fa-arrow-up-right"></i></span></a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a
                            href="https://www.instagram.com/ardent_digital_trends?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61571367222923"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.tiktok.com/@ardent.digital.tr"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/ardent-digital-trends/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Section Start -->
<header id="header-sticky" class="header-1">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="logo">
                    <a href="/" class="header-logo">
                        <img src="/assets/img/logo/adrent logo web 2.png" alt="logo-img"
                            style="width: 120px; height: auto;" />
                    </a>
                    <a href="/" class="header-logo-2">
                        <img src="/assets/img/logo/ardent 2 web wbeb.png" alt="logo-img"
                            style="width: 120px; height: auto;" />
                    </a>
                </div>

                <div class="mean__menu-wrapper">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="active">
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/about">About</a>
                                </li>
                                <li>
                                    <a href="/services">Services</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <a href="#0" class="search-trigger search-icon"><i
                            class="fa-regular fa-magnifying-glass"></i></a>
                    <div class="main-button">
                        <a href="/contact">
                            <span class="theme-btn"> Get Started </span><span class="arrow-btn"><i
                                    class="fa-regular fa-arrow-up-right"></i></span></a>
                    </div>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Search Area Start -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get" id="search-form">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" id="search-input" placeholder="Search..." />
                </div>
                <button type="button" id="search-button" style="display: none;"></button>
            </form>
        </div>
    </div>
</div>

<!-- Highlight Styles -->
<style>
    .highlight {
        background-color: yellow;
        color: black;
        font-weight: bold;
    }
</style>

<script>
    document.getElementById('search-input').addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            performSearch();
        }
    });

    function performSearch() {
        // Clear previous highlights
        document.querySelectorAll('.highlight').forEach(el => {
            el.classList.remove('highlight');
        });

        const query = document.getElementById('search-input').value.toLowerCase();
        if (!query) return;

        // Search all text on the page
        const bodyText = document.body;
        const regex = new RegExp(`(${query})`, 'gi');

        let found = false;
        const walker = document.createTreeWalker(bodyText, NodeFilter.SHOW_TEXT, {
            acceptNode: function(node) {
                if (node.parentElement.tagName !== 'SCRIPT' && node.parentElement.tagName !== 'STYLE') {
                    return NodeFilter.FILTER_ACCEPT;
                }
            },
        });

        while (walker.nextNode()) {
            const node = walker.currentNode;

            if (node.nodeValue.toLowerCase().includes(query)) {
                found = true;

                // Wrap matching text in a span with highlight class
                const span = document.createElement('span');
                span.classList.add('highlight');
                const regexMatch = new RegExp(query, 'gi');
                span.innerHTML = node.nodeValue.replace(regexMatch, match => `<span class="highlight">${match}</span>`);

                const parent = node.parentNode;
                parent.replaceChild(span, node);
            }
        }

        // Scroll to the first match if found
        if (found) {
            const firstHighlight = document.querySelector('.highlight');
            firstHighlight.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        } else {
            alert('No matching text found on this page.');
        }
    }

    // Close search functionality
    document.getElementById('search-close').addEventListener('click', function() {
        // Clear search input and highlights
        document.getElementById('search-input').value = '';
        document.querySelectorAll('.highlight').forEach(el => {
            el.classList.remove('highlight');
        });
    });
</script>
