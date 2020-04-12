<?php 
include 'koneksik.php';
$nik_korban = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM korban WHERE nik_korban='$nik_korban'")or die(mysql_error());
 
header("location:/tb/korban/tampilkorban.php?pesan=hapus");
?>