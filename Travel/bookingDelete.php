<?php
include_once("koneks.php");
$id_booking = $_GET['id_booking'];

mysqli_query($connect, "DELETE FROM booking WHERE id_booking='$id_booking'");
header("Location:tables.php");
?>