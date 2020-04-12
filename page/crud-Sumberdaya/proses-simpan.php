
<?php
// Panggil koneksi database
include '../../common/koneksi.php';


if (isset($_POST['simpan'])) {
	$id_sumber_daya           = mysqli_real_escape_string($conn, trim($_POST['id_sumber_daya']));
	$nama_sumber_daya         = mysqli_real_escape_string($conn, trim($_POST['nama_sumber_daya']));
	

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($conn, "INSERT INTO sumber_daya(id_sumber_daya,
													 nama_sumber_daya)	
											  VALUES('$id_sumber_daya',
													 '$nama_sumber_daya')");		



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