<?php
include "../connection.php";

$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM kategori WHERE id_kategori = '$id' ");

header("location:../admin_kategori.php");
