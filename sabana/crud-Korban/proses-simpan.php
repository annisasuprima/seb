
<?php
// Panggil koneksi database
require_once "config.php";

if (isset($_POST['simpan'])) {
	$nik_korban          = mysqli_real_escape_string($db, trim($_POST['nik_korban']));
	$nama_korban         = mysqli_real_escape_string($db, trim($_POST['nama_korban']));
	

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO korban(nik_korban,
													 nama_korban)	
											  VALUES('$nik_korban',
													 '$nama_korban')");		

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