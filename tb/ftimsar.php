<!DOCTYPE html>
<html>
<head>
	<title>Formulir TimSar</title>
</head>
<body>

<form action="tambah.php" method="post">
	<fieldset>
		<legend><h1><b>Formulir TimSar</b></h1></legend>
	<table>
		<tr>
			<td>ID TimSar </td>
			<td><input type="text" name="id_tim_sar" size="30"></td>
		</tr>
		<tr>
			<td>Nama Tim </td>
			<td><input type="text" name="nama_tim" size="30"></td>
		</tr>
		<tr>
			<td>Wilayah Tujuan </td>
			<td>
			<select name="wilayah_tujuan">
				<option value="Bungus">Bungus Teluk Kabung</option>
				<option value="koto tangah">Koto Tangah</option>
				<option value="kuranji">Kuranji</option>
				<option value="lubeg">Lubuk Begalung</option>
				<option value="lubukkilangan">Lubung Kilangan</option>
				<option value="nannggalo">Nanggalo</option>
				<option value="padangbarat">Padang Barat</option>
				<option value="padangselatan">Padang Selatan</option>
				<option value="padangtimur">Padang Timur</option>
				<option value="paddangutara">Padan Utara</option>
				<option value="pauh">Pauh</option>
<!-- 				<option SELECTED>--Pilih Kecamatan--</option>
 -->			</select>
			</td>
		</tr>
		<tr>	
			<td colspan="1">
			<button type="sumbit" name="sumbit">Submit</button>
			<input type="reset" value="Reset" size="30"></td>
		</tr>
	</table>
	</fieldset>
</form>

</body>
</html>
