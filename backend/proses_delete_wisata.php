<?php
    include "../connection.php";
    
    $id = $_GET['id'];
    
    mysqli_query($connection, "DELETE FROM wisata WHERE id_wisata = '$id' ");
    
    header("location:../crud_wisata.php");
?>