<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <title>Travelling Dulu - Admin Dashboard </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 90px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            z-index: 99;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 11.5rem;
                padding: 0;
            }
        }

        .navbar {
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
        }

        @media (min-width: 767.98px) {
            .navbar {
                top: 0;
                position: sticky;
                z-index: 999;
            }
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
        }
    </style>
</head>

<!-- Load Data From Database Start -->
<?php
include "connection.php";
$id = $_GET["id"];

$users = mysqli_query($connection, "SELECT * FROM user WHERE id_user = '$id' ");

foreach ($users as $user) {
    $nama_user = $user['nama_user'];
    $username_user = $user['username'];
    $password_user = $user['password'];
    $jenis_kelamin = $user['jenis_kelamin'];
    $email_user = $user['email_user'];
    $no_telp = $user['no_telp'];
    $alamat = $user['alamat'];
    $role = $user['role'];
}
session_start();

if (!isset($_SESSION['email_user'])) { // Periksa apakah pengguna sudah login
    header("Location: login.php");
    exit();
} else {
    // Jika sudah login
    $userGreeting = 'Hello, ' . $_SESSION['nama_user'];
    $logoutButton = '<li class="nav-item"><a class="dropdown-item" href="backend/logout.php">Sign Out</a></li>';
}
?>
<!-- Load Data From Database End -->

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

    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                Admin Dashboard
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-4 col-lg-10 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $userGreeting; ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php echo $logoutButton; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column px-4">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="admin_dashboard.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span class="ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_wisata.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="ml-2">Wisata</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_kategori.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span class="ml-2">Categories</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin_user.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="ml-2">User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main style="margin-right: 3rem;" class="col-md-12 ml-sm-auto col-lg-10 py-4">
                <!-- Form Start -->
                <div class="container-fluid">
                    <div class="row px-xl-5">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-primary border-primary">
                                <div class="card-header bg-primary">
                                    <h3 class="card-title mb-0 text-light">EDIT DATA USER</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="backend/proses_edit_user.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama User</label>
                                            <input type="text" class="form-control" name="nama_user" value="<?php echo $nama_user; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>username</label>
                                            <input type="text" class="form-control" name="username" value="<?php echo $username_user; ?>">
                                        </div>
                                        <div class=" form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" value="<?php echo $password_user; ?>">
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
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea type="text" class="form-control" name="alamat"><?php echo $alamat; ?></textarea>
                                        </div>
                                        <div class=" form-group">
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
                                            <label>Foto User</label>
                                            <input class="form-control" type="file" name="foto_user">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary rounded">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            <footer style="margin-left: 3rem;" class="pt-5 d-flex justify-content-between">
                <span>Copyright © 2019-2020 <a href="https://themesberg.com">Themesberg</a></span>
                <ul class="nav m-0">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Terms and conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Contact</a>
                    </li>
                </ul>
            </footer>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>

</html>