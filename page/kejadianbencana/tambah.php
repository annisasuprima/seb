<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<?php 
$jenis_bencana = $_POST['jenis_bencana'];
$tgl_bencana = $_POST['tgl_bencana'];
$no_urut = $_POST['no_urut'];
$keterangan_tempat = $_POST['keterangan_tempat'];


$conn = mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal");

$sqlstr= "INSERT INTO `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`, `keterangan_tempat`) VALUES ('$jenis_bencana', '$tgl_bencana', '$no_urut', '$keterangan_tempat');";

$hasil = mysqli_query($conn,$sqlstr); if($hasil){
	echo "
	<script>
	alert('data berhasil ditambahkan')
	document.location.href = '/page/kejadianbencana/KejadianBencana.php';
	</script>
";
} else{
	echo "
		<script>
		alert('data gagal ditambahkan');
		document.location.href = '/page/kejadianbencana/tambah-kj.php';
		</script>
	";
}

?>



</body>
</html>