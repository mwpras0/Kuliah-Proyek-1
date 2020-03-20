<?php
    include "koneks.php";

    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];    
    $pesan = $_POST['pesan'];
    $id_wisata = $_POST['data_booking'];

    $sql="INSERT INTO booking(nama ,tanggal ,alamat ,nohp ,email, pesan, id_wisata)
        VALUES('$nama','$tanggal','$alamat','$nohp','$email','$pesan','$id_wisata')";

    if (mysqli_query($connect, $sql)) {
        header("location: tables.php");
        echo "Anda telah memboking";
    }else {
        echo "gagal daftar" . mysqli_error($connect);
        echo "coba lagi";
    }
?>