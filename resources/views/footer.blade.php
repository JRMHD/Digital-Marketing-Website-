<!-- Cta Section Start -->
<section class="cta-section section-bg section-padding pb-0">
    <div class="rokect-shape float-bob-y">
        <img src="assets/img/rokect.png" alt="img" />
    </div>
    <div class="container">
        <div class="cta-wrapper bg-cover" style="background-image: url('assets/img/cta-bg.jpg')">
            <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <img src="\assets\img\user 2.png" alt="img" />
            </div>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Stay Connected With <br />
                Expert Marketing Strategies
            </h2>
            <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                <a href="/contact">
                    <span class="theme-btn"> Contact Us</span><span class="arrow-btn"><i
                            class="fa-regular fa-arrow-up-right"></i></span>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Footer Section Start -->
<section class="footer-section footer-bg fix">
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="/">
                                <img src="\assets\img\logo\adrent logo web 2.png" alt="img"
                                    style="width: 120px; height: auto;" />
                            </a>
                        </div>

                        <div class="footer-content">
                            <p>
                                Our mission is simple: To deliver cutting-edge marketing solutions that drive ROI and
                                foster long-term success.


                            </p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-tiktok"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Quick Links</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="/about">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="/services">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Our Services
                                </a>
                            </li>

                            <li>
                                <a href="/faq">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    FAQ’S
                                </a>
                            </li>
                            <li>
                                <a href="/contact">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Contact Us</h3>
                        </div>

                        <div class="footer-content">
                            <ul class="contact-info">
                                <li>
                                    <i class="fa-regular fa-envelope"></i>
                                    <a href="mailto:info@ardentdigitaltrends.com">info@ardentdigitaltrends.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <a href="tel:+254 718 434829">+254 718 434829</a>
                                </li>
                            </ul>
                            <div class="footer-input">
                                <input type="email" id="newsletter-email" placeholder="Your email address" required />
                                <meta name="csrf-token" content="{{ csrf_token() }}">

                                <button class="newsletter-btn" id="subscribe-btn" type="button">
                                    <i class="fa-regular fa-arrow-right-long"></i>
                                    <div id="newsletter-loading-spinner" style="display:none;"></div>
                                </button>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                                <label class="form-check-label" for="flexCheckChecked">
                                    I agree to the <a href="/contact">Privacy Policy.</a>
                                </label>
                            </div>
                            <!-- Feedback message section -->
                            <div id="newsletter-response" style="display:none;"></div>
                        </div>
                    </div>

                    <style>
                        /* Add these styles for the newsletter loader */
                        #newsletter-loading-spinner {
                            display: none;
                            border: 4px solid #f3f3f3;
                            border-top: 4px solid #3498db;
                            border-radius: 50%;
                            width: 20px;
                            height: 20px;
                            margin-left: 10px;
                            animation: spin 2s linear infinite;
                        }

                        @keyframes spin {
                            0% {
                                transform: rotate(0deg);
                            }

                            100% {
                                transform: rotate(360deg);
                            }
                        }
                    </style>
                    <script>
                        document.getElementById('subscribe-btn').addEventListener('click', function(event) {
                            event.preventDefault(); // Prevent default button behavior

                            const emailInput = document.getElementById('newsletter-email');
                            const subscribeButton = document.getElementById('subscribe-btn');
                            const spinner = document.getElementById('newsletter-loading-spinner');
                            const responseDiv = document.getElementById('newsletter-response');

                            // Validate email input
                            const email = emailInput.value;
                            if (!email) {
                                alert('Please enter your email address');
                                return;
                            }

                            // Show loader and hide the button text
                            spinner.style.display = 'inline-block';
                            subscribeButton.disabled = true;

                            // Prepare the data for the AJAX request
                            const formData = new FormData();
                            formData.append('email', email);
                            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content); // CSRF token

                            // Send AJAX request
                            fetch("{{ route('newsletter.subscribe') }}", {
                                    method: 'POST',
                                    body: formData,
                                })
                                .then(response => response.json())
                                .then(data => {
                                    spinner.style.display = 'none';
                                    subscribeButton.disabled = false;

                                    if (data.success) {
                                        responseDiv.style.display = 'block';
                                        responseDiv.innerHTML = `<p style="color: green;">${data.message}</p>`;
                                        emailInput.value = ''; // Clear the input field
                                    } else {
                                        responseDiv.style.display = 'block';
                                        responseDiv.innerHTML =
                                            `<p style="color: red;">There was an error processing your subscription. Please try again.</p>`;
                                    }
                                })
                                .catch(error => {
                                    spinner.style.display = 'none';
                                    subscribeButton.disabled = false;
                                    responseDiv.style.display = 'block';
                                    responseDiv.innerHTML =
                                        `<p style="color: red;">Something went wrong. Please try again later.</p>`;
                                });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                    © {{ now()->year }} by {{ config('app.name', 'Ardent') }}. Designed and developed by
                    <a href="https://jrmhd.tech" target="_blank" style="color: white;">Jrmhd Technologies</a>.
                </p>


                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="/contact"> Terms & Condition </a>
                    </li>
                    <li>
                        <a href="/contact"> Privacy Policy </a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#" id="scrollUp" class="scroll-icon">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
</section>
