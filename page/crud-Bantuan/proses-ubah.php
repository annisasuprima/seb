 
<?php
// Panggil koneksi database
include '../../common/koneksi.php';

if (isset($_POST['simpan'])) {
	if (isset($_POST['id_bantuan'])) {
		$id_bantuan          = mysqli_real_escape_string($conn, trim($_POST['id_bantuan']));
		$jenis_bantuan          = mysqli_real_escape_string($conn, trim($_POST['jenis_bantuan']));
		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($conn, "UPDATE bantuan SET jenis_bantuan 			= '$jenis_bantuan'
														
												  WHERE id_bantuan			= '$id_bantuan'");		

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