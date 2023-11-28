<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Travelling Dulu</title>

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

                        <li class="nav-item"><a class="nav-link" href="packages.php">Packages</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about-us.php">About Us</a>
                                <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                                <a class="dropdown-item" href="terms.php">Terms</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CRUD</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="crud_wisata.php">CRUD WISATA</a>
                                <a class="dropdown-item active" href="crud_user.php">CRUD USER</a>
                                <a class="dropdown-item" href="crud_categories.php">CRUD CATEGORIES</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/slider-image-3-1920x600.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>CRUD USER</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <a class="btn btn-primary mb-4" href="add_user.php">New Data</a>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-item">
                        <img src="assets/images/team_01.jpg" alt="">
                        <div class="down-content">
                            <h4 class="text-center mb-4 text-black">Limelight Lodge - ADMIN</h4>
                            <table align="center" style="font-size: 0.9rem;" class="table">
                                <tr>
                                    <td>Username</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>Pria</td>
                                </tr>
                                <tr>
                                    <td>No telp</td>
                                    <td>081213161669 </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>Bandung</td>
                                </tr>
                            </table>
                            <div class="product-action d-flex justify-content-around mb-4">
                                <a class="btn btn-warning" href="edit_user.php">EDIT</a>
                                <a class="btn btn-danger" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <img src="assets/images/team_01.jpg" alt="">
                        <div class="down-content">
                            <h4 class="text-center mb-4 text-black">Limelight Lodge - USER</h4>
                            <table align="center" style="font-size: 0.9rem;" class="table">
                                <tr>
                                    <td>Username</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>Pria</td>
                                </tr>
                                <tr>
                                    <td>No telp</td>
                                    <td>081213161669 </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>Bandung</td>
                                </tr>
                            </table>
                            <div class="product-action d-flex justify-content-around mb-4">
                                <a class="btn btn-warning" href="edit_user.php">EDIT</a>
                                <a class="btn btn-danger" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <img src="assets/images/team_01.jpg" alt="">
                        <div class="down-content">
                            <h4 class="text-center mb-4 text-black">Limelight Lodge - USER</h4>
                            <table align="center" style="font-size: 0.9rem;" class="table">
                                <tr>
                                    <td>Username</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>Pria</td>
                                </tr>
                                <tr>
                                    <td>No telp</td>
                                    <td>081213161669 </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>Bandung</td>
                                </tr>
                            </table>
                            <div class="product-action d-flex justify-content-around mb-4">
                                <a class="btn btn-warning" href="edit_user.php">EDIT</a>
                                <a class="btn btn-danger" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <img src="assets/images/team_01.jpg" alt="">
                        <div class="down-content">
                            <h4 class="text-center mb-4 text-black">Limelight Lodge - USER</h4>
                            <table align="center" style="font-size: 0.9rem;" class="table">
                                <tr>
                                    <td>Username</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>Pria</td>
                                </tr>
                                <tr>
                                    <td>No telp</td>
                                    <td>081213161669 </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>Bandung</td>
                                </tr>
                            </table>
                            <div class="product-action d-flex justify-content-around mb-4">
                                <a class="btn btn-warning" href="edit_user.php">EDIT</a>
                                <a class="btn btn-danger" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <img src="assets/images/team_01.jpg" alt="">
                        <div class="down-content">
                            <h4 class="text-center mb-4 text-black">Limelight Lodge - USER</h4>
                            <table align="center" style="font-size: 0.9rem;" class="table">
                                <tr>
                                    <td>Username</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>Pria</td>
                                </tr>
                                <tr>
                                    <td>No telp</td>
                                    <td>081213161669 </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>Bandung</td>
                                </tr>
                            </table>
                            <div class="product-action d-flex justify-content-around mb-4">
                                <a class="btn btn-warning" href="edit_user.php">EDIT</a>
                                <a class="btn btn-danger" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <img src="assets/images/team_01.jpg" alt="">
                        <div class="down-content">
                            <h4 class="text-center mb-4 text-black">Limelight Lodge - USER</h4>
                            <table align="center" style="font-size: 0.9rem;" class="table">
                                <tr>
                                    <td>Username</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>Pria</td>
                                </tr>
                                <tr>
                                    <td>No telp</td>
                                    <td>081213161669 </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>Bandung</td>
                                </tr>
                            </table>
                            <div class="product-action d-flex justify-content-around mb-4">
                                <a class="btn btn-warning" href="edit_user.php">EDIT</a>
                                <a class="btn btn-danger" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-12">
                    <ul class="pages">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div> -->
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="#" id="contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up location" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return location" required="">
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return date/time" required="">
                                    </fieldset>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter email address" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter phone" required="">
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>

</html>