<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Data</title>
</head>
<body>
	<h1>Daftar TimSar</h1>
<table border="1">
<tr>
	<th>ID TimSar</th>
	<th>Nama Tim</th>
	<th>Wilayah Tujuan</th>
</tr>

<?php
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from tim_sar");
$data=mysqli_num_rows($hasil);
echo "jumlah data : $data";

while($row = mysqli_fetch_array($hasil))
{
?>

<tr>
	<td><?php echo $row[0] ?></td>
	<td><?php echo $row[1] ?></td>
	<td><?php echo $row[2] ?></td>
	<td>
        <a href="../ftimsar.php?id=<?php echo $tm["id_tim_sar"]; ?>" class="button is-warning" style="background-color: black;">Edit</a href=""></a>
        <a href="../controller/htimsar.php?id=<?php echo $tm["id_tim_sar"]; ?>" class="button is-danger" style="background-color: black;">Hapus</a href=""></a>
	</td>
</tr>

<?php
}
?>
</table>

<table>
	<tr>
		<td>
			<br>
			<button><a href="../tb/ftimsar.php">back</a></button> 
		</td>
	</tr>
</table>

</body>
</html>