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
	echo "
	<script>
	alert('data berhasil ditambahkan');
	document.location.href = '/page/timsar/tampil.php';
	</script>
";
} else{
	echo "
		<script>
		alert('data gagal ditambahkan');
		document.location.href = '/page/timsar/ftimsar.php';
		</script>
	";
}

?>



</body>
</html>