 <!DOCTYPE html>
<html>
<head>
	<title>Data Detail Shelter di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Detail Shelter</b></h1></legend>
<table border="1">
	<tr>
		<th>Jenis Bencana</th>	
		<th>Tanggal Bencana</th>
		<th>No Urut</th>
		<th>ID Evakuasi</th>
		<th>ID Shelter</th>
		<th>Status Shelter</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from shelter join detail_shelter on shelter.id_shelter=detail_shelter.id_shelter join detail_evakuasi on detail_shelter.id_evakuasi=detail_evakuasi.id_evakuasi");
while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['jenis_bencana'] ?></td>
		<td><?php echo $row['tgl_bencana'] ?></td>
		<td><?php echo $row['no_urut'] ?></td>
		<td><?php echo $row['id_evakuasi'] ?></td>
		<td><?php echo $row['id_shelter'] ?></td>
		<td><?php echo $row['status_shelter'] ?></td>
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


<!-- detail_evakuasi.jenis_bencana, detail_evakuasi.tgl_bencana, detail_evakuasi.no_urut, detail_evakuasi.id_evakuasi, shelter.id_shelter, detail_shelter.status_shelter

 -->









