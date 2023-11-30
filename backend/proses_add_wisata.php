<?php
    include "../connection.php";

    $nama_tempat = $_POST['nama_tempat'];
    $id_kategori = $_POST['id_kategori'];    
    $lokasi = $_POST['lokasi'];
    $fasilitas = $_POST['fasilitas'];
    $htm = $_POST['htm'];
    $deskripsi = $_POST['deskripsi'];

    $foto_1 = $_FILES['foto_1']['name'];
    $file_tmp_1 = $_FILES['foto_1']['tmp_name'];

    $foto_2 = $_FILES['foto_2']['name'];
    $file_tmp_2 = $_FILES['foto_2']['tmp_name'];

    $foto_3 = $_FILES['foto_3']['name'];
    $file_tmp_3 = $_FILES['foto_3']['tmp_name'];

    $foto_4 = $_FILES['foto_4']['name'];
    $file_tmp_4 = $_FILES['foto_4']['tmp_name'];

    
    move_uploaded_file($file_tmp_1, '../assets/images/wisata/' . $foto_1);
    move_uploaded_file($file_tmp_2, '../assets/images/wisata/' . $foto_2);
    move_uploaded_file($file_tmp_3, '../assets/images/wisata/' . $foto_3);
    move_uploaded_file($file_tmp_4, '../assets/images/wisata/' . $foto_4);

    
    mysqli_query(
        $connection,
        "INSERT INTO `wisata` (`nama_tempat`, `id_kategori`, `lokasi`, `fasilitas`, `htm`, `deskripsi`, `foto_1`, `foto_2`, `foto_3`, `foto_4`)
        VALUES ('$nama_tempat', '$id_kategori', '$lokasi', '$fasilitas', '$htm', '$deskripsi', '$foto_1', '$foto_2', '$foto_3', '$foto_4') ");
    
    header("location:../crud_wisata.php");
    ?>