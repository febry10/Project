<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];

mysqli_query($con,"INSERT INTO useraktif(nama,nim,prodi)
VALUES ('$nama','$nim','$prodi')");

echo "<script>
alert('Data Berhasil Di Tambahkan');
window.location.href='index.php?halaman=usraktf';
</script>";

