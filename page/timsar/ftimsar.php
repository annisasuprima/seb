<!DOCTYPE html>
<html>
<?php	
 
 include($_SERVER["DOCUMENT_ROOT"] . '/template/header.php');
 
	$bencana= array(
	 ["name" => "Bungus Teluk Kabung", "lat"=>-1.075426, "long"=>00.411442],
	 ["name" =>"Koto Tangah", "lat"=>-0.840152 , "long"=>100.400777],
	 ["name" => "kuranji", "lat"=>-0.9006999,"long"=>100.4256024],
	 ["name"=>"Lubuk Begalung","lat"=>-0.9757632, "long"=>100.4003703],
	 ["name"=>"Lubuk Kilangan","lat"=>-0.9608858,"long"=>100.4903254],
	 ["name"=>"Nanggalo","lat"=>-0.902515,"long"=> 100.368382],
	 ["name"=>"Padang Barat","lat"=>-0.944676,"long"=>100.355433],
	 ["name"=>"Padang Selatan","lat"=>-0.990109, "long"=>100.370233],
	 ["name"=>"Padang Timur","lat"=>-0.942593,"long"=> 100.378772],
	 ["name"=>"Padang Utara","lat"=>-0.904875, "long"=>100.348421],
	 ["name"=>"Pauh", "lat"=>-0.879957, "long"=>100.500678]
 );
 //  echo JSON_ENCODE($bencana[1]);
	 // die();
 ?>
 
<body>
	<!-- navbar atau Header -->
	<?php include('../../template/nav.php')?>
	<!-- end navbar-->
	<div class="badan">	
	<!-- Ini SideBar  -->
	<?php include('../../template/sidebar.php')?>
	<!-- end SideBar-->	


<form action="tambah.php" method="post" enctype="multipart/form-data">
<div class="content">
		<div class="container">
			<div class="card height-content">
	
			<div class="field">
						<td><label for="id_tim_sar" class="label">ID TimSar</label></td>
            <td><input class="input" type="text" name="id_tim_sar" id="id_tim_sar"></td>
          </div> 
	
					<div class="field">
						<td><label for="nama_tim" class="label">Nama Tim</label></td>
            <td><input class="input" type="text" name="nama_tim" id="nama_tim"></td>
          </div> 

         	 <div class="field">
            <td><label for="wilayah_tujuan" class="label">Wilayah Tujuan </label></td>
            <td>
            <select class="input" name="wilayah_tujuan" id="wilayah_tujuan" onchange="mapChange(this)">
            <option value="">pilih</option>

							<?php

              for ($i= 0; $i < count($bencana); $i++ ) {
                // var
                ?>
                  <option value="<?php echo htmlspecialchars(JSON_ENCODE($bencana[$i]));  ?>"><?php echo $bencana[$i]["name"];  ?></option>
                <?php
              } 
              ?>

				  
		    	</select></td>
          </div>

					<div id="mapid3"></div>
					
		<div class="field">
            <button type="submit" name="tambah" class="button is-primary">Simpan Data</button>
          </div>
        </div>
        
      </form>
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
	<script>
    
    const arr = [
          { locate: 'Bungus Teluk Kabung', map: L.marker([-1.075426, 100.411442]) },
          { locate: 'Koto Tangah', map: L.marker([-0.840152, 100.400777]) },
          { locate: 'kuranji', map: L.marker([-0.9006999,100.4256024]) },
          { locate: 'Lubuk Begalung', map: L.marker([-0.9757632,100.4003703]) },
          { locate: 'Lubuk Kilangan', map: L.marker([-0.9608858,100.4903254]) },
          { locate: 'Nanggalo', map: L.marker([-0.902515, 100.368382]) },
          { locate: 'Padang Barat', map: L.marker([-0.944676,100.355433]) },
          { locate: 'Padang Selatan', map: L.marker([-0.990109, 100.370233]) },
          { locate: 'Padang Timur', map: L.marker([-0.942593, 100.378772]) },
          { locate: 'Padang Utara', map: L.marker([-0.904875, 100.348421]) },
          { locate: 'Pauh', map: L.marker([-0.879957, 100.500678]) },

        
        ];
       
    

    function mapChange (event) {
      // event.preventDefault();
      
      const bencana = JSON.parse(event.value);
      console.log(bencana);

      // const q = L.marker([bencana.lat, bencana.long]).addTo(mymap3);        

        // const ff = arr.filter(data => data.locate !== bencana.name)
        arr.map(item => {
          item.map.addTo(mymap3)
          item.map.bindPopup(`<b>${item.locate}</b><br>I am a popup.`).openPopup()
          
          if(item.locate !== bencana.name) {
            item.map.remove()
            return
          }
        })

    }

        var mymap3 = L.map('mapid3').setView([-0.9345808, 100.2511816], 10);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', 
        {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(mymap3);

        var myStyle = 
        {
            "color": "#ff7800",
            "weight": 5,
            "opacity": 0.65
        };

        
  function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}
mymap3.on('click', onMapClick);
    function popUp(f,l){
    var out = [];
        if (f.properties)
        {
            for(key in f.properties){
                out.push(key+": "+f.properties[key]);
            }
            l.bindPopup(out.join("<br />"));
        }
    }
var jsonTest = new L.GeoJSON.AJAX(["/assets/map.geojson"],{onEachFeature:popUp, style: myStyle}).addTo(mymap3);

       
  
  </script>
	<!-- end Footer -->

</body>
</html>
