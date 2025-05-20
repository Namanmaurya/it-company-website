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
                            <span class="text-white">Contact Us</span>
                            <h1 class="text-capitalize mb-5 text-lg theme_headerh1">Get in Touch</h1>

                            <ul class="list-inline breadcumb-nav">
                                <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-form-wrap section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <span class="text-color">Send a message</span>
                        <h3 class="text-md mb-5 theme_headerh3">Contact Form</h3>

                        <div class="row">
                            <div class="col-lg-8">
                                <form id="contact-form" class="contact__form" method="post">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1" name="subject">

                                            <option>Custom Software Development </option>
                                            <option>Software Maintenance</option>
                                            <option>Web App Development</option>
                                            <option>Cloud Services</option>
                                            <option>SEO Services</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your Name" required
                                            oninput="this.value = this.value.replace(/[0-9]/g, '')">
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" name="contact" placeholder="Phone number" class="form-control"
                                            pattern="\d{10}" maxlength="10" required
                                            title="Please enter a valid 10-digit contact number"
                                            oninput="this.value= this.value.replace(/[^0-9]/g, '');">
                                    </div>



                                    <div class="form-group">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Email Address">
                                    </div>

                                    <div class="form-group-2 mb-4">
                                        <textarea name="message" id="message" class="form-control" rows="4"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <button class="btn btn-main" name="submit" type="submit">Send Message</button>
                                </form>
                            </div>

                            <div class="col-lg-4 mt-5">
                                <div class="short-info mt-5 mt-lg-0">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5>Call Us</h5>
                                            +91 5989838989
                                        </li>
                                        <li>
                                            <h5>Email Us</h5>
                                            contact@mail.com
                                        </li>
                                        <li>
                                            <h5>Location Map</h5>
                                            Noida , Uttar Pradesh, India
                                        </li>
                                    </ul>

                                    <ul class="social-icons list-inline mt-5">
                                        <li class="list-inline-item">
                                            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://x.com/i/flow/login?lang=en"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://in.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="contact-content pl-lg-5 mt-2 mt-lg-0 mb-2 mb-lg-0">
                            <h4 class="mb-4">Noida Office</h4>

                            <ul class="address-block list-unstyled">
                                <li>
                                    <i class="ti-location-pin mr-3"></i>noida electronic city, India
                                </li>
                                <li>
                                    <i class="ti-email mr-3"></i>Email: contact@mail.com
                                </li>
                                <li>
                                    <i class="ti-mobile mr-3"></i>Phone:+91 1672 506 744
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info mb-2 mb-lg-0 mt-md-2 mt-lg-0">
                            <h4 class="mb-4">Pune Office</h4>
                            <ul class="address-block list-unstyled">
                                <li>
                                    <i class="ti-location-pin mr-3"></i>Pune, India
                                </li>
                                <li>
                                    <i class="ti-email mr-3"></i>Email: contact@mail.com
                                </li>
                                <li>
                                    <i class="ti-mobile mr-3"></i>Phone:+91 1672 506 744
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info ">
                            <h4 class="mb-4">Bangolore Office</h4>
                            <ul class="address-block list-unstyled">
                                <li>
                                    <i class="ti-location-pin mr-3"></i>Bangalore, India
                                </li>
                                <li>
                                    <i class="ti-email mr-3"></i>Email: contact@mail.com
                                </li>
                                <li>
                                    <i class="ti-mobile mr-3"></i>Phone:+91 1672 506 744
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="office-section container-fluid">
            <h2 class="theme_headerh2">Our Office Locations</h2>
            <p class="theme_pra_text">Select a city to view the office location on the map.</p>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs justify-content-center mb-3" id="locationTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="noida-tab" data-bs-toggle="tab" data-bs-target="#noida"
                        type="button" role="tab" aria-controls="noida" aria-selected="true">
                        Noida
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pune-tab" data-bs-toggle="tab" data-bs-target="#pune" type="button"
                        role="tab" aria-controls="pune" aria-selected="false">
                        Pune
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bangalore-tab" data-bs-toggle="tab" data-bs-target="#bangalore"
                        type="button" role="tab" aria-controls="bangalore" aria-selected="false">
                        Bangalore
                    </button>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="noida" role="tabpanel" aria-labelledby="noida-tab">
                    <iframe id="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.815005607811!2d77.31919381505174!3d28.567945182400936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce6338ecb3aad%3A0xf3b912678e47bc1b!2sNoida%20City%20Center!5e0!3m2!1sen!2sin!4v1692581629478!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="tab-pane fade" id="pune" role="tabpanel" aria-labelledby="pune-tab">
                    <iframe id="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.170924493524!2d73.8499962153353!3d18.520430987395796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2a7c31c195%3A0x23b5bb289024dce9!2sPune%2C%20Maharashtra%2C%20India!5e0!3m2!1sen!2sin!4v1692581672172!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="tab-pane fade" id="bangalore" role="tabpanel" aria-labelledby="bangalore-tab">
                    <iframe id="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15514.735784503707!2d77.58064333417799!3d12.971598960021161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c60c9001%3A0x1a59b3a18d84b5c2!2sBangalore%2C%20Karnataka%2C%20India!5e0!3m2!1sen!2sin!4v1692581708337!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>


        <!-- Social Presence Section -->

        <section class="social_presence ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">
                            Social <b>Presence</b>
                        </h2>
                        <div class="social_icons">
                            <div class="icon">
                                <a href="https://www.facebook.com/" class="icon facebook"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <div class="icon_name">
                                    <p>Facebook</p>
                                </div>

                            </div>
                            <div class="icon">
                                <a href="https://x.com/i/flow/login" class="icon twitter"><i
                                        class="fa-brands fa-x-twitter"></i></a>
                                <div class="icon_name">
                                    <p>Twitter</p>
                                </div>

                            </div>
                            <div class="icon">
                                <a href="https://www.instagram.com/accounts/login/?hl=en" class="icon instagram"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <div class="icon_name">
                                    <p>Instagram</p>
                                </div>

                            </div>
                            <div class="icon">
                                <a href="https://www.linkedin.com/login/in" class="icon linkedin"> <i
                                        class="fa-brands fa-linkedin"></i></a>
                                <div class="icon_name">
                                    <p>Linkedin</p>
                                </div>

                            </div>
                            <div class="icon">
                                <a href="https://www.youtube.com/" class="icon youtube"><i
                                        class="fa-brands fa-youtube"></i></a>
                                <div class="icon_name">
                                    <p>Youtube</p>
                                </div>
                            </div>
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
        document.getElementById("contact-form").addEventListener("submit", function (event) {
            event.preventDefault();
            let formData = new FormData(this);

            fetch("mail.php", {
                method: "POST",
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    Swal.fire({
                        icon: data.success ? 'success' : 'error',
                        title: data.success ? 'Success!' : 'Error!',
                        text: data.message,
                    });
                    if (data.success) {
                        document.getElementById("contact-form").reset();
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong. Please try again.',
                    });
                });
        });
    </script>


</body>

</html>