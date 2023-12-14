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
                if ($_GET['key'] && $_GET['reset']) {
                    include('connection.php');
                    $email = $_GET['key'];
                    $pass = $_GET['reset'];

                    $select = mysqli_query($connection, "SELECT email_user, user.password FROM user WHERE email_user='$email' AND md5(user.password)='$pass'");
                    if (mysqli_num_rows($select) == 1) {
                ?>
                        <form action="backend/proses_reset_pass.php" method="post">
                            <h1 class="mb-3 text-center">Reset Password</h1>

                            <!-- Email input -->
                            <div class="form-outline mb-4" hidden>
                                <label class="form-label" for="email">email</label>
                                <input type="email" id="email" class="form-control" name="email" value="<?php echo $email ?>" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required />
                            </div>

                            <!-- Confirm Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="confirm_password">Confirm Password</label>
                                <input type="password" id="confirm_password" class="form-control" name="confirm_password" required />
                            </div>

                            <div class="form-group ps-4">
                                <input type="checkbox" class="form-check-input" id="show-password">
                                <label>Show Password</label>
                            </div>

                            <!-- Submit button -->
                            <input class="btn btn-primary btn-block mb-2" type="submit" name="submit_reset" value="Reset Password">
                        </form>
                <?php
                    } else {
                        echo "Data Tidak Ditemukan";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- jquery 3.5.1 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#show-password').click(function() {
                if ($(this).is(':checked')) {
                    $('#password').attr('type', 'text');
                    $('#confirm_password').attr('type', 'text');
                } else {
                    $('#password').attr('type', 'password');
                    $('#confirm_password').attr('type', 'password');
                }
            });
        });
    </script>

</body>

</html>