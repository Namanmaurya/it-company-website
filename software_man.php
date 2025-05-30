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
                            <span class="text-white">SM</span>
                            <h1 class="text-capitalize text-lg theme_headerh1">Software Maintenance</h1>

                            <ul class="list-inline breadcumb-nav">
                                <li class="list-inline-item"><a href="services.php" class="text-white">Services</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="software_man.php" class="text-white-50">SM</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Software Maintenance -->
        <section class="why_soft_main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="mb-4 theme_headerh2">Why is Software Maintenance Important?</h2>
                        <p class="theme_pra_text">Software maintenance is crucial for resolving issues, enhancing
                            performance, and adapting to
                            ever-changing technology. It minimizes downtime and ensures your business stays competitive.
                        </p>
                        <ul>
                            <li>Fix bugs quickly</li>
                            <li>Adapt to new tech environments</li>
                            <li>Improve software efficiency</li>
                            <li>Ensure security & compliance</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="images\service\s_M1.avif" class="section-img" alt="Why Maintenance">
                    </div>
                </div>
            </div>
        </section>

        <!-- Types of Maintenance -->
        <section class="ty_of_main">
            <div class="container text-center">
                <h2 class="mb-5 theme_headerh2">Types of Software Maintenance</h2>
                <div class="row g-4">
                    <div class="col-md-3 scroll-fade-up">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="bi bi-tools feature-icon mb-3"></i>
                                <h5>Corrective</h5>
                                <p class="theme_pra_text">Fixing bugs and coding errors after deployment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-fade-up delay-1">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="bi bi-arrow-repeat feature-icon mb-3"></i>
                                <h5>Adaptive</h5>
                                <p class="theme_pra_text">Modifying software to run in a new environment (OS, hardware,
                                    etc.).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-fade-up delay-2">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="bi bi-graph-up-arrow feature-icon mb-3"></i>
                                <h5>Perfective</h5>
                                <p class="theme_pra_text">Enhancing features or performance based on user feedback.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-fade-up delay-3">
                        <div class="maintenance_card">
                            <div class="maintenance_card-body">
                                <i class="bi bi-shield-check feature-icon mb-3"></i>
                                <h5>Preventive</h5>
                                <p class="theme_pra_text">Improving maintainability and preventing future issues.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Maintenance Process -->
        <section class="maintenance_process">
            <div class="container">
                <h2 class="mb-4 text-center theme_headerh2">Our Maintenance Implementation Process</h2>
                <div class="row g-4">
                    <div class="col-md-4 scroll-fade-up delay-1">
                        <div class="main_process ">
                            <div class="main_process-body">
                                <h5><i class="bi bi-search feature-icon"></i> Assessment & Planning</h5>
                                <p class="theme_pra_text">We evaluate your existing system, gather requirements, and
                                    define a roadmap.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 scroll-fade-up delay-2">
                        <div class="main_process">
                            <div class="main_process-body">
                                <h5><i class="bi bi-gear-wide-connected feature-icon"></i> Fixing & Upgrading</h5>
                                <p class="theme_pra_text">Our developers work to fix bugs, improve features, and update
                                    technologies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 scroll-fade-up delay-3">
                        <div class="main_process">
                            <div class="main_process-body">
                                <h5><i class="bi bi-check-circle feature-icon"></i> Testing & Delivery</h5>
                                <p class="theme_pra_text">We thoroughly test the software and deploy changes with
                                    minimal downtime.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Supported Technologies -->
        <section class="support_techno scroll-fade-up">
            <div class="container text-center">
                <h2 class="mb-5 theme_headerh2">Technologies We Support</h2>
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

        <!-- Benefits -->
        <section class="benefits scroll-fade-up">
            <div class="container">
                <h2 class="text-center theme_headerh2">Why Choose Us?</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <h3 class="theme_headerh3">Fast Response</h3>
                        <p class="theme_pra_text">Fast response allows development teams to rapidly adjust to new client
                            requirements or market
                            demands, ensuring the product stays relevant and competitive.</p>
                        <p class="theme_pra_text">Swift identification and resolution of bugs help maintain system
                            stability, reduce user
                            frustration, and build trust in the software's reliability.</p>
                        <p class="theme_pra_text">A fast response cycle supports frequent updates and the quick rollout
                            of new features, which
                            keeps users engaged and meets business goals.</p>
                        <p class="theme_pra_text">Fast response is a core principle in Agile and DevOps methodologies,
                            enabling continuous
                            integration, delivery, and improvement through quick iterations.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit_image">
                            <img src="images\service\benefit_img1.avif" alt="">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit_image">
                            <img src="images\service\benefit_img2.avif" alt="">

                        </div>
                    </div>
                    <div class="col-md-6">

                        <h3 class="theme_headerh3">Expert Developers</h3>
                        <p class="theme_pra_text">Expert developers have strong command over programming languages,
                            frameworks, and software
                            design principles. They write clean, efficient, and scalable code based on best practices.
                        </p>
                        <p class="theme_pra_text">They excel at analyzing complex issues, breaking them down logically,
                            and crafting effective,
                            optimized solutions, even under pressure or time constraints.</p>
                        <p class="theme_pra_text">They understand every stage of the Software Development Life Cycle
                            (SDLC), including
                            planning, development, testing, deployment, and maintenance.</p>
                        <p class="theme_pra_text">Expert developers work well in teams, clearly communicate ideas, give
                            and receive feedback
                            constructively, and often mentor junior developers.</p>
                    </div>


                    <div class="col-md-6">
                        <h3 class="theme_headerh3">Cost-Effective</h3>
                        <p class="theme_pra_text">Cost-effective development ensures efficient use of time, tools, and
                            talent, reducing unnecessary spending without compromising quality.</p>
                        <p class="theme_pra_text">Leveraging open-source libraries and reusable code components cuts
                            down development time and expenses significantly.</p>
                        <p class="theme_pra_text">Using Agile methods helps identify issues early, avoid rework, and
                            deliver value incrementally—saving time and costs in the long run.</p>
                        <p class="theme_pra_text">Automation reduces manual errors, speeds up processes, and lowers
                            ongoing maintenance and operational costs.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit_image">
                            <img src="images\service\benefit_img3.avif" alt="">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit_image">
                            <img src="images\service\benefit_img4.webp" alt="">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="theme_headerh3">Proven Track Record</h3>
                        <p class="theme_pra_text">A proven track record shows a history of successfully delivered
                            projects, meeting deadlines, budgets, and client expectations consistently.</p>
                        <p class="theme_pra_text">Positive testimonials, repeat clients, and long-term partnerships
                            indicate reliability and trustworthiness in delivering quality software solutions.</p>
                        <p class="theme_pra_text">It reflects deep domain knowledge and the ability to handle diverse
                            challenges across multiple technologies and industries.</p>
                        <p class="theme_pra_text">A solid track record includes a diverse portfolio of live, functional
                            software products that showcase capability and innovation.</p>
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
                            <h3>Ready
                                customize your software?</h3>
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