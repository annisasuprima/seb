<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_sumber_daya'];


// menghapus data dari database
mysqli_query($db,"delete from detail_sumber_daya where id_sumber='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index-detail-sd.php");

?>