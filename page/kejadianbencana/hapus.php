<?php 

include '../../common/koneksi.php';
$no_urut = $_GET['no_urut'];
mysqli_query($conn,"DELETE FROM kejadian_bencana WHERE no_urut='$no_urut'")or die(mysql_error());
 
header("location:KejadianBencana.php?pesan=hapus");
?>