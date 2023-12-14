<?php
session_start();
include('../connection.php');

if (isset($_POST['submit_reset'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    //validasi jika password & password_confirmation sama
    if ($pass == $confirm_pass) {
        mysqli_query($connection, "UPDATE user SET password = '$pass' WHERE email_user = '$email' ");
        echo "<script> alert('Reset password berhasil'); window.location = '../login.php'; </script>";
    } else {
        $ses_email = $_SESSION['key'];
        $ses_pass = $_SESSION['reset'];
        echo "<script>alert('Gagal Menyimpan, masukkan konfirmasi password dengan password yang sama'); window.location = '../reset_pass.php?reset=$ses_pass&key=$ses_email';</script>";
    }
}
