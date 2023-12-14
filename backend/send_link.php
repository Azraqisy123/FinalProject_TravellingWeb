<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '..\vendor\phpmailer\phpmailer\src\Exception.php';
require '..\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require '..\vendor\phpmailer\phpmailer\src\SMTP.php';

//Load Composer's autoloader
require '../vendor/autoload.php';

if (isset($_POST['submit_email'])) {
    session_start();

    include('../connection.php');
    $email = $_POST['email'];

    $select = mysqli_query($connection, "SELECT email_user, user.password FROM user WHERE email_user='$email'");
    if (mysqli_num_rows($select) == 1) {
        while ($row = mysqli_fetch_array($select)) {
            $email = $row['email_user'];
            $pass = md5($row['password']);

            $_SESSION['key'] = $email;
            $_SESSION['reset'] = $pass;
        }

        /* echo 'email : ' . $email;
        echo 'password : '. $pass; */

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer;

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host        = 'smtp.gmail.com';
            $mail->SMTPAuth    = true;
            $mail->Username    = 'travellingadm@gmail.com';
            $mail->Password    = 'qnfcsqlhcdtdkmmb';
            $mail->SMTPSecure  = 'ssl';
            $mail->Port        = 465;

            //Recipients
            $mail->setFrom('travellingadm@gmail.com');
            $mail->addAddress($email);  //Add a recipient 

            //Content
            $mail->isHTML(true);    //Set email format to HTML
            $mail->Subject = "Reset Password";
            $mail->Body    = "Klik link berikut untuk reset Password, <a href='http://localhost/FinalProject_TravellingWeb/reset_pass.php?reset=$pass&key=$email'>Click Here<a>";

            if ($mail->Send()) {
                echo "<script> alert('Link reset password telah dikirim ke email anda, Cek email untuk melakukan reset'); window.location = '../login.php'; </script>"; //jika pesan terkirim

            } else {
                echo "Mail Error - >" . $mail->ErrorInfo;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<script> alert('Email anda tidak terdaftar di sistem'); window.location = '../login.php'; </script>"; //jika pesan terkirim
    }
}
