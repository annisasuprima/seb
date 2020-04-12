
<?php
// Panggil koneksi database
include '../../common/koneksi.php';


if (isset($_POST['simpan'])) {
	$id_donatur           = mysqli_real_escape_string($conn, trim($_POST['id_donatur']));
	$nama_donatur         = mysqli_real_escape_string($conn, trim($_POST['nama_donatur']));
	

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($conn, "INSERT INTO donatur(id_donatur,
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