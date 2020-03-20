<?php
include_once("koneks.php");
$id_mobil = $_GET['id_mobil'];

mysqli_query($connect, "DELETE FROM rencar WHERE id_mobil='$id_mobil'");
header("Location:rencar.php");
?>