
<?php
// Panggil koneksi database
include '../../common/koneksi.php';

if (isset($_GET['id'])) {

	$nik_korban = $_GET['id'];
	
	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($conn, "DELETE FROM korban WHERE nik_korban='$nik_korban'");

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