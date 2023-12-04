<?php
    include "../connection.php";

    $id_komentar = $_POST['id_komentar'];
    $id_wisata = $_POST['id_wisata'];
    $komentar = $_POST['komentar'];
    
    $result = mysqli_query($connection, "UPDATE komentar SET komentar = '$komentar' WHERE id_komentar = '$id_komentar' ");
    
    if ($result) {
        echo 
        "<script>
        alert('Berhasil update data!');
        location.href='../tempat_wisata_detail.php?id=$id_wisata';
        </script>";
    } else {
        'gagal';
    }
    

//    header("location: ../tempat_wisata_detail.php?id=$id_wisata");
