<?php

include 'koneksi.php';

$nik_korban = $_POST['nik_korban'];
$id_bantuan = $_POST['id_bantuan'];
$jenis_bencana = $_POST['jenis_bencana'];
$tgl_bencana = $_POST['tgl_bencana'];
$tgl_memberikan = $_POST['tgl_memberikan'];

$query = mysqli_query($db, "INSERT INTO detail_kebutuhan(nik_korban,id_bantuan, jenis_bencana,tgl_bencana,tgl_memberikan)VALUES('$nik_korban', '$id_bantuan','$jenis_bencana','$tgl_bencana','$tgl_memberikan')");	

	

if($query){
echo "<script>alert('Detail Kebutuhan BERHASIL Disimpan'); 
window.location = 'index.php';</script>";
} else {
echo "<script>alert('Detail Kebutuhan GAGAL Disimpan'); 
window.location = 'index.php';</script>";
}
?>