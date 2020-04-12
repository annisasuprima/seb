 
<?php
// Panggil koneksi database
require_once "config.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['nik_korban'])) {
		$nik_korban         = mysqli_real_escape_string($db, trim($_POST['nik_korban']));
		$nama_korban         = mysqli_real_escape_string($db, trim($_POST['nama_korban']));
		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE korban SET nama_korban			= '$nama_korban'
														
												  WHERE nik_korban			= '$nik_korban'");		

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