<?php
include("connection.php");

$user = mysqli_query($connection, "SELECT * FROM user");
$wisata = mysqli_query($connection, "SELECT * FROM wisata");
$kategori = mysqli_query($connection, "SELECT * FROM kategori");
$komentar = mysqli_query($connection, "SELECT komentar.*, user.nama_user, wisata.nama_tempat, kategori.id_kategori, kategori.nama_kategori FROM komentar JOIN user ON user.id_user = komentar.id_user JOIN wisata ON komentar.id_wisata = wisata.id_wisata JOIN kategorI ON wisata.id_kategori = kategori.id_kategori");

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

  <!-- begin :: CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- end :: CDN Bootstrap -->

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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="packages.php">Packages</a></li>

            <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="about-us.php">About Us</a>
                <a class="dropdown-item active" href="testimonials.php">Testimonials</a>
                <a class="dropdown-item" href="terms.php">Terms</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-3-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Let's Check our</h4>
            <h2>Testimoni</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- begin :: category_wisata -->
  <section id="category_wisata" class="container-fluid p-5">
    <div class="text-center m-5">
      <h1 class="">Kategori Wisata</h1>
    </div>
    <div class="overflow-auto">
      <div class="row row-cols-xl-3 row-cols-md-4 row-cols-sm-6 g-4 text-center justify-content-center mx-5 my-3">
        <a href="#all" style="text-decoration: none; color:black;" class="col-xl-3 col-md-4 col-sm-6">
          <div class="card shadow py-3">
            <img src="assets/images/kategori/categories-all.jpg" class="card-img-top mx-auto" alt="..." style="width:100%">
            <div class="card-body">
              <h5 class="card-title">All</h5>
            </div>
          </div>
        </a>
        <?php foreach ($kategori as $key => $value) { ?>
          <a href="#<?php echo $value['id_kategori'] ?>" style="text-decoration: none; color:black;" class="col-xl-3 col-md-4 col-sm-6">
            <div class="card shadow py-3">
              <img src="assets/images/kategori/<?php echo $value['foto_kategori'] ?>" class="card-img-top mx-auto" alt="..." style="width:100%">
              <div class="card-body">
                <h5 class="card-title">Wisata <?php echo $value['nama_kategori'] ?></h5>
              </div>
            </div>
          </a>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- end :: category_wisata -->

  <!-- begin:: all wisata -->
  <section id="all" class="services section-background">
    <div class="text-center mx-5 mb-5">
      <h1 class="">Testimoni Semua Wisata</h1>
    </div>
    <div class="container overflow-auto" style="height: 750px;">
      <div class="row row-cols-md-4 justify-content-center">
        <?php foreach ($komentar as $key => $value) { ?>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
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
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- end:: all wisata -->

  <!-- begin:: testimoni per kategori -->
  <?php foreach ($kategori as $key => $value) {
    $id_kategori = $value['id_kategori']; ?>
    <section id="<?php echo $id_kategori ?>" class="services section-background">
      <div class="text-center mx-5 mb-5">
        <h1 class="">Testimoni Wisata <?php echo $value['nama_kategori'] ?></h1>
      </div>
      <div class="container overflow-auto" style="height: 750px;">
        <div class="row row-cols-md-4 justify-content-center">
          <?php foreach ($komentar as $key => $value) {
            if ($value['id_kategori'] == $id_kategori) { ?>
              <div class="col-md-4">
                <div class="service-item">
                  <div class="icon">
                    <i class="fa fa-user"></i>
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
              </div>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>
  <!-- end:: testimoni per kategori -->

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

  <!-- begin :: btn scroll top -->
  <a href="#category_wisata" id="scroll-btn">&uarr;</a>
  <!-- end :: btn scroll top -->

  <!-- begin :: CDN jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- end :: CDN jquery -->

  <!-- begin :: scroll-top -->
  <script>
    // ketika pengunjung scroll kebawah 20px dari atas dokumen, maka tampilkan tombol scroll-btn
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll-btn").style.display = "block";
      } else {
        document.getElementById("scroll-btn").style.display = "none";
      }
    }
  </script>
  <!-- end :: scroll-top -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
</body>

</html>