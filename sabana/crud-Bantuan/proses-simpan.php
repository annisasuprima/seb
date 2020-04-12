
<?php
// Panggil koneksi database
require_once "config.php";

if (isset($_POST['simpan'])) {
	$id_bantuan           = mysqli_real_escape_string($db, trim($_POST['id_bantuan']));
	$jenis_bantuan         = mysqli_real_escape_string($db, trim($_POST['jenis_bantuan']));
	

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO bantuan(id_bantuan,
													 jenis_bantuan)	
											  VALUES('$id_bantuan',
													 '$jenis_bantuan')");		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}					
?>