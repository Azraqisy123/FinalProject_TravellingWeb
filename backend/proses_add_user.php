<?php
    include "../connection.php";

    $nama_user = $_POST['nama_user'];
    $username_user = $_POST['username'];
    $password_user = $_POST['password'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $role = $_POST['role'];
    $foto_user = $_FILES['foto_user']['name'];
    $file_tmp = $_FILES['foto_user']['tmp_name'];
    
    move_uploaded_file($file_tmp, '../assets/images/' . $foto_user);
    
    mysqli_query(
        $connection,
        "INSERT INTO `user` (`nama_user`, `username`, `password`, `jenis_kelamin`, `no_telp`, `alamat`, `role`, `foto_user`)
        VALUES ('$nama_user', '$username_user', '$password_user', '$jenis_kelamin', '$no_telp', '$alamat', '$role', '$foto_user' ) ");
    
    header("location:../add_user.php");
    ?>