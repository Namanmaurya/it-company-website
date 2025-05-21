<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>python</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="typewriter">
            <span>P</span>
            <span>y</span>
            <span>t</span>
            <span>h</span>
            <span>o</span>
            <span>n</span>
        </div>
    </div>

    <!-- include_header -->
    <?php include("header.php") ?>

    <main>
        <!-- intro_section -->
        <section id="intro">
            <div class="container-fluid">
                <div class="section-title">
                    <h2>Analyse Your Expenses On Every Device</h2>
                    <p>Track, manage, and optimize your spending habits from anywhere, anytime</p>
                </div>

            </div>
        </section>
        <!-- exp_main_section -->
        <section class="Why_analyze_exp scroll-fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="why_analyze_img">
                            <img src="images\service\analyze_your_expence.webp" alt="why analyze image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Why Should You Analyse Your Expenses?</h2>
                        <p>Analyzing expenses ensures efficient resource allocation, reduces waste, improves ROI, and
                            helps make data-driven decisions for sustainable software and mobile app development.</p>
                        <p> Analyzing expenses allows you to identify unnecessary costs, prioritize features,
                            improve operational efficiency, and ensure the app stays within budget while maximizing
                            performance and user value.</p>

                    </div>
                </div>
            </div>

        </section>
        <!-- feature_section -->
        <section class="features_section scroll-fade-up">
            <div class="container">
                <h2>Key Features</h2>
                <div class="row">
                    <div class="col-md-4">
                        <h5>Real-Time Sync</h5>
                        <p>Instant updates across all devices.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Smart Categories</h5>
                        <p>Auto-categorize your expenses intelligently.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Insights & Charts</h5>
                        <p>Visualize spending with graphs.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- check_respons_section -->
        <div class="section checkresponsiveness scroll-fade-up">
            <div class="container-fluid text-center">
                <h2 class="theme_headerh2">Access From Any Device</h2>
                <p class="theme_pra_text">Whether you're on a laptop, tablet, or mobile, your data stays synced and
                    secure.</p>
                <div class="device-buttons">
                    <button class="theme_button btn_bg" onclick="changeDevice('mobile')"><i
                            class="fa-solid fa-mobile-screen-button"></i></button>
                    <button class="theme_button btn_bg" onclick="changeDevice('tablet')"><i
                            class="fa-solid fa-tablet-screen-button"></i></button>
                    <button class="theme_button btn_bg" onclick="changeDevice('laptop')"><i
                            class="fa-solid fa-laptop-code"></i></button>
                    <button class="theme_button btn_bg" onclick="changeDevice('desktop')"><i
                            class="fa-solid fa-desktop"></i></button>
                </div>

                <div id="devicePreview" class="device-preview desktop">
                    <iframe src="https://www.obiculetechnologies.com/" id="previewIframe"></iframe>
                </div>
            </div>
        </div>
        <!-- mobile_app_pricing-section -->
        <section class="pricing-section text-center scroll-fade-up">
            <div class="container">
                <h2 class="theme_headerh2">Our Pricing Plans for Mobile App Development</h2>
                <p class="theme_pra_text">Choose the plan that fits your business needs. All plans include expert
                    consultation, modern UI/UX design, and post-launch support.</p>

                <div class="row g-4">
                    <!-- Starter Plan -->
                    <div class="col-md-4">
                        <div class=" pricing-card">
                            <h4 class="pri_card-title">Starter Plan</h4>
                            <h3 class="card_title_h3">$1,999</h3>
                            <ul class="list-unstyled">
                                <li>✔ 1 Platform (iOS or Android)</li>
                                <li>✔ Up to 5 App Screens</li>
                                <li>✔ Basic UI/UX Design</li>
                                <li>✔ 2 Revisions</li>
                                <li>✔ Basic Backend Integration</li>
                                <li>✔ 2 Weeks Delivery</li>
                                <li>✔ Email Support</li>
                            </ul>
                            <p class="theme_pra_text">✅ Great for startups looking to test an idea!</p>
                        </div>
                    </div>

                    <!-- Professional Plan -->
                    <div class="col-md-4">
                        <div class=" pricing-card">
                            <h4 class="pri_card-title">Professional Plan</h4>
                            <h3 class="card_title_h3">$4,999</h3>
                            <ul class="list-unstyled">
                                <li>✔ Both iOS & Android</li>
                                <li>✔ Up to 12 App Screens</li>
                                <li>✔ Custom UI/UX Design</li>
                                <li>✔ 5 Revisions</li>
                                <li>✔ API & Database Integration</li>
                                <li>✔ Admin Panel</li>
                                <li>✔ Push Notifications</li>
                                <li>✔ 1 Month Delivery</li>
                                <li>✔ Priority Support</li>
                            </ul>
                            <p class="theme_pra_text">⭐ Most popular choice for scaling!</p>

                        </div>
                    </div>

                    <!-- Enterprise Plan -->
                    <div class="col-md-4">
                        <div class="pricing-card">
                            <h4 class="pri_card-title">Enterprise Plan</h4>
                            <h3 class="card_title_h3">$9,999+</h3>
                            <ul class="list-unstyled">
                                <li>✔ Unlimited Screens</li>
                                <li>✔ Advanced Custom UI/UX</li>
                                <li>✔ Scalable Cloud Backend</li>
                                <li>✔ Custom Admin Dashboard</li>
                                <li>✔ Real-Time Features</li>
                                <li>✔ Security & Compliance</li>
                                <li>✔ Performance Optimization</li>
                                <li>✔ Dedicated Project Manager</li>
                                <li>✔ Ongoing Maintenance & Support</li>
                            </ul>
                            <p class="theme_pra_text">🚀 Tailored to enterprises or high-growth apps!</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- website_pricing_section -->
        <section class="ty_of_main scroll-fade-up">
            <div class="container text-center">
                <h2 class="mb-5 theme_headerh2">Website Responsiveness Pricing</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                <h5>Mobile</h5>
                                <p class="theme_pra_text">Responsive design for mobile phones (375px)</p>
                                <h6>$1,000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="fa-solid fa-tablet-screen-button"></i>
                                <h5>Tablet</h5>
                                <p class="theme_pra_text">Responsive layout for tablets (768px)</p>
                                <h6>$1,500</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="fa-solid fa-laptop-code"></i>
                                <h5>Laptop</h5>
                                <p class="theme_pra_text">Responsive layout for laptops (1024px)</p>
                                <h6>$2,000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="fa-solid fa-desktop"></i>
                                <h5>Desktop</h5>
                                <p class="theme_pra_text">Responsive design for desktop (1280px)</p>
                                <h6>$2,500</h6>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <h2 class="theme_headerh3">Total (All Devices): $7,000</h2>
                        <p class="theme_pra_text">(You can select individual devices based on your budget)</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact_section -->
        <section id="contact" class="cta-section scroll-fade-up">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="cta-text">
                            <h3>Ready to build your custom software?</h3>
                            <p>Let’s talk about how we can bring your vision to life.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cta-action">
                            <a href="contact.php" class="btn-light">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
        <!-- include_footer -->
    <?php include("footer.php") ?>
         <!-- scrollup_btn -->
    <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top"><i class="fa-solid fa-up-long"></i></button>
        <!-- bootstrap_js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

          <!-- main_js -->
    <script src="js/script.js"></script>

    <script>
        window.addEventListener("load", () => {

            setTimeout(() => {
                const preloader = document.getElementById("preloader");
                preloader.style.opacity = "0";
                preloader.style.visibility = "hidden";
                preloader.style.transition = "opacity 0.5s ease";
            }, 1200);
        });
    </script>
     
    <script>
        function changeDevice(device) {
            const preview = document.getElementById('devicePreview');
            preview.className = 'device-preview ' + device;
        }
    </script>

</body>

</html>