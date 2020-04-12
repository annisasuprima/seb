
<!DOCTYPE html>
<html>
	<?php
	include($_SERVER["DOCUMENT_ROOT"] . '/template/header.php')
	?>
<body>

	<!-- navbar atau Header -->
	<?php include('../../template/nav.php')?>
	<!-- end navbar-->
	<div class="badan">	
	<!-- Ini SideBar  -->
	<?php include('../../template/sidebar.php')?>
	<!-- end SideBar-->		
	<div class="content">
		<div class="container">
			<div class="card height-content">
			<center><h2>detail Donatur</h2></center>
      <br>
      
  <div style="display: flex;justify-content:flex-end; width:100%;">
  <?php
  if (isset($_SESSION['login'])){
    ?>
               <button style="margin:0"> <a href="insert.php"style="color:white !important; text-decoration:none;" class><i class="fa fa-plus-square"></i> Tambah </a></button>
                <?php
  }
                ?>
              <button style="margin:0"><a href="print.php" style="color:white !important; text-decoration:none;">Print</a></button>
	</div>
		
<table class="tabel">
<tr>
<th>No</th>
<th>ID Donatur</th>
<th>ID Bantuan</th>
<th>Tanggal Bantuan</th>
<th>Jumlah Bantuan</th>
</tr>

<?php
include 'koneksi.php';
$no = 1;
$sql = mysqli_query($db, "SELECT donatur.id_donatur, bantuan.id_bantuan, detail_donatur.tgl_bantuan, detail_donatur.jumlah_bantuan FROM detail_donatur JOIN donatur ON donatur.id_donatur=detail_donatur.id_donatur JOIN bantuan ON bantuan.id_bantuan=detail_donatur.id_bantuan  order by id_donatur desc");
while ($data = mysqli_fetch_array($sql)) {

?>

<tr>
<td><?php echo $no++;?></td>
<td><?php echo $data['id_donatur'];?></td>
<td><?php echo $data['id_bantuan'];?></td>
<td><?php echo $data['tgl_bantuan'];?></td>
<td><?php echo $data['jumlah_bantuan'] ;?></td>
 <tr>


<?php
}
?>
</div>
      <div>
      
   
     
</table> 
      </div>
		</div>
	</div>
	<div class="clear"></div>
	</div>
	<!-- ini Footer -->
	<?php
	include('../../template/footer.php')
	?>
	<!-- end Footer -->

</body>
<html>