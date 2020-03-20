<?php
    include "koneks.php";
    $id_wisata= $_POST['idw'];
    $nama_wisata = $_POST['nama'];
    $harga = $_POST['harga'];
    $lokasi = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE wisata SET nama_wisata='$nama_wisata', harga='$harga', lokasi='$lokasi', keterangan='$keterangan' Where id_wisata='$id_wisata'";
    $sql = mysqli_query($connect, $query); 
    header("location: wisata.php");

?>