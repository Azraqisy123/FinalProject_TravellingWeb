<?php
    include "../connection.php";

    $id_wisata = $_POST['id_wisata'];
    $id_user = $_POST['id_user'];    
    $komentar = $_POST['komentar']; 
    $tgl_komentar = $_POST['tgl_komentar'];


    mysqli_query(
        $connection,
        "INSERT INTO `komentar` (`id_wisata`, `id_user`, `komentar`, `tgl_komentar`)
        VALUES ('$id_wisata', '$id_user', '$komentar', '$tgl_komentar') ");
    
    header("location:../tempat_wisata_detail.php?id=$id_wisata");
?>