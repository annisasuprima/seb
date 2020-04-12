<!DOCTYPE html>
<html>
<?php
	include('../../template/header.php');

	function format_kd ($params) {

		$a = json_decode($params);
	
		// print_r(json_encode($params)[0]);
		return $a->name;
	};
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
			<div style="display: flex;justify-content:flex-end; width:100%;">
			<button>	<a href="ftimsar.php" style="color:white !important; text-decoration:none;"  class><i class="fa fa-plus-square"></i> Tambah </a></button>
			</div>
			

<table class="table">
<tr>
	<th>ID Tim Sar</th>
	<th>Nama Tim</th>
	<th>Wilayah Tujuan</th>
	<th>Aksi</th>
</tr>

<?php
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from tim_sar");
$data=mysqli_num_rows($hasil);
echo "jumlah data : $data";

while($row = mysqli_fetch_array($hasil))
{
?>

<tr>
	<td><?php echo $row[0] ?></td>
	<td><?php echo $row[1] ?></td>
	<td><?php echo  format_kd($row[2]) ?></td>
	<td>
  <a href="edit-kj.php?id=<?php echo $user_data['id'];?>"><i class="fa fa-edit"></i></a> |
	<a href="hapus.php?id_tim_sar=<?php echo $row['id_tim_sar'];?>"><i class="fa fa-trash"></i></a>
  </td>

</tr>

<?php
}
?>
 </table>
   
			</div>
      <div>
      
   
      
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
</html>