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
        <!-- bg-1 -->
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Web Development</span>
                            <h1 class="text-capitalize mb-5 text-lg theme_headerh1">Project Pune</h1>

                            <ul class="list-inline breadcumb-nav">
                                <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="web_project_01.php" class="text-white-50">Web
                                        Development</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- project_sectioin -->
        <section class="project_section scroll-fade-up">
            <div class="container">
                <h2 class="theme_headerh1 text-center">Our Live Projects</h2>
                <div class="row g-4">
                    <!-- Project 1 -->
                    <div class="col-md-4 mt-5">
                        <a href="#">
                            <div class="project_card">
                                <div class="project_card_img">
                                    <img src="images\service\bicule_logo.png" class="card-img-top" alt="Project 1">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Project 2 -->
                    <div class="col-md-4 mt-5">
                        <a href="#">
                            <div class="project_card">
                                <div class="project_card_img">
                                    <img src="images\service\gnk_logo.png" class="card-img-top" alt="Project 1">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Project 3 -->
                    <div class="col-md-4 mt-5">
                        <a href="#">
                            <div class="project_card">
                                <div class="project_card_img">
                                    <img src="images\service\pss_logo.png" class="card-img-top" alt="Project 1">
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Project 4 -->
                    <div class="col-md-4 mt-5">
                        <a href="#">
                            <div class="project_card">
                                <div class="project_card_img">
                                    <img src="images\service\bicule_logo.png" class="card-img-top" alt="Project 1">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Project 5 -->
                    <div class="col-md-4 mt-5">
                        <a href="#">
                            <div class="project_card">
                                <div class="project_card_img">
                                    <img src="images\service\gnk_logo.png" class="card-img-top" alt="Project 1">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Project 6 -->
                    <div class="col-md-4 mt-5">
                        <a href="#">
                            <div class="project_card">
                                <div class="project_card_img">
                                    <img src="images\service\pss_logo.png" class="card-img-top" alt="Project 1">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- cta_section -->
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
</body>

</html>