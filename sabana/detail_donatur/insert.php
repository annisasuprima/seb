<?php

include 'koneksi.php';

$id_donatur = $_POST['id_donatur'];
$id_bantuan = $_POST['id_bantuan'];
$tgl_bantuan = $_POST['tgl_bantuan'];
$jumlah_bantuan = $_POST['jumlah_bantuan'];

$query = mysqli_query($db, "INSERT INTO detail_donatur(id_donatur,id_bantuan,tgl_bantuan,jumlah_bantuan)VALUES('$id_donatur', '$id_bantuan','$tgl_bantuan','$jumlah_bantuan')");	

	

if($query){
echo "<script>alert('Detail Bantuan BERHASIL Disimpan'); 
window.location = 'index.php';</script>";
} else {
echo "<script>alert('Detail Bantuan GAGAL Disimpan'); 
window.location = 'index.php';</script>";
}
?>