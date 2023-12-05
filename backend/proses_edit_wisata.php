<?php
    include "../connection.php";

    $id = $_GET['id'];
    $nama_tempat = $_POST['nama_tempat'];
    $id_kategori = $_POST['id_kategori'];
    $lokasi = $_POST['lokasi'];
    $fasilitas = $_POST['fasilitas'];
    $htm = $_POST['htm'];
    $deskripsi = $_POST['deskripsi'];

    // Foto Yang dipakai
    $foto_lama_1 = $_POST['foto_lama_1'];
    $foto_lama_2 = $_POST['foto_lama_2'];
    $foto_lama_3 = $_POST['foto_lama_3'];
    $foto_lama_4 = $_POST['foto_lama_4'];

    // Tangkap Foto
    $foto_1 = $_FILES['foto_1']['name'];
    $file_tmp_1 = $_FILES['foto_1']['tmp_name'];

    $foto_2 = $_FILES['foto_2']['name'];
    $file_tmp_2 = $_FILES['foto_2']['tmp_name'];

    $foto_3 = $_FILES['foto_3']['name'];
    $file_tmp_3 = $_FILES['foto_3']['tmp_name'];

    $foto_4 = $_FILES['foto_4']['name'];
    $file_tmp_4 = $_FILES['foto_4']['tmp_name'];

    // Jika Upload Foto Baru
    if (strlen($foto_1 || $foto_2 || $foto_3 || $foto_4) > 0){
        if(strlen($foto_1) > 0){
            move_uploaded_file($file_tmp_1, '../assets/images/wisata/' . $foto_1);
        }elseif(strlen($foto_1) == 0){
            $foto_1 = $foto_lama_1;
        }

        if(strlen($foto_2) > 0){
            move_uploaded_file($file_tmp_2, '../assets/images/wisata/' . $foto_2);
        }elseif(strlen($foto_2) == 0){
            $foto_2 = $foto_lama_2;
        }

        if(strlen($foto_3) > 0){
            move_uploaded_file($file_tmp_3, '../assets/images/wisata/' . $foto_3);
        }elseif(strlen($foto_3) == 0){
            $foto_3 = $foto_lama_3;
        }

        if(strlen($foto_4) > 0){
            move_uploaded_file($file_tmp_4, '../assets/images/wisata/' . $foto_4);
        }elseif(strlen($foto_4) == 0){
            $foto_4 = $foto_lama_4;
        }
        
        mysqli_query($connection, "UPDATE wisata SET nama_tempat = '$nama_tempat', id_kategori = '$id_kategori', lokasi = '$lokasi', fasilitas = '$fasilitas', 
        htm = '$htm', deskripsi = '$deskripsi', foto_1 = '$foto_1', foto_2 = '$foto_2', foto_3 = '$foto_3', foto_4 = '$foto_4' WHERE id_wisata = '$id' ");
    } 

    // Jika Tidak Upload Foto Baru
    else {
        mysqli_query($connection, "UPDATE wisata SET nama_tempat = '$nama_tempat', id_kategori = '$id_kategori', lokasi = '$lokasi', fasilitas = '$fasilitas', 
        htm = '$htm', deskripsi = '$deskripsi' WHERE id_wisata = '$id' ");
    }
    
    header("location:../crud_wisata.php");
?>
