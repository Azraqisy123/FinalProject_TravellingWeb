<?php
    include "../connection.php";

    $id = $_GET['id'];
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
    
    move_uploaded_file($file_tmp,$file_tmp_2,$file_tmp_3,$file_tmp_4, '../assets/images/wisata/' . $foto_1,$foto_2,$foto_3,$foto_4);
    
    mysqli_query($connection, "UPDATE wisata SET nama_tempat = '$nama_tempat', id_kategori = '$id_kategori', lokasi = '$lokasi', fasilitas = '$fasilitas', 
    htm = '$htm', deskripsi = '$deskripsi', foto_1 = '$foto_1', foto_2 = '$foto_2', foto_3 = '$foto_3', foto_4 = '$foto_4' WHERE id_wisata = '$id' ");
    
    header("location:../crud_wisata.php");
?>
