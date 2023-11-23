<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Travel Agency Website Template</title>

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
                <a class="navbar-brand" href="index.html">
                    <h2>Travel Agency <em>Website</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item active"><a class="nav-link" href="packages.html">Packages</a></li>

                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about-us.html">About Us</a>
                                <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                <a class="dropdown-item" href="terms.html">Terms</a>
                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CRUD</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="crud_wisata.php">CRUD WISATA</a>
                                <a class="dropdown-item" href="testimonials.html">CRUD USER</a>
                                <a class="dropdown-item" href="terms.html">CRUD CATEGORIES</a>
                            </div>
                        </li>
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
                        <h2>CRUD WISATA</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <a class="btn btn-primary mb-4" href="add_product.php">New Data</a>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="tempat_wisata_detail.html"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="tempat_wisata_detail.html">
                                <h4>Limelight Lodge</h4>
                            </a>

                            <h6>$300 - $400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                            </small>
                        </div>
                        <div class="product-action d-flex justify-content-around mb-4">
                            <a class="btn btn-outline-dark" href="">EDIT</a>
                            <a class="btn btn-outline-dark" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="tempat_wisata_detail.html"><img src="assets/images/product-2-370x270.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="tempat_wisata_detail.html">
                                <h4>Limelight Lodge</h4>
                            </a>

                            <h6>$300 - $400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                            </small>
                        </div>
                        <div class="product-action d-flex justify-content-around mb-4">
                            <a class="btn btn-outline-dark" href="">EDIT</a>
                            <a class="btn btn-outline-dark" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="tempat_wisata_detail.html"><img src="assets/images/product-3-370x270.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="tempat_wisata_detail.html">
                                <h4>Limelight Lodge</h4>
                            </a>

                            <h6>$300 - $400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                            </small>
                        </div>
                        <div class="product-action d-flex justify-content-around mb-4">
                            <a class="btn btn-outline-dark" href="">EDIT</a>
                            <a class="btn btn-outline-dark" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="tempat_wisata_detail.html"><img src="assets/images/product-4-370x270.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="tempat_wisata_detail.html">
                                <h4>Limelight Lodge</h4>
                            </a>

                            <h6>$300 - $400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                            </small>
                        </div>
                        <div class="product-action d-flex justify-content-around mb-4">
                            <a class="btn btn-outline-dark" href="">EDIT</a>
                            <a class="btn btn-outline-dark" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="tempat_wisata_detail.html"><img src="assets/images/product-5-370x270.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="tempat_wisata_detail.html">
                                <h4>Limelight Lodge</h4>
                            </a>

                            <h6>$300 - $400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                            </small>
                        </div>
                        <div class="product-action d-flex justify-content-around mb-4">
                            <a class="btn btn-outline-dark" href="">EDIT</a>
                            <a class="btn btn-outline-dark" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-item">
                        <a href="tempat_wisata_detail.html"><img src="assets/images/product-6-370x270.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="tempat_wisata_detail.html">
                                <h4>Limelight Lodge</h4>
                            </a>

                            <h6>$300 - $400</h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et. Voluptas vel labore numqua.</p>

                            <small>
                                <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                            </small>
                        </div>
                        <div class="product-action d-flex justify-content-around mb-4">
                            <a class="btn btn-outline-dark" href="">EDIT</a>
                            <a class="btn btn-outline-dark" href="" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <ul class="pages">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
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