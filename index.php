<?php
session_start();

if (!isset($_SESSION['email_user'])) {
  // Jika belum login
  $loginButton = '<li class="nav-item"><a class="nav-link" href="login.php">Sign In</a></li>';
  $signupButton = '<li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>';
  $userGreeting = '';
  $logoutButton = '';
  $dashboardButton = '';
} else {
  // Jika sudah login
  $loginButton = '';
  $signupButton = '';
  $userGreeting = '<li class="nav-item"><a class="nav-link" href="profil_user.php?id=' . $_SESSION['id_user'] . '">Hello, ' . $_SESSION['nama_user'] . '</a></li>';
  $logoutButton = '<li class="nav-item"><a class="nav-link" href="backend/logout.php">Logout</a></li>';

  // cek jika pengguna merupakan admin
  if (isset($_SESSION['role']) && $_SESSION['role'] === 'ADMIN') {
    $dashboardButton = '<a class="dropdown-item" href="admin_dashboard.php">Dashboard</a>';
  } else {
    $dashboardButton = '';
  }
}

$errorMessage = '';
if (isset($_GET['error'])) {
  $errorMessage = $_GET['error'];
}

// Tambahkan variabel untuk menampilkan pesan kesalahan di halaman HTML
$errorDisplay = '';
if (!empty($errorMessage)) {
  $errorDisplay = '<div id="errorMessage" class="alert alert-danger">' . $errorMessage . '</div>';
}

include "connection.php";
$travels = mysqli_query($connection, "SELECT * FROM wisata JOIN kategori ON wisata.id_kategori = kategori.id_kategori ORDER BY view DESC LIMIT 3");
$komentar = mysqli_query($connection, "SELECT komentar.*, user.nama_user, user.foto_user , wisata.nama_tempat, kategori.id_kategori, kategori.nama_kategori FROM komentar JOIN user ON user.id_user = komentar.id_user JOIN wisata ON komentar.id_wisata = wisata.id_wisata RIGHT JOIN kategorI ON wisata.id_kategori = kategori.id_kategori");

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
    <?php echo $errorDisplay; ?>
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
            <li class="nav-item"><a class="nav-link" href="testimonials.php">Testimonials</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="about-us.php">About Us</a>
                <a class="dropdown-item" href="contact.php">Contact Us</a>
                <?php echo $dashboardButton; ?>
              </div>
            </li>
            <?php echo $loginButton; ?>
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
      <div class="section-heading">
        <h2>Travels Recommendations</h2>
      </div>
      <div class="row justify-content-center">
        <!-- Looping Data from Database Start -->
        <?php
        if (mysqli_num_rows($travels) > 0) {
          foreach ($travels as $travel) {
        ?>
            <div class="col-md-4">
              <div class="product-item">
                <a href="tempat_wisata_detail.php?id=<?php echo $travel['id_wisata'] ?>"><img src="assets/images/wisata/<?php echo $travel['foto_1']; ?>" alt=""></a>
                <div class="down-content">
                  <a href="tempat_wisata_detail.php?id=<?php echo $travel['id_wisata'] ?>">
                    <h4><?php echo $travel['nama_tempat']; ?></h4>
                  </a>

                  <h6>Rp <?php echo number_format($travel['htm']); ?></h6>

                  <p><?php echo substr_replace($travel['deskripsi'], " ... ", 140); ?></p>

                  <small class="d-flex justify-content-between mb-4">
                    <strong title="Nights"><i class="fa fa-cube"></i> Category: <?php echo $travel['nama_kategori']; ?></strong>
                    <strong title="Nights"><i class="fa fa-eye"></i> Dilihat: <?php echo $travel['view'] ?></strong>
                  </small>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php
        } else { ?>
          <div class="col-md-4">
            <div class="product-item text-center">
              <div class="down-content">
                <h6>There are no destination place in the database</h6>
              </div>
            </div>
          </div>
        <?php } ?>
        <!-- Looping Data from Database End -->

      </div>
    </div>
  </div>

  <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Happy Clients</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-clients owl-carousel text-center">
            <?php foreach ($komentar as $key => $value) {
              if ($value['id_komentar'] != NULL) { ?>
                <div class="service-item">
                  <div class="icon">
                    <img src="assets/images/user/<?php echo $value['foto_user'] ?>" width="100%">
                  </div>
                  <div class="down-content">
                    <h4><?php echo $value['nama_user'] ?></h4>
                    <p class="n-m" style="font-weight: 200; font-size: small;"><?php echo date('d, M Y', strtotime($value['tgl_komentar'])) ?></p>
                    <p class="n-m"><em>"<?php if (strlen($value['komentar']) < 100) {
                                          echo substr($value['komentar'], 0, 100);
                                        } else {
                                          echo substr($value['komentar'], 0, 100) . '...';
                                        } ?>"</em></p>
                    <br>
                    <div class="row">
                      <div class="col"><?php echo $value['nama_tempat'] ?></div>
                      <div class="col"><?php echo $value['nama_kategori'] ?></div>
                    </div>
                  </div>
                </div>
            <?php }
            } ?>
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
        <div class="container">
          <div class="row">
            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" class="img-fluid mb-5">
              <h3><a href="#"><span>Solihudin</span></a></h3>
              <!-- <span class="d-block position mb-4">CEO, Founder, Atty.</span> -->
              <!-- <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p> -->
              <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 1 -->
            <!-- Start Column 2 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" class="img-fluid mb-5">
              <h3><a href="#"><span>Muhammad</span> Azraqi Syahriza</a></h3>
              <!-- <span class="d-block position mb-4">CEO, Founder, Atty.</span> -->
              <!-- <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p> -->
              <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 2 -->
            <!-- Start Column 3 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid mb-5">
              <h3><a href="#"><span>Eko Agung</span> Prasetyo</a></h3>
              <!-- <span class="d-block position mb-4">CEO, Founder, Atty.</span> -->
              <!-- <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p> -->
              <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 3 -->
            <!-- Start Column 4 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid mb-5">
              <h3><a href="#"><span>Laila</span> Novia Sari</a></h3>
              <!-- <span class="d-block position mb-4">CEO, Founder, Atty.</span> -->
              <!-- <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p> -->
              <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 4 -->
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
  <script>
    // Hapus pesan kesalahan setelah 5 detik (5000 milidetik)
    setTimeout(function() {
      var errorMessage = document.getElementById('errorMessage');
      if (errorMessage) {
        errorMessage.style.display = 'none';
      }
    }, 1000);
  </script>
</body>

</html>