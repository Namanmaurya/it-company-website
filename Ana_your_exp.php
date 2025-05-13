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
            <h1>Python</h1>
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
                        <p><strong>Supports Financial Goals:</strong> Monitoring expenses helps you stay on track toward
                            goals like saving, investing, or paying off debt by aligning spending habits with long-term
                            plans.</p>
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

        <section class="responsive_devices">
            <div class="container text-center">
                <h2>Access From Any Device</h2>
                <p>Whether you're on a laptop, tablet, or mobile, your data stays synced and secure.</p>
                <img src="images\service\responsive_devices.jpeg" class="img-fluid" alt="Devices">
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

        window.addEventListener("load", function () {
            setTimeout(() => {
                document.getElementById("preloader").style.display = "none";
                document.getElementById("mainContent").style.display = "block";
            }, 1000);
        });


    </script>




</body>

</html>