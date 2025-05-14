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
                            <span class="text-white">CS</span>
                            <h1 class="text-capitalize mb-5 text-lg theme_headerh1">Cloud Services</h1>

                            <ul class="list-inline breadcumb-nav">
                                <li class="list-inline-item"><a href="services.php" class="text-white">Services</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="c_services" class="text-white-50">CS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- cloud about -->

        <section class="cloud_about py-5">
            <div class="container">
                <div class="row align-items-center" data-aos="fade-up">

                    <div class="col-md-6">
                        <img src="images\service\cloud_about_img.webp" alt="Cloud Infrastructure"
                            class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h2 class="theme_headerh2">About Our Cloud Platform</h2>
                        <p>We offer robust, secure, and cost-effective cloud services tailored to your needs — from
                            startups to enterprises.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Offered -->

        <section class="cloud_services py-5 ">
            <div class="container">
                <h2 class="text-center mb-5 theme_headerh2">Our Cloud Services</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="theme_headerh3 mt-5">Cloud Hosting</h3>
                        <p class="theme_pra_text ">In cloud hosting, your data and applications are distributed across a network of virtual and physical cloud servers. These servers work together to balance the load and maximize uptime.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="images\service\cloud_hosting_img.webp" alt="cloud hosting">
                    </div>
                    <div class="col-md-6">
                        <img src="images\service\data_backup_img.jpg" alt="Data Backup">
                    </div>
                    <div class="col-md-6">
                        <h3 class="theme_headerh3 mt-5">Data Backup</h3>
                        <p class="theme_pra_text">Data Backup refers to the process of making copies of data, files, or databases, and storing them in a safe location to ensure they can be restored in case of data loss, corruption, or system failure. It is an essential part of data protection and disaster recovery plans.</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="theme_headerh3 mt-5">Disaster Recovery</h3>
                        <p class="theme_pra_text">Disaster Recovery (DR) refers to the strategies, policies, and procedures that are put in place to recover and protect data, applications, and IT infrastructure in the event of a disaster or disruptive event. The goal of disaster recovery is to minimize downtime, maintain business continuity, and protect critical business data and operations.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="images\service\di_recovery_img.jpg" alt="Disaster Recovery">
                    </div>
                    <div class="col-md-6">
                        <img src="images\service\devops_img.jpg" alt="DevOps Support">
                    </div>
                    <div class="col-md-6">
                        <h3 class="theme_headerh3 mt-5">DevOps Support</h3>
                        <p class="theme_pra_text">DevOps Support refers to the various tools, practices, and processes that assist in the successful implementation and management of DevOps (Development and Operations) practices. DevOps is a cultural and technical movement that combines software development (Dev) and IT operations (Ops) to deliver software more efficiently, with improved collaboration, automation, and continuous delivery.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->

        <section class="cloud_why py-5">
            <div class="container">
                <h2 class="text-center mb-4 theme_headerh2">Why Choose Our Cloud Services?</h2>
                <div class="row text-center g-4">
                    <div class="col-md-4">
                        <div class="p-4 border rounded">99.99% Uptime Guarantee</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 border rounded">24/7 Expert Support</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 border rounded">Pay-as-You-Go Pricing</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tools & Technologies -->
        <section class="seo_tool">
            <div class="container">
                <h2 class="theme_headerh2">Technologies We Use</h2>
                <div class="row text-center g-3" data-aos="zoom-in">
                    <div class="col-3"><img
                            src="images\service\cloud_logo_aws_img.png"
                            width="80" alt="AWS"></div>
                    <div class="col-3"><img
                            src="images\service\cloud_azore_img.png"
                            width="80" alt="Azure"></div>
                    <div class="col-3"><img
                            src="images\service\cloud_google_cloud_logo_img.png" width="80"
                            alt="GCP"></div>
                    <div class="col-3"><img
                            src="images\service\cloud_kubernete_img.png"
                            width="80" alt="Kubernetes">
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Plans -->

        <section class="cloud_pricing py-5" id="plans">
            <div class="container">
                <h2 class="text-center mb-5 theme_headerh2">Flexible Pricing Plans</h2>
                <div class="row g-4" data-aos="fade-up">
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <h4>Basic</h4>
                            <p>$49/month</p>
                            <p>For small teams and startups</p>
                            <a href="#contact" class="btn btn-outline-primary">Choose Plan</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-4 border border-primary">
                            <h4>Pro</h4>
                            <p>$149/month</p>
                            <p>For growing businesses</p>
                            <a href="#contact" class="btn btn-primary">Choose Plan</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <h4>Enterprise</h4>
                            <p>Custom</p>
                            <p>Tailored to your needs</p>
                            <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
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


        <!-- contact -->

        <section id="contact" class="cta-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="cta-text">
                            <h3>Ready to Cloud Services?</h3>
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