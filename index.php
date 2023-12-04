<?php
session_start();

if (!isset($_SESSION['email_user'])) {
  // Jika belum login
  $loginButton = '<li class="nav-item"><a class="nav-link" href="login.php">Sign In</a></li>';
  $signupButton = '<li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>';
  $userGreeting = '';
  $logoutButton = '';
} else {
  // Jika sudah login
  $loginButton = '';
  $signupButton = '';
  $userGreeting = '<li class="nav-item"><a class="nav-link" href="#">Hello, ' . $_SESSION['nama_user'] . '</a></li>';
  $logoutButton = '<li class="nav-item"><a class="nav-link" href="backend/logout.php">Logout</a></li>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Travelling Dulu </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>Travelling <em>Dulu</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="tempat_wisata.php">Tempat Wisata</a></li>

            <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="about-us.php">About Us</a>
                <a class="dropdown-item" href="testimonials.php">Testimonials</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            <?php echo $loginButton; ?>
            <?php echo $signupButton; ?>
            <?php echo $userGreeting; ?>
            <?php echo $logoutButton; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <h2>Lets Make Your Best Trip Ever!</h2>
          <h4 class="text-light" style="font-size: large;">Plan and book your perfect trip with travel tips, destination information and inspiration form us </h4>
        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">
          <h2>Discover New Worlds</h2>
          <h4 class="text-light" style="font-size: large;">Travel to any corner of the world, without going around in circles</h4>
        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">
          <h2>Enjoy The Ocean With Your Family</h2>
          <h4 class="text-light" style="font-size: large;">Lets start your journey with us, your dream will come true</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Featured Vacations</h2>
            <a href="tempat_wisata.php">view more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="tempat_wisata_detail.php"><img src="assets/images/kbs/jerapah-kbs.jpg" alt=""></a>
            <div class="down-content">
              <a href="tempat_wisata_detail.php">
                <h4>Kebun Binatang Surabaya</h4>
              </a>

              <h6>Rp50.000 - Rp100.000</h6>

              <p>Kebun Binatang Surabaya (KBS) atau Surabaya Zoo merupakan kebun binatang yang pernah terlengkap se-Asia
                Tenggara, di dalamnya terdapat lebih dari 230 spesies satwa yang berbeda yang terdiri lebih dari 2179
                ekor satwa.</p>

              <small>
                <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product-item">
            <a href="tempat_wisata_detail.php"><img src="assets/images/bn/view 1.jpg" alt=""></a>
            <div class="down-content">
              <a href="tempat_wisata_detail.php">
                <h4>Banda Neira</h4>
              </a>

              <h6>Rp3.500.000 - Rp4.900.000</h6>

              <p>Banda Neira merupakan gugusan Kepulauan Banda yang termasuk dalam provinsi Maluku. Pulau ini tepatnya terletak di sebelah tenggara Ambon dan berjarak sekitar 36 km dari bandara Pattimura.</p>

              <small>
                <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Nights"><i class="fa fa-cube"></i> 5 Days</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product-item">
            <a href="tempat_wisata_detail.php"><img src="assets/images/kbs/jerapah-kbs.jpg" alt=""></a>
            <div class="down-content">
              <a href="tempat_wisata_detail.php">
                <h4>Kebun Binatang Surabaya</h4>
              </a>

              <h6>Rp50.000 - Rp100.000</h6>

              <p>Kebun Binatang Surabaya (KBS) atau Surabaya Zoo merupakan kebun binatang yang pernah terlengkap se-Asia
                Tenggara, di dalamnya terdapat lebih dari 230 spesies satwa yang berbeda yang terdiri lebih dari 2179
                ekor satwa.</p>


              <small>
                <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
              </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="best-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>About Us</h2>
          </div>
        </div>

        <div class="container my-5">
          <div class="row">

            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" class="img-fluid mb-5">
              <h3 clas><a href="#"><span class="">Lawson</span> Arnold</a></h3>
              <span class="d-block position mb-4">CEO, Founder, Atty.</span>
              <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p>
              <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" class="img-fluid mb-5">

              <h3 clas><a href="#"><span class="">Jeremy</span> Walker</a></h3>
              <span class="d-block position mb-4">CEO, Founder, Atty.</span>
              <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p>
              <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>

            </div>
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid mb-5">
              <h3 clas><a href="#"><span class="">Patrik</span> White</a></h3>
              <span class="d-block position mb-4">CEO, Founder, Atty.</span>
              <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p>
              <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid mb-5">

              <h3 clas><a href="#"><span class="">Kathryn</span> Ryan</a></h3>
              <span class="d-block position mb-4">CEO, Founder, Atty.</span>
              <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p>
              <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>


            </div>
            <!-- End Column 4 -->



          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest blog posts</h2>

            <a href="blog.php">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <a href="#" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

            <div class="down-content">
              <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

              <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <a href="#" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

            <div class="down-content">
              <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

              <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <a href="#" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

            <div class="down-content">
              <h4><a href="#">Aperiam modi voluptatum fuga officiis cumque</a></h4>

              <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="happy-clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Happy Clients</h2>

            <a href="testimonials.php">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-clients owl-carousel text-center">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>John Doe</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla
                    at quia quaerat."</em></p>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>Jane Smith</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla
                    at quia quaerat."</em></p>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>Antony Davis</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla
                    at quia quaerat."</em></p>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>John Doe</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla
                    at quia quaerat."</em></p>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>Jane Smith</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla
                    at quia quaerat."</em></p>
              </div>
            </div>

            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
                <h4>Antony Davis</h4>
                <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla
                    at quia quaerat."</em></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-8">
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.
                </p>
              </div>
              <div class="col-lg-4 col-md-6 text-right">
                <a href="contact.php" class="filled-button">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
</body>

</html>