<?php
    include "koneks.php";
    $id_mobil= $_GET['id'];
    $nama_mobil = $_GET['nama'];
    $harga = $_GET['harga'];
    $keterangan = $_GET['keterangan'];

    $query = "UPDATE rencar SET nama_mobil='$nama_mobil', harga = '$harga', keterangan = '$keterangan' where id_mobil = '$id_mobil'";
    $sql = mysqli_query($connect, $query);
    header("location: rencar.php");
?>