<?php

include 'koneksi.php';

$nik_korban = $_POST['nik_korban'];
$jenis_bencana = $_POST['jenis_bencana'];
$tgl_bencana = $_POST['tgl_bencana'];
$status_korban = $_POST['status_korban'];

$query = mysqli_query($db, "INSERT INTO detail_korban(nik_korban,jenis_bencana,tgl_bencana,status_korban)VALUES('$nik_korban', '$jenis_bencana','$tgl_bencana','$status_korban')");	

	

if($query){
echo "<script>alert('Detail Korban BERHASIL Disimpan'); 
window.location = 'index.php';</script>";
} else {
echo "<script>alert('Detail Korban GAGAL Disimpan'); 
window.location = 'index.php';</script>";
}
?>