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



    <?php include("header.php") ?>

    <main>

        <section id="intro">
            <div class="container-fluid">
                <div class="section-title">
                    <h2>Analyse Your Expenses On Every Device</h2>
                    <p>Track, manage, and optimize your spending habits from anywhere, anytime</p>
                </div>

            </div>
        </section>

        <section class="Why_analyze_exp">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="why_analyze_img">
                            <img src="images\service\why_analyze_img.avif" alt="why analyze image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Why Should You Analyse Your Expenses?</h2>
                        <p>Understanding your financial flow helps you save better, reduce debt, and plan for the
                            future.</p>
                        <p> <strong>Tracks Spending Habits:</strong> Analyzing expenses reveals where your money goes,
                            helping you understand spending patterns and make adjustments to improve financial
                            discipline and savings.</p>
                        <p><strong>Identifies Wasteful Spending:</strong> Regular expense reviews highlight unnecessary
                            costs, allowing you to cut back on non-essential purchases and prioritize more meaningful or
                            necessary expenses.</p>
                        <p><strong>Improves Budgeting:</strong> With clear insights into your spending, you can create
                            realistic budgets that reflect your actual needs and help you manage your income more
                            efficiently.</p>

                    </div>
                </div>
            </div>

        </section>



        <section class="features_section">
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


        <div class="section checkresponsiveness">
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

                <div id="devicePreview" class="device-preview mobile">
                    <iframe src="https://www.obiculetechnologies.com/" id="previewIframe"></iframe>
                </div>
            </div>
        </div>

        <section class="ty_of_main">
            <div class="container text-center">
                <h2 class="mb-5 theme_headerh2">Website Responsiveness Pricing</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                <h5>Mobile</h5>
                                <p class="theme_pra_text">Responsive design for mobile phones (375px)</p>
                                <h6>₹1,000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="fa-solid fa-tablet-screen-button"></i>
                                <h5>Tablet</h5>
                                <p class="theme_pra_text">Responsive layout for tablets (768px)</p>
                                <h6>₹1,500</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="fa-solid fa-laptop-code"></i>
                                <h5>Laptop</h5>
                                <p class="theme_pra_text">Responsive layout for laptops (1024px)</p>
                                <h6>₹2,000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="fa-solid fa-desktop"></i>
                                <h5>Desktop</h5>
                                <p class="theme_pra_text">Responsive design for desktop (1280px)</p>
                                <h6>₹2,500</h6>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <h2 class="theme_headerh3">Total (All Devices): ₹7,000</h2>
                        <p class="theme_pra_text">(You can select individual devices based on your budget)</p>
                    </div>
                </div>
            </div>
        </section>



        <section id="contact" class="cta-section">
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

    <?php include("footer.php") ?>

    <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top"><i class="fa-solid fa-up-long"></i></button>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


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