 
<?php
// Panggil koneksi database
include '../../common/koneksi.php';

if (isset($_POST['simpan'])) {
	if (isset($_POST['id_sumber_daya'])) {
		$id_sumber_daya          = mysqli_real_escape_string($conn, trim($_POST['id_sumber_daya']));
		$nama_sumber_daya          = mysqli_real_escape_string($conn, trim($_POST['nama_sumber_daya']));
		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($conn, "UPDATE sumber_daya SET nama_sumber_daya	= '$nama_sumber_daya'
														
												  WHERE id_sumber_daya= '$id_sumber_daya'");		


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