<?php
session_start();

if (!isset($_SESSION['email_user'])) { // Periksa apakah pengguna sudah login
    header("Location: login.php");
    exit();
} else {
    // Jika sudah login
    $userGreeting = 'Hello, ' . $_SESSION['nama_user'];
    $logoutButton = '<li class="nav-item"><a class="dropdown-item" href="backend/logout.php">Sign Out</a></li>';
}

include "connection.php";
$travels = mysqli_query($connection, "SELECT * FROM wisata JOIN kategori ON wisata.id_kategori = kategori.id_kategori");

?>
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
                            <a class="nav-link active" href="admin_wisata.php">
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
                            <a class="nav-link" href="admin_user.php">
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
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h2">Wisata</h1>
                <a class="btn btn-primary mt-3" href="add_wisata.php" role="button">Tambah Data</a>
                <div class="row my-4">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id Wisata</th>
                                                <th scope="col">Nama Tempat</th>
                                                <th scope="col">Lokasi</th>
                                                <th scope="col">Fasilitas</th>
                                                <th scope="col">HTM</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Foto 1</th>
                                                <th scope="col">Foto 2</th>
                                                <th scope="col">Foto 3</th>
                                                <th scope="col">Foto 4</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <?php
                                        while ($data = mysqli_fetch_array($travels)) { ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $data["id_wisata"]; ?></td>
                                                    <td><?php echo $data["nama_tempat"]; ?></td>
                                                    <td><?php echo $data["lokasi"]; ?></td>
                                                    <td><?php echo substr($data["fasilitas"], 0, 50) . (strlen($data["deskripsi"]) > 100 ? '...' : ''); ?></td>
                                                    <td><?php echo "Rp" . number_format($data["htm"])  ?></td>
                                                    <td><?php echo substr($data["deskripsi"], 0, 50) . (strlen($data["deskripsi"]) > 100 ? '...' : ''); ?></td>
                                                    <td><?php echo !empty($data["foto_1"]) ? '<img src="assets/images/wisata/' . $data["foto_1"] . '" alt="Foto 1" class="img-thumbnail">' : 'No Pict'; ?></td>
                                                    <td><?php echo !empty($data["foto_2"]) ? '<img src="assets/images/wisata/' . $data["foto_2"] . '" alt="Foto 2" class="img-thumbnail">' : 'No Pict'; ?></td>
                                                    <td><?php echo !empty($data["foto_3"]) ? '<img src="assets/images/wisata/' . $data["foto_3"] . '" alt="Foto 3" class="img-thumbnail">' : 'No Pict'; ?></td>
                                                    <td><?php echo !empty($data["foto_4"]) ? '<img src="assets/images/wisata/' . $data["foto_4"] . '" alt="Foto 4" class="img-thumbnail">' : 'No Pict'; ?></td>
                                                    <td>
                                                        <a href="edit_wisata.php?id=<?php echo $data["id_wisata"]; ?>">
                                                            <label class="btn btn-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                                </svg>
                                                            </label>
                                                        </a>
                                                        <a href="backend/proses_delete_wisata.php?id=<?php echo $data["id_wisata"] ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                                            <label class="btn btn-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                </svg>
                                                            </label>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="pt-5 d-flex justify-content-between">
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