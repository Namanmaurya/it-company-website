<!DOCTYPE html>
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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .sticky-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #ffffff;
            z-index: 1050;

        }

        .navbar-brand img {
            max-height: 60px;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .navbar {
            background: #f8f9fa;
            padding: 0.8rem 1rem;
            transition: all 0.3s ease;
            z-index: 1030;
        }

        .nav-link {
            font-weight: 500;
            text-transform: uppercase;
            color: #333 !important;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .navbar-toggler {
            border: none;
            font-size: 1.5rem;
        }

        .toggle-icon {
            font-size: 1.5rem;
            color: #007bff;
        }

        .navbar-collapse {
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .navbar-nav {
            text-align: center;
            gap: 0.5rem;
        }

        .nav-item a {
            font-size: 15px;
        }

        .nav-link.active {
            color: #007bff !important;
            font-weight: bold;
            border-bottom: 2px solid #007bff;
            display: inline;
        }

        .theme_mf {
            margin-left: 20px;
        }

        .dropdown-menu {
            background-color: #f8f9fa !important;
            border-radius: 0px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px !important;
            display: none;
            border: none !important;
        }

        .dropdown-item {
            font-size: 14px !important;
            font-weight: 700;
            padding: 10px 20px;
            color: black;
            transition: background-color 0.3s ease;
            font-family: "Poppins", sans-serif;
        }

        .dropdown-item:hover {
                color: #007bff !important;
                background-color: transparent !important;
            }

        .dropdown-item.active {
            background-color: rgb(33, 86, 244);
            color: white
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 991.98px) {
            .dropdown-menu {
                position: static;
                float: none;
                width: 100%;
                margin-top: 0;
                display: block;
            }

            .dropdown-item {
                text-align: center;
            }

            .hover-dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
                animation: fadeIn 0.5s ease-in-out;
            }
        }


        @media (min-width: 992px) {
            .navbar-collapse {
                flex-direction: row !important;
                justify-content: center;
            }

            .navbar-nav {
                flex-direction: row;
                align-items: center;
            }

            .navbar-nav .nav-item {
                margin: 0 5px;
            }

            .hover-dropdown:hover .dropdown-menu {
                display: block !important;
                margin-top: 0;
                animation: fadeIn 0.3s ease-in-out;
            }
        }


        @media (max-width: 769px) {
            #customToggle span {
                font-size: 30px !important;
            }

            .theme_mf {
                margin-left: 0px;
            }

            .navbar-nav {
                margin-bottom: 20px !important;
            }

            .dropdown-menu {
                text-align: center !important;
            }


        }

        @media (max-width: 426px) {
            #customToggle span {
                font-size: 25px !important;
            }

            .navbar-brand img {
                max-height: 45px;
            }
        }

        @media (max-width: 376px) {
            #customToggle span {
                font-size: 20px !important;
            }
        }




        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <header class="sticky-nav">
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm " id="mainNavbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/py_logo.png" alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" id="customToggle">
                    <span class="fas fa-bars toggle-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center">
                    <ul class="navbar-nav  mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                        <li class="nav-item dropdown position-relative hover-dropdown">
                            <a class="nav-link dropdown-toggle" href="services.php" id="servicesDropdown" role="button">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <li><a class="dropdown-item" href="cesd.php">Custom Softwae Development</a></li>
                                <li><a class="dropdown-item" href="wad.php">Web App Development</a></li>
                                <li><a class="dropdown-item" href="software_man.php">Software Maintenance</a></li>
                                
                                <li><a class="dropdown-item" href="c_services.php">Cloud Services</a></li>
                                <li><a class="dropdown-item" href="seo_services.php">SEO Services</a></li>
                            </ul>
                        </li>


                        <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>

                    <a href="contact.php" class="theme_button theme_mf">Get an estimate <i
                            class="fa fa-angle-right ml-2"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Navbar Toggle and Sticky Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggler = document.getElementById('customToggle');
            const icon = toggler.querySelector('.toggle-icon');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const navbar = document.getElementById('mainNavbar');

            // Toggle navbar
            toggler.addEventListener('click', function () {
                navbarCollapse.classList.toggle('show');
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-xmark');
            });

            // Sticky navbar on scroll
            window.addEventListener('scroll', function () {
                if (window.scrollY > 100) {
                    navbar.classList.add('sticky-nav');
                } else {
                    navbar.classList.remove('sticky-nav');
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const currentPage = window.location.pathname.split("/").pop();
            const navLinks = document.querySelectorAll(".nav-link");
            const dropdownItems = document.querySelectorAll(".dropdown-item");
            const servicesLink = document.querySelector('#servicesDropdown');

            let dropdownActive = false;

            // Check for normal nav links
            navLinks.forEach(link => {
                const linkPage = link.getAttribute("href");
                if (linkPage === currentPage) {
                    link.classList.add("active");
                }
            });

            // Check for dropdown items
            dropdownItems.forEach(item => {
                const itemPage = item.getAttribute("href");
                if (itemPage === currentPage) {
                    item.classList.add("active");
                    dropdownActive = true;
                }
            });

            // If any dropdown item is active, mark the parent link active too
            if (dropdownActive && servicesLink) {
                servicesLink.classList.add("active");
            }
        });
    </script>



</body>

</html>