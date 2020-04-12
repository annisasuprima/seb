<!DOCTYPE html>
<html>
<head>
	<title>Formulir Korban</title>
</head>
<body>

<form action="tambahkorban.php" method="post">
	<fieldset>
		<legend><h1><b>Formulir Korban</b></h1></legend>
	<table>
		<tr>
			<td>NIK Korban </td>
			<td><input type="text" name="nik_korban" size="30"></td>
		</tr>
		<tr>
			<td>Nama Korban </td>
			<td><input type="text" name="nama_korban" size="30"></td>
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
