<?php
session_start();

if (!isset($_SESSION['email_user'])) {
    // Jika belum login
    $id_user = '';
    $loginButton = '<li class="nav-item"><a class="nav-link" href="login.php">Sign In</a></li>';
    $signupButton = '<li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>';
    $userGreeting = '';
    $logoutButton = '';
    $reviewButton = '';
} else {
    // Jika sudah login
    $id_user = $_SESSION['id_user'];
    $loginButton = '';
    $signupButton = '';
    $userGreeting = '<li class="nav-item active"><a class="nav-link" href="profil_user.php?id=' . $_SESSION['id_user'] . '">Hello, ' . $_SESSION['nama_user'] . '</a></li>';
    $logoutButton = '<li class="nav-item"><a class="nav-link" href="backend/logout.php">Logout</a></li>';
    $reviewButton = '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add_ulasan">Tambah Ulasan</button>';
}

include("connection.php");

$user = mysqli_query($connection, "SELECT * FROM user WHERE id_user = $id_user;");
//$komentar = mysqli_query($connection, "SELECT komentar.*, user.nama_user, user.foto_user FROM komentar JOIN user ON user.id_user = komentar.id_user WHERE komentar.id_wisata = $id_wisata;");

foreach ($user as $value) {
    $nama_user = $value['nama_user'];
    $username = $value['username'];
    $password = $value['password'];
    $jenis_kelamin = $value['jenis_kelamin'];
    $email_user = $value['email_user'];
    $no_telp = $value['no_telp'];
    $alamat = $value['alamat'];
    $role = $value['role'];
    $foto_user = $value['foto_user'];
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

    <title>Travelling Dulu - Profile</title>

    <!-- CDN Bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


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
                        <li class="nav-item"><a class="nav-link" href="tempat_wisata.php">Tempat Wisata</a></li>
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
    <div class="page-heading about-heading header-text" style="background-color: #121212;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>MY PROFILE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <form class="row justify-content-center" action="backend/proses_edit_profil.php?id=<?php echo $id_user; ?>" method="post" enctype="multipart/form-data">
                <div class="col-md-3 text-center">
                    <img id="img_user" src="assets/images/user/<?php echo $foto_user ?>" alt="" width="100%">
                    <div class="row">
                        <div class="col py-2 g-0 text-end">
                            <label for="foto_user" class="btn btn-warning" id="btn_edit_foto_user">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg>
                            </label>
                            <input id="foto_user" name="foto_user" type="file" style="display: none;" />
                            <input type="text" class="form-control" name="temp_user" id="temp_user" value="" hidden>
                        </div>
                        <div class="col py-2 g-0 text-start">
                            <label class="btn btn-danger" id="btn_delete_foto_user">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_user" value="<?php echo $nama_user; ?>">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>">
                    </div>
                    <div class="form-group ps-4">
                        <input type="checkbox" class="form-check-input" id="show-password">
                        <label>Show Password</label>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check ms-3">
                                <?php
                                if ($jenis_kelamin == 'Pria') {
                                    echo '<input class="form-check-input" type="radio" 
                                            name="jenis_kelamin" value="Pria" checked>';
                                } else {
                                    echo '<input class="form-check-input" type="radio" 
                                            name="jenis_kelamin" value="Pria">';
                                } ?>
                                <label class="form-check-label">
                                    Pria
                                </label>
                            </div>
                            <div class="form-check ms-5">
                                <?php
                                if ($jenis_kelamin == 'Wanita') {
                                    echo '<input class="form-check-input" type="radio" 
                                            name="jenis_kelamin" value="Wanita" checked>';
                                } else {
                                    echo '<input class="form-check-input" type="radio" 
                                            name="jenis_kelamin" value="Wanita" ';
                                } ?>
                                <label class="form-check-label">
                                    Wanita
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email_user" value="<?php echo $email_user; ?>">
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" class="form-control" name="no_telp" value="<?php echo $no_telp; ?>">
                    </div>
                    <div class=" form-group" hidden>
                        <label>Role</label>
                        <select class="form-select" name="role">
                            <option value="ADMIN" <?php if ($role == "ADMIN") {
                                                        echo "selected";
                                                    } ?>>ADMIN</option>
                            <option value="USER" <?php if ($role == "USER") {
                                                        echo "selected";
                                                    } ?>>USER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea type="text" class="form-control" name="alamat"><?php echo $alamat; ?></textarea>
                    </div>
                    <input class="btn btn-secondary" id="btn_reset" type="reset">
                    <button class="btn btn-primary" type="submit" onclick="return confirm('Are you sure want to save your changes?');">Save Changes</button>
                </div>
            </form>
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

    <!-- jquery 3.5.1 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#show-password').click(function() {
                if ($(this).is(':checked')) {
                    $('#password').attr('type', 'text');
                } else {
                    $('#password').attr('type', 'password');
                }
            });
        });
    </script>

    <!-- change n delete picture -->
    <script type="text/javascript">
        var tm_pilih = document.getElementById('btn_edit_foto_user');
        var foto_user = document.getElementById('foto_user');
        foto_user.addEventListener('change', function() {
            gambar(this);
        })

        // change profile picture
        function gambar(a) {
            if (a.files && a.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('img_user').src = e.target.result;
                }
                reader.readAsDataURL(a.files[0]);
            }

        }

        // delete profile picture (use the default image)
        var dlt_foto = document.getElementById('btn_delete_foto_user');
        var deflt_foto = 'default.jpg';
        dlt_foto.addEventListener('click', function() {
            if (confirm('Are you sure to delete your picture')) {
                document.getElementById('img_user').src = 'assets/images/user/' + deflt_foto;
                document.getElementById('temp_user').setAttribute('value', 'default.jpg');
            }
        })
    </script>

    <!-- reset picture -->
    <script type="text/javascript">
        var reset_foto = document.getElementById('btn_reset');
        reset_foto.addEventListener('click', function() {
            document.getElementById('img_user').src = 'assets/images/user/<?php echo $foto_user ?>';
        })
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>

</html>