<html>
<head>
<title>Tambah Detail Kebutuhan</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="kotak_login">
		<p class="tulisan_login">Tambah</p>

<form action="insert.php" method="POST">

<div class="form_login">
<label>NIK Korban</label>
<select name="nik_korban" class="form_login">
<option value=""></option>
<?php 
include 'koneksi.php';
$sql2 = mysqli_query($db, "SELECT * FROM detail_korban");
while($data2= mysqli_fetch_array($sql2)){
 ?>
                                                        
<option value="<?php echo $data2['nik_korban'] ?>">
<?php echo $data2['nik_korban'] ;?></option>

<?php
}
?>
</select>

<div class="form_login">
<label>ID Bantuan</label>
<select name="id_bantuan" class="form_login">
<option value=""></option>
<?php 
include 'koneksi.php';
$sql3 = mysqli_query($db, "SELECT * FROM bantuan");
while($data3= mysqli_fetch_array($sql3)){
 ?>
                                                        
<option value="<?php echo $data3['id_bantuan'] ?>">
<?php echo $data3['id_bantuan'] ;?></option>

<?php
}
?>
</select>
                                                                                                                            

<br>
<br>
<Label>Jenis_Bencana</Label>
<input type="text" name="jenis_bencana" 
 required="required" class="form_login">
<br>
<br>

<Label>Tanggal Bencana</Label>
<input type="date" name="tgl_bencana" 
 required="required" class="form_login">
<br>
<br>

<Label>Tanggal Memberikan</Label>
<input type="date" name="tgl_memberikan" 
 required="required" class="form_login">
<br>
<br>

<button type="submit" class="tombol_login"> Tambah</button>
<center><a href="index.php">Kembali</a></center>

</form>
</div>
</body>
</html>