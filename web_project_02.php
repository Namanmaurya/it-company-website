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

        <section class="project_section">
            <div class="container">
                <h2 class="theme_headerh1 text-center">Our Live Projects</h2>
                <div class="row g-4">
                    <!-- Project 1 -->
                    <div class="col-md-12">
                        <div class="project_card">
                            <div class="project_card_img">
                                <img src="images\service\restore_website_img.jpg" class="card-img-top" alt="Project 1">
                            </div>
                            <div class="project_card_text">
                                <h5 class="card-title">Restaurant website</h5>
                                <p class="card-text">A restaurant website showcases menus, location, hours, and online reservations. It enhances customer experience, promotes special offers, and supports delivery or takeaway orders through user-friendly design.</p>
                                 <a href="#">See Project</a>
                            </div>
                        </div>
                    </div>

                     <!-- Project 2 -->
                    <div class="col-md-12">
                        <div class="project_card">
                            <div class="project_card_img">
                                <img src="images\service\seo_case_study_eco_img.png" class="card-img-top" alt="Project 1">
                            </div>
                            <div class="project_card_text">
                                <h5 class="card-title">E-commerce Website</h5>
                                <p class="card-text">An e-commerce website enables online shopping by displaying products, managing payments, user accounts, and orders. It provides a seamless buying experience with search, filters, and secure checkout.</p>
                                    <a href="#">See Project</a>
                            </div>
                        </div>
                    </div>

                     <!-- Project 3 -->
                    <div class="col-md-12">
                        <div class="project_card">
                            <div class="project_card_img">
                                <img src="images\service\seo_case_study_eco_img3.webp" class="card-img-top" alt="Project 1">
                            </div>
                            <div class="project_card_text">
                                <h5 class="card-title">E-commerce Website</h5>
                                <p class="card-text">An e-commerce website enables online shopping by displaying products, managing payments, user accounts, and orders. It provides a seamless buying experience with search, filters, and secure checkout.</p>
                                     <a href="#">See Project</a>
                            </div>
                        </div>
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




</body>

</html>