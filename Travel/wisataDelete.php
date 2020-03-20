<?php
include_once("koneks.php");
$id_wisata = $_GET['id_wisata'];

mysqli_query($connect, "DELETE FROM wisata WHERE id_wisata='$id_wisata'");
header("Location:wisata.php");
?>