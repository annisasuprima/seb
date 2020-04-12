<html>
<head>
<title>Tambah Barang</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Tambah</h2>

<form action="insert.php" method="POST">

<div class="form_login">
<label>ID Donatur</label>
<select name="id_donatur" class="form_login">
<option value=""></option>
<?php 
include 'koneksi.php';
$kategori = mysqli_query($db, "SELECT * FROM donatur");
while($data2= mysqli_fetch_array($kategori)){
 ?>
                                                        
<option value="<?php echo $data2['id_donatur'] ?>">
<?php echo $data2['id_donatur'] ;?></option>

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
$bantuan = mysqli_query($db, "SELECT * FROM bantuan");
while($data3= mysqli_fetch_array($bantuan)){
 ?>
                                                        
<option value="<?php echo $data3['id_bantuan'] ?>">
<?php echo $data3['id_bantuan'] ;?></option>

<?php
}
?>
</select>
                                                                                                                            

<br>
<br>

<Label>Tanggal Bantuan</Label>
<input type="date" name="tgl_bantuan" 
 required="required" class="form_login">
<br>
<br>

<Label>Jumlah Bantuan</Label>
<input type="number" name="jumlah_bantuan" 
 required="required" class="form_login">
<br>
<br>

<button type="submit" class="tombol_login"> Tambah</button>

</form>
</div>
</body>
</html>