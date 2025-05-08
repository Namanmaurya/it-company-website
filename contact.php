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

        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Contact Us</span>
                            <h1 class="text-capitalize mb-5 text-lg theme_headerh1">Get in Touch</h1>

                            <ul class="list-inline breadcumb-nav">
                                <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
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
                                <form id="contact-form" class="contact__form" method="post" action="mail.php">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>I Need help in ...</option>
                                            <option>Custom Software Development </option>
                                            <option>Software Maintenance</option>
                                            <option>Web App Development</option>
                                            <option>Cloud Services</option>
                                            <option>SEO Services</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your Name">
                                    </div>

                                    <div class="form-group">
                                        <input name="phone_number" id="phone_number" type="number" class="form-control"
                                            placeholder="Phone number">
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

                            <div class="col-lg-4">
                                <div class="short-info mt-5 mt-lg-0">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5>Call Us</h5>
                                            +88 01672 506 744
                                        </li>
                                        <li>
                                            <h5>Email Us</h5>
                                            contact@mail.com
                                        </li>
                                        <li>
                                            <h5>Location Map</h5>
                                            North Main Street,Brooklyn Australia
                                        </li>
                                    </ul>

                                    <ul class="social-icons list-inline mt-5">
                                        <li class="list-inline-item">
                                            <a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="google-map mt-90 mb-5 mt-5">
                            <div id="map" class="responsive-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224356.85922972517!2d77.23700922661273!3d28.522404037560413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1746422835448!5m2!1sen!2sin"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4 col-md-6">
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
                                    <i class="ti-location-pin mr-3"></i>Pune West, India
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



    </main>

    <?php include("footer.php") ?>

    <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top"><i class="fa-solid fa-up-long"></i></button>



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