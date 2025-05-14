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
        <!-- bg -->
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">WAD</span>
                            <h1 class="text-capitalize mb-5 text-lg theme_headerh1">Web App Development</h1>

                            <ul class="list-inline breadcumb-nav">
                                <li class="list-inline-item"><a href="services.php" class="text-white">Services</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="wad.php" class="text-white-50">WAD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- about section -->
        <section class="cloud_about py-5">
            <div class="container">
                <div class="row align-items-center" data-aos="fade-up">

                    <div class="col-md-6">
                        <img src="images\service\cloud_about_img.webp" alt="Cloud Infrastructure"
                            class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h2 class="theme_headerh2">About Our Team</h2>
                        <p>We are a creative group of full-stack developers, UI/UX experts, and project managers
                            delivering secure and responsive applications for modern businesses.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Services Section -->
        <section class="wad_services_sec" id="services">
            <div class="container" data-aos="fade-up">
                <h2 class="text-center mb-5">Our Services</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="web_icon-box ">
                            <i class="fa-solid fa-laptop"></i>
                            <h5 class="mt-3">Custom Web Development</h5>
                            <p>We build scalable, secure, and custom applications tailored to your business goals.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="web_icon-box ">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <h5 class="mt-3">Responsive UI/UX</h5>
                            <p>Mobile-first, intuitive, and user-focused design for all devices and screen sizes.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="web_icon-box">
                            <i class="fa-solid fa-cloud"></i>
                            <h5 class="mt-3">Cloud Integration</h5>
                            <p>Seamless integrations with cloud platforms, APIs, and third-party services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Supported Technologies -->
        <section class="support_techno">
            <div class="container text-center">
                <h2 class="mb-5 theme_headerh2">Technologies We Use</h2>
                <div class="row justify-content-center">
                    <div class="col-6 col-md-2"><img
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="50"
                            alt="PHP">
                        <p>PHP</p>
                    </div>
                    <div class="col-6 col-md-2"><img
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg"
                            width="50" alt="Python">
                        <p>Python</p>
                    </div>
                    <div class="col-6 col-md-2"><img
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" width="50"
                            alt="Java">
                        <p>Java</p>
                    </div>
                    <div class="col-6 col-md-2"><img
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                            width="50" alt="JS">
                        <p>JavaScript</p>
                    </div>
                    <div class="col-6 col-md-2"><img
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" width="50"
                            alt="React">
                        <p>React</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Our Process -->
        <section class="ourProcess" id="process">
            <div class="container" data-aos="fade-up">
                <h2 class="theme_headerh2">Our Process</h2>
                <div class="row text-center">
                    <div class="col-md-3">
                        <h5> Planning</h5>
                        <p>Requirement analysis and roadmap.</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Design</h5>
                        <p>Wireframing and UI/UX design.</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Development</h5>
                        <p>Frontend & backend coding.</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Deployment</h5>
                        <p>Testing, launch, and support.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Studies -->
        <section class="seo_case_studies">
            <div class="container">
                <h2 class="theme_headerh2">Recent Projects</h2>
                <div class="row g-4" data-aos="fade-up">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="images\service\seo_case_img.jpeg" class="card-img-top" alt="Case Study">
                            <div class="card-body">
                                <h5 class="card-title">Local Restaurant</h5>
                                <p class="card-text">Increased organic traffic by 220% in 3 months.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="images\service\seo_case_study_eco_img.png" class="card-img-top" alt="Case Study">
                            <div class="card-body">
                                <h5 class="card-title">Dressing webiste</h5>
                                <p class="card-text">Increased organic traffic by 180% in 2 months.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="images\service\seo_case_study_eco_img3.webp" class="card-img-top"
                                alt="Case Study">
                            <div class="card-body">
                                <h5 class="card-title">Grocery Website</h5>
                                <p class="card-text">Increased organic traffic by 200% in 2 months.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonials -->

        <section class="cloud_testimonials ">
            <div class="container">
                <h2 class="text-center theme_headerh2">What Our Clients Say</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <blockquote class="blockquote">
                            <p>"Their cloud migration was seamless and fast. We saved 40% in costs."</p>
                            <footer class="blockquote-footer">Anil, CTO, abc</footer>
                        </blockquote>
                    </div>
                    <div class="col-md-6">
                        <blockquote class="blockquote">
                            <p>"Reliable support and rock-solid uptime. Highly recommended!"</p>
                            <footer class="blockquote-footer">Satyam, CEO, abc</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>



        <section id="contact" class="cta-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="cta-text">
                            <h3>Ready to build web app?</h3>
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