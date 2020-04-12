<?php 
    require '../controller/editkorban.php';
?>

<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Korban</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>

    <body>

      <h1 align="center" style="margin-top: 50px; color: white;" class="title" >Halaman Edit Data</h1>
      <form action="../controller/editkorban.php" enctype="multipart/form-data" method="post">

        <div>
          <input type="text" name="nik_korban" id="nik_korban" value="<?= $row["nik_korban"]; ?>" style="display: none;">
        <div>
             <td><label for="nama_korban" class="label" style="color: white;">merek_barang</label></td>
            <td><input class="input" type="text" name="nama_korban" id="nama_korban" value="<?php echo $row["nama_korban"]; ?>"></td>
          </div>

           <div>
            <button type="submit" name="ubah" class="button is-primary" style="background-color: gray;">Simpan Perubahan</button>
          </div>
        </div>
        <br>

      </form>
    </body>
</html>