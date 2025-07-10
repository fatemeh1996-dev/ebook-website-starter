<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo("charset");?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="images/favicon.png" />
    <title>Free E-Book | Start Your Own Blog</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="images/logo.png" alt="" width="225">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link fw-semibold">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="details" class="nav-link fw-semibold">Details</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a href="contact.html" class="nav-link btn btn-outline-light fw-semibold px-4 mx-4">Contact</a> -->
                        <a class="btn btn-outline-light px-4 mx-4 nav-link fw-semibold" href="contact.html"
                            role="button">
                            Contact
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- header -->
    <header class="header">
        <!-- hero -->
        <div class="hero text-white pt-7 pb-4">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <h1>Contact Information</h1>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php bloginfo("template_url");?>/images/wave.svg" alt="">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,320L26.7,272C53.3,224,107,128,160,96C213.3,64,267,96,320,122.7C373.3,149,427,171,480,170.7C533.3,171,587,149,640,144C693.3,139,747,149,800,133.3C853.3,117,907,75,960,58.7C1013.3,43,1067,53,1120,96C1173.3,139,1227,213,1280,245.3C1333.3,277,1387,267,1413,261.3L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg> -->
        <!-- <svg
    class="frame-decoration"
    data-name="Layer 2"
    xmlns="http://www.w3.org/2000/svg"
    preserveAspectRatio="none"
    viewBox="0 0 1920 192.275"
  >
    <defs>
      <style>
        .cls-1 {
          fill: #f3f6f9;
        }
      </style>
    </defs>
    <title>frame-decoration</title>
    <path
      class="cls-1"
      d="M0,158.755s63.9,52.163,179.472,50.736c121.494-1.5,185.839-49.738,305.984-49.733,109.21,0,181.491,51.733,300.537,50.233,123.941-1.562,225.214-50.126,390.43-50.374,123.821-.185,353.982,58.374,458.976,56.373,217.907-4.153,284.6-57.236,284.6-57.236V351.03H0V158.755Z"
      transform="translate(0 -158.755)"
    />
  </svg> -->
    </header>
    <!-- contact form -->
    <section class="contact bg-light pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="https://formspree.io/f/meoazdkb" method="POST" class=" mt-4">
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Name" name="name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control form-control-lg" rows="6" id=""></textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary text-white mt-5" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Map -->
    <section class="locatio my-5">
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1">
                    <h3>Our Location</h3>
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur illum delectus maxime harum.
                        Eius exercitationem ullam quis hic ad quae, voluptatem tempora dolorem ducimus similique?
                    </p>
                    <div class="map">
                        <iframe width="425" height="350"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=54.2637062072754%2C31.81646099216691%2C54.4230079650879%2C31.916034898546993&amp;layer=cyclosm"
                            style="border: 1px solid black"></iframe><br /><small><a
                                href="https://www.openstreetmap.org/?#map=13/31.86626/54.34336&amp;layers=Y">View Larger
                                Map</a></small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- social -->
    <section class="social text-bg-dark py-6 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center fs-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta tempore molestias culpa illo et
                        deserunt
                        facere nulla! Saepe laboriosam molestiae architecto tempora eligendi, reiciendis vitae.
                    </p>
                    <div class="social-icons d-flex justify-content-center gap-4 text-white">
                        <i class="fab fa-facebook fa-2x"></i>
                        <i class="fab fa-instagram fa-2x"></i>
                        <i class="fab fa-linkedin fa-2x"></i>
                        <i class="fab fa-whatsapp fa-2x"></i>

                        <!-- <i class="bi bi-facebook white-icon"></i> -->
                        <!-- <i class="bi bi-facebook" style="color: white;"></i> -->
                        <!-- <i class="bi bi-facebook text-white"></i>
            <i class="bi bi-whatsapp"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-linkedin"></i> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="border-top border-primary bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#details" class="nav-link link-light">Details</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact.html" class="nav-link link-light">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#index.html" class="nav-link link-light">Home</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p class="text-end d-none d-md-block">
                        Copyright &copy; Blog Mastery 2025
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>