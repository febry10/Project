<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];

    // Proses ubah data ke Database
    $query = "UPDATE useraktif SET  nama='".$nama."', nim='".$nim."', prodi='".$prodi."' WHERE id='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: index.php?halaman=usraktf"); // Redirect ke halaman artikel.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php?halaman=usraktf'>Kembali Ke Form</a>";
    }


?>