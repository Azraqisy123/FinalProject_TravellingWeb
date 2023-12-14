<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Travelling Dulu - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3256899f8.js" crossorigin="anonymous"></script>

    <!-- CDN Bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>
    <div class="container p-3">
        <div class="container-fluid p-5">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <?php
                if (isset($_SESSION['message'])) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['message'] ?>
                    </div>
                <?php
                }
                ?>
                <form action="backend/login_validate.php" method="post">
                    <h1 class="mb-3 text-center">Sign In</h1>


                    <!-- Error Notification -->
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email address</label>
                        <input type="email" id="form2Example1" class="form-control" name="email_user" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" class="form-control" name="password" required />
                    </div>

                    <!-- (B) CAPTCHA HERE -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Are you human?</label>
                        <div>
                            <?php
                            require "backend/captcha.php";
                            $PHPCAP->prime();
                            $PHPCAP->draw();
                            ?>
                        </div>
                        <input type="text" class="form-control mt-3" name="captcha" placeholder="Masukan Kode Diatas" required>
                    </div>

                    <!-- Submit button -->
                    <input class="btn btn-primary btn-block mb-2" type="submit" name="login" value="Sign In">

                    <!-- Register buttons -->
                    <div class="row justify-content-between">
                        <a href="#" class="col-6 text-start" data-bs-toggle="modal" data-bs-target="#modal_forgot_password">Forgot Password</a>
                        <a class="col-6 text-end" href="register.php">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- begin :: modal forgot password -->
    <div class="modal fade" id="modal_forgot_password" tabindex="-1" aria-labelledby="modal_forgot_password" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_forgot_password">Forgot Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form_send_email" action="backend/send_link.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Masukkan email untuk reset password</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit_email" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end :: modal forgot password -->

</body>

</html>