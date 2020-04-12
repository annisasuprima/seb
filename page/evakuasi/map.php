<!DOCTYPE html>
<html lang="en">
<?php
	include('../../template/header.php')
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
<div id="mapid4">
    
<select name="" id="">
    <option value=""></option>
</select>
   	</div>
		</div>
    </div>
    
</div>
<div class="clear"></div>
	</div>
	<!-- ini Footer -->
  <!-- end Footer -->
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

   <script src="/bencana/assets/leaflet.ajax.js"></script>

  <script type="text/javascript">
        console.log('jj');
        var mymapi = L.map('mapid4').setView([-0.9047, 100.3576], 15);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', 
        {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(mymapi);

        var myStyle = 
        {
            "color": "red",
            "weight": 5,
            "opacity": 0.65
        };

        
  function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}
mymapi.on('click', onMapClick);
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

    var school = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-school+00ff00@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-school+00ff00@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });

  var building = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-building+ff0080@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-building+ff0080@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });
  var lighthouse = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-lighthouse+ff8000@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-lighthouse+ff8000@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });
  var hospital = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-hospital+0000ff@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-hospital+0000ff@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });
  var police = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-police+8000ff@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-police+8000ff@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });
  var shop = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-shop+00ffff@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-shop+00ffff@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });
  var bank = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-bank+804000@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-bank+804000@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });
  var religiousmuslim = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-religious-muslim+ffff00@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-religious-muslim+ffff00@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });
  var religiousjewish= new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-religious-jewish+ffff00@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-religious-jewish+ffff00@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });
  var village = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-village+800080@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-village+800080@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });
  var library = new L.Icon({
    iconUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-library+408080@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    iconRetinaUrl: 'https://a.tiles.mapbox.com/v4/marker/pin-s-library+408080@2x.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXFhYTA2bTMyeW44ZG0ybXBkMHkifQ.gUGbDOPUN1v1fTs5SeOR4A',
    // iconSize:    [25, 41],
    // iconAnchor:  [12, 41],
    // popupAnchor: [1, -34],
    // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    // shadowSize:  [41, 41]
  });

  

var jsonTest = new L.GeoJSON.AJAX(["/bencana/assets/mapEvk.geojson"],{ pointToLayer: function(feature, latlng) {
  let icon = library
  console.log(feature)
  if (feature.properties['marker-symbol'] === 'school') {
   icon = school
  } 
  if(feature.properties['marker-symbol'] === 'building'){
   icon = building
  }
  if(feature.properties['marker-symbol'] === 'lighthouse'){
   icon = lighthouse
  }
  if(feature.properties['marker-symbol'] === 'hospital'){
   icon = hospital
  }
  if(feature.properties['marker-symbol'] === 'police'){
   icon = police
  }
  if(feature.properties['marker-symbol'] === 'shop'){
   icon = shop
  }
  if(feature.properties['marker-symbol'] === 'bank'){
   icon = bank
  }
  if(feature.properties['marker-symbol'] === 'religious-muslim'){
   icon = religiousmuslim
  }
  if(feature.properties['marker-symbol'] === 'religious-jewish'){
   icon = religiousjewish
  }
  if(feature.properties['marker-symbol'] === 'village'){
   icon = village
  }
  if(feature.properties['marker-symbol'] === 'library'){
   icon = library
  }
        return new L.marker(latlng, {
          icon: icon
        });
    },
    onEachFeature:popUp, style: myStyle}).addTo(mymapi);


    var legend = L.control({position: 'bottomleft'});
    legend.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info legend');
    labels = ['<strong style="font-size:2rem;">Legenda</strong>'],
    categories = [
      {
        title: 'Jalur Evakuasi',
        img: "/bencana/foto/ni.png"
      },
      {
        title: "Potential Shelter",
        img: 'https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2_hdpi.png'
      },
      {
        title: "Zona Rawan Tsunami",
        img: "/bencana/foto/redzone.png"
      }
    ];
    for (var i = 0; i < categories.length; i++) {

            div.innerHTML += 
            labels.push(
                '<div style="display: flex; align-items: center; "><img style="max-width: 40px; height: 40px; margin-right:2rem" src="' + categories[i].img + '"></img> ' +
            (categories[i] ? `<p style="font-size:1.3rem;">${categories[i].title}</p>` : '+') + '</div>');

        }
        div.innerHTML = labels.join('<br>');
    return div;
    };
    legend.addTo(mymapi);
   </script>
</body>
</html>