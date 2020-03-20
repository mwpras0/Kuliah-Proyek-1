<?php
// Load file koneksi.php
include "koneks.php";
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$lokasi = $_POST['lokasi'];
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
  $query = "INSERT INTO wisata VALUES('".$nama."', '".$harga."', '".$lokasi."', '".$fotobaru."', '".$keterangan."')";
  $code = "INSERT INTO wisata (nama_wisata, harga, lokasi, foto, keterangan)
  VALUES ('$nama', '$harga', '$lokasi', '$fotobaru', '$keterangan')";
  $sql = mysqli_query($connect, $code); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: wisata.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.')<script>";
    header("location: wisataAdd.php");
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "<script>alert('Maaf, Gambar gagal diupload')<script>";
  header("location: wisata.php");
}
?>