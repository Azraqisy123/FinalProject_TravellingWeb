<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3256899f8.js" crossorigin="anonymous"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>
    <div class="container-fluid">
        <div class="mx-auto col-10 col-md-8 col-lg-6 my-5">
            <h1 class="text-center">Register</h1>
            <form class="py-5">
                <div class="row mb-4">
                    <!-- begin :: Name input -->
                    <div class="form-outline col-6">
                        <label class="form-label" for="name">Full Name</label>
                        <input type="text" id="name" class="form-control" />
                    </div>
                    <!-- end :: Name input -->

                    <!-- begin :: username input -->
                    <div class="form-outline col-6">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" class="form-control" />
                    </div>
                    <!-- end :: username input -->
                </div>

                <!-- begin :: gender -->
                <label for="gender" class="form-label">Gender</label>
                <div class="row mb-4">

                    <div class="col-6">
                        <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" value="0" checked>
                        <label class="btn btn-outline-primary" for="male">Male</label>
                    </div>
                    <div class="col-6">
                        <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" value="1">
                        <label class="btn btn-outline-primary" for="female">Female</label>
                    </div>
                </div>
                <!-- end :: gender -->

                <div class="row mb-4">
                    <!-- begin :: Email input -->
                    <div class="form-outline col-6">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" class="form-control" />
                    </div>
                    <!-- end :: Email input -->

                    <!-- begin :: no_telp input -->
                    <div class="form-outline col-6">
                        <label class="form-label" for="no_telp">Phone Number</label>
                        <input type="text" id="no_telp" class="form-control" />
                    </div>
                    <!-- end :: no_telp input -->
                </div>

                <!-- alamat input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="alamat">Address</label>
                    <textarea id="alamat" class="form-control"></textarea>
                </div>

                <!-- username input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" class="form-control" />
                </div>

                <div class="row mb-4">
                    <!-- Password input -->
                    <div class="form-outline col-6">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control" />
                    </div>

                    <!-- Password confirm input -->
                    <div class="form-outline col-6">
                        <label class="form-label" for="confirm_pw">Confirm Password</label>
                        <input type="password" id="confirm_pw" class="form-control" />
                    </div>
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block">Register</button>

                <!-- Register buttons -->
                <div class="text-center mb-5">
                    <p>Have any account <a href="login.php">Login</a></p>
                    <p class="mb-3">or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>