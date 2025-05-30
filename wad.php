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
                            <span class="text-white">WAD</span>
                            <h1 class="text-capitalize text-lg theme_headerh1">Web App Development</h1>

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
        <!-- <section class="cloud_about py-5">
            <div class="container">
                <div class="row align-items-center" data-aos="fade-up">

                    <div class="col-md-5">
                        <img src="images\service\cloud_about_img.webp" alt="Cloud Infrastructure"
                            class="img-fluid rounded">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <h2 class="theme_headerh2">About Our Team</h2>
                        <p>We are a creative group of full-stack developers, UI/UX experts, and project managers
                            delivering secure and responsive applications for modern businesses.</p>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- 3. Services Section -->
        <section class="wad_services_sec " id="services">
            <div class="container" data-aos="fade-up">
                <h2 class="text-center mb-5">Our Services</h2>
                <div class="row g-4">
                    <div class="col-md-4 scroll-fade-up delay-1">
                        <div class="web_icon-box ">
                            <i class="fa-solid fa-laptop"></i>
                            <h5 class="mt-3">Custom Web Development</h5>
                            <p>We build scalable, secure, and custom applications tailored to your business goals.</p>
                        </div>
                    </div>
                    <div class="col-md-4 scroll-fade-up delay-2">
                        <div class="web_icon-box ">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <h5 class="mt-3">Responsive UI/UX</h5>
                            <p>Mobile-first, intuitive, and user-focused design for all devices and screen sizes.</p>
                        </div>
                    </div>
                    <div class="col-md-4 scroll-fade-up delay-3">
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
        <section class="support_techno scroll-fade-up">
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
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="theme_headerh4">Our Process</h2>
                        <div class="row text-center">

                            <div class="col-md-3">
                                <a href="#planning" class="scroll-link text-decoration-none text-dark">
                                    <h5>Planning</h5>
                                    <p>Requirement analysis and roadmap.</p>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <a href="#design" class="scroll-link text-decoration-none text-dark">
                                    <h5>Design</h5>
                                    <p>Wireframing and UI/UX design.</p>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <a href="#development" class="scroll-link text-decoration-none text-dark">
                                    <h5>Development</h5>
                                    <p>Frontend & backend coding.</p>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <a href="#deployment" class="scroll-link text-decoration-none text-dark">
                                    <h5>Deployment</h5>
                                    <p>Testing, launch, and support.</p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- cloud_services -->
        <section class="cloud_services py-5 scroll-fade-up">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 mb-5">
                        <img src="images\service\cest_Planning.avif" alt="Data Backup">
                    </div>
                    <div class="col-md-6 mb-5" id="planning">
                        <h3 class="theme_headerh3 ">Planning</h3>
                        <p class="theme_pra_text">Planning is the process of setting clear goals and outlining the steps
                            needed to achieve them. It involves organizing resources, managing time, and anticipating
                            potential challenges to ensure successful outcomes.</p>
                        <p class="theme_pra_text">Effective planning helps guide decision-making, improves efficiency,
                            reduces risks, and provides a roadmap that keeps projects and activities on track toward
                            their objectives.</p>
                    </div>
                    <div class="col-md-6 mb-5 " id="design">
                        <h3 class="theme_headerh3 ">Design</h3>
                        <p class="theme_pra_text">Design is the creative and strategic process of planning,
                            conceptualizing, and shaping the structure, appearance, and functionality of a product,
                            system, or experience. It involves translating requirements into visual and functional
                            elements, ensuring usability, aesthetics, and performance align with user needs and project
                            goals for an effective solution.</p>
                        <p class="theme_pra_text">It combines aesthetics, usability, and practicality to solve problems
                            and meet user needs effectively.</p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <img src="images\service\cest_Development.webp" alt="Disaster Recovery">
                    </div>
                    <div class="col-md-6 mb-5">
                        <img src="images\service\cesd_Testing.jpeg" alt="DevOps Support">
                    </div>
                    <div class="col-md-6 mb-5" id="development">
                        <h3 class="theme_headerh3 ">Development</h3>
                        <p class="theme_pra_text">Development is the process of creating, improving, or expanding
                            something over time, whether it’s a product, skill, system, or idea. It involves stages like
                            designing, building, testing, and refining to achieve desired goals.</p>
                        <p class="theme_pra_text">This process drives meaningful progress by transforming abstract ideas
                            into tangible outcomes. It encourages innovation, supports continuous improvement, and
                            enhances functionality across multiple domains, including technology, education, business,
                            healthcare, and personal development. Through effective design, solutions become more
                            accessible, efficient, and impactful, ultimately benefiting users and society as a whole.
                        </p>
                    </div>
                    <div class="col-md-6 mb-5" id="deployment">
                        <h3 class="theme_headerh3 ">Deployment</h3>
                        <p class="theme_pra_text">Deployment is the process of releasing and making a software
                            application, system, or product available for use in a live environment.</p>
                        <p class="theme_pra_text">It involves the installation, configuration, and fine-tuning of the
                            software or system to ensure it operates smoothly and efficiently for end users. This phase
                            marks the critical transition from development to real-world application, ensuring the
                            product meets user needs, functions correctly, and delivers the intended value in practical
                            use.
                        </p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <img src="images\service\cest_Deployment.jpeg" alt="Disaster Recovery">
                    </div>

                </div>
            </div>
        </section>

        <!-- project_section -->
        <section class="project_section scroll-fade-up">
            <div class="container">
                <h2 class="theme_headerh1 text-center">Our Live Projects</h2>
                <div class="row g-4">

                    <!-- Project 4 -->
                    <div class="col-md-4 mt-5">
                        <a href="mobile_app_development_project_detail_01.php">
                            <div class="project_card">
                                <div class="project_card_img">
                                    <img src="images\service\skill_swao_logo (1).png" class="card-img-top"
                                        alt="Project 1">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Project 5 -->
                    <div class="col-md-4 mt-5">
                        <a href="mobile_app_development_project_detail_02.php">
                            <div class="project_card">
                                <div class="project_card_img">
                                    <img src="images\service\skill_swao_logo (5).png" class="card-img-top"
                                        alt="Project 1">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Project 6 -->
                    <div class="col-md-4 mt-5">
                        <a href="mobile_app_development_project_detail_03.php">
                            <div class="project_card">
                                <div class="project_card_img">
                                    <img src="images\service\skill_swao_logo (4).png" class="card-img-top"
                                        alt="Project 1">
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="cloud_testimonials scroll-fade-up">
            <div class="container">
                <h2 class="text-center theme_headerh2 mb-4">What Our Clients Say</h2>
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

        <!-- contact_section -->
        <section id="contact" class="cta-section scroll-fade-up">
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
        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const target = document.querySelector(targetId);

                const navbarHeight = document.querySelector('.navbar').offsetHeight;

                const topPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight - 10; 

                window.scrollTo({
                    top: topPosition,
                    behavior: 'smooth'
                });
            });
        });
    </script>

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