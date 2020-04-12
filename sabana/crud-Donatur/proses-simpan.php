
<?php
// Panggil koneksi database
require_once "config.php";

if (isset($_POST['simpan'])) {
	$id_donatur           = mysqli_real_escape_string($db, trim($_POST['id_donatur']));
	$nama_donatur         = mysqli_real_escape_string($db, trim($_POST['nama_donatur']));
	

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO donatur(id_donatur,
													 nama_donatur)	
											  VALUES('$id_donatur',
													 '$nama_donatur')");		

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