
<html>
    <head>
        <title>Gallery</title>
        <link rel="stylesheet" href="leaflet/leaflet.css" />
        <link rel="stylesheet" href="include/main.css" />
        <script src="leaflet/leaflet.js"></script>
    </head>
    <body>
        <div id="map"></div>
        <div id="filter">
            <input type="radio" name="Sommer">
            <input type="radio" name="Winter">
            <select name="Aktivität">
                   <option value="Wanderung">Wanderng</option>
                   <option value="Hochtour">Hochtour</option>
                   <option value="Skitour">Skitour</option>
            </select>
        </div>
        
        
        <script>
               var map = L.map('map').setView([46.600, 8.212], 8);

		L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="http://mapbox.com">Mapbox</a>',
			id: 'examples.map-i875mjb7'
		}).addTo(map);


		L.marker([46.026, 7.884]).addTo(map)
                        .bindPopup("<b>Rimpfischhorn 4199m</b><br />Hochtour");
			//.bindPopup("<b>Rimpfischhorn</b><br />I am a popup.").openPopup();
		var popup = L.popup();

		function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("Aktivität erfassen " + e.latlng.toString())
				.openOn(map);
		}

		map.on('click', onMapClick);

            </script>
        <?php 
            echo 'TEST';
            echo '\n';
            echo 'TEST4';
        ?>
    </body>
</html>



