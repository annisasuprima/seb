<!DOCTYPE html>
<html>
<head>
	<title>Data Korban di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Data Korban</b></h1></legend>
<table border="1">
	<tr>
		<th>ID Korban</th>
		<th>Nama Korban</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from korban");
$data=mysqli_num_rows($hasil);
echo "jumlah data : $data";

while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['nik_korban'] ?></td>
		<td><?php echo $row['nama_korban'] ?></td>
		<td>
        <a href="../korban/haleditkorban.php?id=<?php echo $row["nik_korban"]; ?>" class="button is-warning" style="background-color: black;">Edit</a href=""></a>
        <a href="../controller/hkorban.php?id=<?php echo $row["nik_korban"]; ?>" class="button is-danger" style="background-color: black;">Hapus</a href=""></a>
		</td>
	</tr>
	<?php
}
?>
</table>
</fieldset>

<table>
	<tr>
		<td>
			<br>
			<button><a href="../korban/formulirkorban.php">back</a></button> 
		</td>
	</tr>
</table>

</body>
</html>