 <!-- Aplikasi CRUD
 ************************************************
 * Developer    : Indra Styawantoro
 * Company      : Indra Studio
 * Release Date : 1 Maret 2016
 * Website      : http://www.indrasatya.com, http://www.kulikoding.net
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone        : +62-856-6991-9769
 * BBM          : 7679B9D9
 -->

<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$id_donatur          = mysqli_real_escape_string($db, trim($_POST['id_donatur']));
	$id_bantuan          = mysqli_real_escape_string($db, trim($_POST['id_bantuan']));
	$jumlah_bantuan  = mysqli_real_escape_string($db, trim($_POST['jumlah_bantuan']));

	$tanggal       = $_POST['tgl_bantuan'];
	$tgl           = explode('-',$tanggal);
	$tgl_bantuan= $tgl[2]."-".$tgl[1]."-".$tgl[0];

	

	// perintah query untuk menyimpan data ke tabel is_siswa
$sql = "INSERT INTO detail_donatur(id_donatur,id_bantuan,tgl_bantuan,jumlah_bantuan)
VALUES('$id_donatur','$id_bantuan','$tgl_bantuan','$jumlah_bantuan')";
$query = mysqli_query($db, $sql) or die(mysqli_error());
	

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