<!DOCTYPE html>
<html>
<head>
	<title>Data Kejadian Bencana di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Data Bencana</b></h1></legend>
<table border="1">
	<tr>
      <th>No Urut</th>
      <th>Tanggal Bencana</th>
      <th>Jenis Bencana</th>
      <th>Keterangan Tempat</th>
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 
function format_kd ($params) {
  $a = json_decode($params);
  // print_r(json_encode($params)[0]);
  return $a->name;
};

$hasil = mysqli_query($conn,"select * from kejadian_bencana");
while($row = $hasil->fetch_assoc()){
?>
	                   <td><?php echo $row['no_urut']; ?></td>
                      <td><?php echo $row['tgl_bencana']; ?></td>
                      <td><?php echo $row['jenis_bencana']; ?></td>
                      <td><?php echo format_kd($row['keterangan_tempat']); ?></td>
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

	<script>
		window.print();
	</script>

</body>
</html>