<?php
include "connection.php";

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
  $userGreeting = '<li class="nav-item"><a class="nav-link" href="profil_user.php?id=' . $_SESSION['id_user'] . '">Hello, ' . $_SESSION['nama_user'] . '</a></li>';
  $logoutButton = '<li class="nav-item"><a class="nav-link" href="backend/logout.php">Logout</a></li>';
}

// pagination
$JumlahDataPerPage = 6;
$JumlahData = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM wisata"));
$JumlahHalaman = ceil($JumlahData / $JumlahDataPerPage);
$HalamanActive = (isset($_GET["page"])) ? $_GET["page"] : 1;
$AwalData = ($JumlahDataPerPage * $HalamanActive) - $JumlahDataPerPage;

$travels = mysqli_query($connection, "SELECT * FROM wisata JOIN kategori ON wisata.id_kategori = kategori.id_kategori LIMIT $AwalData, $JumlahDataPerPage");
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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active"><a class="nav-link" href="tempat_wisata.php">Tempat Wisata</a></li>
            <li class="nav-item"><a class="nav-link" href="testimonials.php">Testimonials</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="about-us.php">About Us</a>
                <a class="dropdown-item" href="contact.php">Contact Us</a>
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
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h2>Daftar Tempat Wisata</h2>
            <div class="btn-group py-3">
              <a href="tempat_wisata.php" class="btn btn-info">Semua</a>
              <a href="wisata_alam.php" class="btn btn-secondary">Wisata Alam</a>
              <a href="wisata_budaya.php" class="btn btn-secondary">Wisata Budaya</a>
              <a href="wisata_bawah_laut.php" class="btn btn-secondary">Wisata Bawah Laut</a>
              <a href="wisata_zoo.php" class="btn btn-secondary">Wisata Kebun Binatang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products">
    <div class="container">
      <div class="row justify-content">
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
                <h6>There are no destination in this category</h6>
              </div>
            </div>
          </div>
        <?php } ?>
        <!-- Looping Data from Database End -->

        <!-- Pagination Start -->
        <div class="col-md-12">
          <ul class="pages">
            <?php if ($HalamanActive > 1) { ?>
              <li><a href="?page=<?= $HalamanActive - 1; ?>"><i class="fa fa-angle-double-left"></i></a></li>
            <?php } ?>

            <?php for ($i = 1; $i <= $JumlahHalaman; $i++) { ?>
              <?php if ($i == $HalamanActive) { ?>
                <li class="active"><a href="?page=<?= $i; ?>"> <?= $i; ?></a></li>
              <?php } else { ?>
                <li><a href="?page=<?= $i; ?>"> <?= $i; ?></a></li>
              <?php } ?>
            <?php } ?>

            <?php if ($HalamanActive < $JumlahHalaman) { ?>
              <li><a href="?page=<?= $HalamanActive + 1; ?>"><i class="fa fa-angle-double-right"></i></a></li>
            <?php } ?>
          </ul>
        </div>
        <!-- Pagination End -->
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