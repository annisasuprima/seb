<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<?php 
$nik_korban = $_POST['nik_korban'];
$nama_korban = $_POST['nama_korban'];


$conn = mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal");

$sqlstr= "INSERT INTO korban (nik_korban,nama_korban) 
values ('$nik_korban','$nama_korban')";

$hasil = mysqli_query($conn,$sqlstr); if($hasil){
echo "<h2>Registrasi Berhasil!</h2>";
} else{
echo "<h2>Registrasi Tidak Berhasil!</h2>";
}

?>

<table>
	<caption>Korban</caption>
	<tr>
		<td><form action="tampilkorban.php" method="post">
			<td><input type="submit" value="Lihat Data"></td>
		</form>
		</td>
		<td>
		<form action="formulirkorban.php" method="post">
			<td><input type="submit" value="Daftar Lagi"></td>
		</form>
		</td>
	</tr>
</table>


</body>
</html>