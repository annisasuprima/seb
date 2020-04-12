 
<?php
// Panggil koneksi database
include '../../common/koneksi.php';


if (isset($_POST['simpan'])) {
	if (isset($_POST['id_donatur'])) {
		$id_donatur         = mysqli_real_escape_string($conn, trim($_POST['id_donatur']));
		$nama_donatur         = mysqli_real_escape_string($conn, trim($_POST['nama_donatur']));
		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($conn, "UPDATE donatur SET nama_donatur			= '$nama_donatur'
														
												  WHERE id_donatur			= '$id_donatur'");		

		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}	
	}
}					
?>