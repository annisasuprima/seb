<!DOCTYPE html>
<html>
<head>
	<title>Data Kerugian di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Data Kerugian</b></h1></legend>
<table border="1">
	<tr>
		<th>ID Kerugian</th>
		<th>Jenis Kerugian</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from kerugian");
while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['id_kerugian'] ?></td>
		<td><?php echo $row['jenis_kerugian'] ?></td>
	</tr>
	<?php
}
?>
</table>
<?php 
$data=mysqli_num_rows($hasil);
echo "jumlah data : $data";
?>
</fieldset>
</body>
</html>