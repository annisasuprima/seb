
<!DOCTYPE html>
<html>
	<?php
  include($_SERVER["DOCUMENT_ROOT"] . '/template/header.php');
  session_start();
	?>
<body>
    <?php
        // Fetch all users data from database
        $result = mysqli_query($conn, "SELECT * FROM  kejadian_bencana");

        function format_kd ($params) {
          $a = json_decode($params);
          // print_r(json_encode($params)[0]);
          return $a->name;
        };
      ?>

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
      <center><h2>Bencana di Kota Padang</h2></center>
			<br>
  
  </table> 
 <div style="display: flex;justify-content:flex-end; width:100%;">
  <?php
  if (isset($_SESSION['login'])){
    ?>
               <button style="margin:0"> <a href="tambah-kj.php"style="color:white !important; text-decoration:none;" class><i class="fa fa-plus-square"></i> Tambah </a></button>
                <?php
  }
                ?>
              <button style="margin:0"><a href="cetakkj.php" style="color:white !important; text-decoration:none;">Print</a></button>
	</div>
				<table class="tabel">
                  <thead>
                    <tr>
                      <th>No Urut</th>
                      <th>Tanggal Bencana</th>
                      <th>Jenis Bencana</th>
                      <th>Keterangan Tempat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php

                  $no= 1;
                  while($user_data = mysqli_fetch_array($result)) {         
		              ?>
                    <tr>
                      <td><?php echo $user_data['no_urut']; ?></td>
                      <td><?php echo $user_data['tgl_bencana']; ?></td>
                      <td><?php echo $user_data['jenis_bencana']; ?></td>
                      <td><?php echo format_kd($user_data['keterangan_tempat']); ?></td>
      
                      <td>
                      <a href="edit-kj.php?id=<?php echo $user_data['id'];?>"><i class="fa fa-edit"></i></a> |
                      <a href="hapus.php?no_urut=<?php echo $user_data['no_urut'];?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                  }
                    ?>
                  </tbody>
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