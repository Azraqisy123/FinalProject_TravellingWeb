<?php
include "../connection.php";

$id_wisata = $_GET['id_wisata'];
$id_komentar = $_GET['id_komentar'];

mysqli_query($connection, "DELETE FROM komentar WHERE id_komentar = '$id_komentar'");

header("location: ../tempat_wisata_detail.php?id=$id_wisata");
