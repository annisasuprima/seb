
<?php
// Panggil koneksi database
include '../../common/koneksi.php';


if (isset($_GET['id'])) {

	$id_donatur = $_GET['id'];
	
	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($conn, "DELETE FROM donatur WHERE id_donatur='$id_donatur'");

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