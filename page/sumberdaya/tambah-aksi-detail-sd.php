<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_tim_sar = $_POST['id_tim_sar'];
$id_sumber_daya = $_POST['id_sumber_daya'];
$nik_korban = $_POST['nik_korban'];
$jenis_bencana= $_POST['jenis_bencana'];
$tgl_bencana = $_POST['tgl_bencana'];
$no_urut = $_POST['no_urut'];
$jumlah_sumber_daya = $_POST['jumlah_sumber_daya'];


// menginput data ke database
mysqli_query($db,"insert into detail_sumber_daya values('','$id_tim_sar','$id_sumber_daya','$nik_korban','$jenis_bencana','$tgl_bencana','$no_urut','$jumlah_sumber_daya')");

// mengalihkan halaman kembali ke index.php
header("location:index-detail-sd.php");

?>