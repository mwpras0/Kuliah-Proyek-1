<?php
// Load file koneksi.php
include "koneks.php";
// Ambil Data yang Dikirim dari Form
$nama_mobil = $_POST['nama'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$keterangan = $_POST['keterangan'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "upload/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO rencar VALUES('".$nama_mobil."', '".$harga."', '".$fotobaru."', '".$keterangan."')";
  $code = "INSERT INTO rencar (nama_mobil, harga, foto, keterangan)
  VALUES ('$nama_mobil', '$harga', '$fotobaru', '$keterangan')";
  $sql = mysqli_query($connect, $code); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: rencar.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.')<script>";
    header("location: rencarAdd.php");
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "<script>alert('Maaf, Gambar gagal diupload')<script>";
  header("location: rencar.php");
}
?>