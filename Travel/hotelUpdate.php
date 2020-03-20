<?php
    include "koneks.php";
    $id_hotel= $_GET['id'];
    $nama_hotel = $_GET['nama'];
    $harga = $_GET['harga'];
    $lokasi = $_GET['lokasi'];
    $keterangan = $_GET['keterangan'];

    $sql="UPDATE hotel set nama_hotel='$nama_hotel', harga='$harga', lokasi='$lokasi', keterangan='$keterangan' WHERE id_hotel='$id_hotel'";
    mysqli_query($connect, $sql);
    header("location:hotel.php");

?>