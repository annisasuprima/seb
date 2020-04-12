
<?php
// Panggil koneksi database
require_once "config.php";

if (isset($_GET['id'])) {

	$id_sumber_daya = $_GET['id'];
	
	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($db, "DELETE FROM sumber_daya WHERE id_sumber_daya='$id_sumber_daya'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: index.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}							
?>