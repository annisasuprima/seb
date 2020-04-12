
<!DOCTYPE html>
<html>
	<?php
	include('template/header.php')
	?>
<body>
	<!-- navbar atau Header -->
	<?php include('template/nav.php')?>
	<!-- end navbar-->
	<div class="badan">	
	<!-- Ini SideBar  -->
	<?php include('template/sidebar.php')?>
	<!-- end SideBar-->		
	<div class="content">
		<div class="container">
			<div class="card height-content">
				<center><h1>Evakuasi Bencana Alam Kota Padang</h1></center>	<br>

<?php
        $hasil = mysqli_query($conn,"select * from kejadian_bencana");
        $hasil2 = mysqli_query($conn,"select * from sumber_daya");
        $hasil3 = mysqli_query($conn,"select * from shelter");
        $hasil4 = mysqli_query($conn,"select * from donatur");
?>
  <div style="display:flex;">
   <div style="flex: 1; display: flex; align-items: center; background-color:#0E0B16; margin: 1rem;box-shadow: 1px 1px 1px rgba(0,0,0,0.3)">
    <i class="fa fa-home fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title">
      <h2 class="int" style="margin: 0">Jenis Bencana</h2>
      <h2 style="color:cornsilk"> <?php echo mysqli_num_rows($hasil); ?></h2>
    </div>


   </div>
   <div  style="flex: 1; display: flex; align-items: center; background-color: #B94629;margin: 1rem; box-shadow: 1px 1px 1px rgba(0,0,0,0.3)">
    <i class="fa fa-book fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="intt" style="margin: 0"> Sumber Daya</h2>
    <h2 style="color:cornsilk"> <?php echo mysqli_num_rows($hasil2); ?></h2>
  </div>
   </div>
   <div style="flex: 1; display: flex; align-items: center; background-color: #A88B4C; margin: 1rem;box-shadow: 1px 1px 1px rgba(0,0,0,0.3)">
    <i class="fa fa-list fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="inttt"  style="margin: 0">Shelter</h2>
    <h2 style="color:cornsilk"> <?php echo mysqli_num_rows($hasil3); ?></h2>
  </div>
   </div>
   <div  style="flex: 1; display: flex; align-items: center; background-color:#70AB8F; margin: 1rem;box-shadow: 1px 1px 1px rgba(0,0,0,0.5)">
    <i class="fa fa-unlock fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="intttt"  style="margin: 0">Donatur</h2>
    <h2 style="color:cornsilk"> <?php echo mysqli_num_rows($hasil4); ?></h2>
  </div>
   </div>
  </div>

  <div style="display: flex;">
    <div style="flex: 1;margin: 1rem;">
    <?php
        // Fetch all users data from database
        $result = mysqli_query($conn, "SELECT * FROM  kejadian_bencana limit 3"); 
        ?>
      <table class="table">
      <thead style="background-color: #0E0B16; color: #fff">
        <tr>
          <td>
              Tanggal Bencana
          </td>
          <td>
              Jenis bencana
          </td>
        </tr>
      </thead>
      <tbody>
      <?php

                  $no= 1;
                  while($user_data = mysqli_fetch_array($result)) {         
		              ?>
                    <tr>
                      <td><?php echo $user_data['tgl_bencana']; ?></td>
                      <td><?php echo $user_data['jenis_bencana']; ?></td>
                    </tr>
                    <?php
                  }
                    ?>
      </tbody>  
    </table>

    </div>
    <div style="flex: 1;margin: 1rem;">
    <?php
        // Fetch all users data from database
        $result2 = mysqli_query($conn, "SELECT * FROM  sumber_daya limit 3"); 
        ?>
      <table class="table">
      <thead style="background-color: #B94629; color: #fff">
        <tr>
        <td>
              ID sumberdaya
          </td>
          <td>
              nama sumberdaya
          </td>
        </tr>
      </thead>
      <tbody>
      <?php

                  $no= 1;
                  while($user_data = mysqli_fetch_array($result2)) {         
		              ?>
                    <tr>
                    <td><?php echo $user_data['id_sumber_daya']; ?></td>
                      <td><?php echo $user_data['nama_sumber_daya']; ?></td>
                    
                    </tr>
                    <?php
                  }
                    ?>
      </tbody>  
    </table>

    </div>
  </div>

  <div style="display: flex;">
    <div style="flex: 1;margin: 1rem;">
    <?php
        // Fetch all users data from database
        $result3 = mysqli_query($conn, "SELECT * FROM  shelter limit 3"); 
        ?>
      <table class="table">
      <thead style="background-color:  #A88B4C; color: #fff">
        <tr>
          <td>
              Lokasi
          </td>
          <td>
             Daya tampung
          </td>
        </tr>
      </thead>
      <tbody>
      <?php

                  $no= 1;
                  while($user_data = mysqli_fetch_array($result3)) {         
		              ?>
                    <tr>
                      <td><?php echo $user_data['lokasi']; ?></td>
                      <td><?php echo $user_data['daya_tampung']; ?></td>
                    </tr>
                    <?php
                  }
                    ?>
      </tbody>  
    </table>

    </div>
    <div style="flex: 1;margin: 1rem;">
    <?php
        // Fetch all users data from database
        $result4 = mysqli_query($conn, "SELECT * FROM  donatur limit 3"); 
        ?>
      <table class="table">
      <thead style="background-color: #70AB8F; color: #fff">
        <tr>
        <td>
              Nama Donatur
          </td>
         
        </tr>
      </thead>
      <tbody>
      <?php

                  $no= 1;
                  while($user_data = mysqli_fetch_array($result4)) {         
		              ?>
                    <tr>
                    <td><?php echo $user_data['nama_donatur']; ?></td>
                  
                    
                    </tr>
                    <?php
                  }
                    ?>
      </tbody>  
    </table>

    </div>
  </div>
				</div>
		</div>
	</div>
	<div class="clear"></div>
	</div>
	<!-- ini Footer -->
	<?php
  
	include('template/footer.php')
	?>
	<!-- end Footer -->
</body>
</html>