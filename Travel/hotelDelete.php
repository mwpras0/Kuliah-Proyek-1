<?php
include_once("koneks.php");
$id_hotel = $_GET['id_hotel'];

mysqli_query($connect, "DELETE FROM hotel WHERE id_hotel='$id_hotel'");
header("Location:hotel.php");
?>