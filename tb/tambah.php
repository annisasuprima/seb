<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<?php 
$id_tim_sar = $_POST['id_tim_sar'];
$nama_tim = $_POST['nama_tim'];
$wilayah_tujuan = $_POST['wilayah_tujuan'];


$conn = mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal");

$sqlstr= "INSERT INTO tim_sar (id_tim_sar,nama_tim,wilayah_tujuan) 
values ('$id_tim_sar','$nama_tim','$wilayah_tujuan')";

$hasil = mysqli_query($conn,$sqlstr); if($hasil){
echo "<h2>Registrasi Berhasil!</h2>";
} else{
echo "<h2>Registrasi Tidak Berhasil!</h2>";
}

?>

<table>
	<caption>TIMSAR</caption>
	<tr>
		<td><form action="tampil.php" method="post">
			<td><input type="submit" value="Lihat Data"></td>
		</form>
		</td>
		<td>
		<form action="ftimsar.php" method="post">
			<td><input type="submit" value="Daftar Lagi"></td>
		</form>
		</td>
	</tr>
</table>


</body>
</html>