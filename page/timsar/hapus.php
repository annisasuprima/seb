<?php 

include '../../common/koneksi.php';
$id_tim_sar = $_GET['id_tim_sar'];
mysqli_query($conn,"DELETE FROM tim_sar WHERE id_tim_sar='$id_tim_sar'")or die(mysql_error());
 
header("location:tampil.php?pesan=hapus");
?>