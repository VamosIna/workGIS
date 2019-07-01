



      <div id="mapid"></div>




<script type="text/javascript">
	//koding icon
	var kampusico = L.icon({
				iconUrl: '<?php echo base_url()."assets/markers/nj.png" ?>',
				//shadowUrl: 'leaf-shadow.png',

				iconSize:     [50, 50], 
				//shadowSize:   [3, 3], 
				iconAnchor:   [22, 64], 
				shadowAnchor: [4, 12],  
				popupAnchor:  [-3, -16] 
			});

var coffeeico = L.icon({
				iconUrl: '<?php echo base_url()."assets/markers/jn.png" ?>',
				//shadowUrl: 'leaf-shadow.png',

				iconSize:     [40, 40], 
				//shadowSize:   [3, 3], 
				iconAnchor:   [22, 64], 
				shadowAnchor: [4, 12],  
				popupAnchor:  [-3, -16] 
			});



	var map = L.map('mapid').setView([-7.980256, 112.629921], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

$.getJSON("<?php echo base_url()."index.php/home/wor"?>", function(data){
    $.each(data, function(i, field){
    	//alert();
      //$("div").append(field + " ");
      var v_lat = parseFloat(data[i].latw);
      var v_long = parseFloat(data[i].longw);
		L.marker([v_lat, v_long],{icon:kampusico}).addTo(map)
		    .bindPopup(data[i].namaw)
		    .openPopup();
		    });
		    });


$.getJSON("<?php echo base_url()."index.php/home/cs"?>", function(data2){
    $.each(data2, function(i, field){
    	//alert(data2[i].namacs);
      //$("div").append(field + " ");
      var v_lat2 = parseFloat(data2[i].latcs);
      var v_long2 = parseFloat(data2[i].longcs);
		L.marker([v_lat2, v_long2],{icon:coffeeico}).addTo(map)
		    .bindPopup("oke boss  "+data2[i].namacs)
		    .openPopup();
		    });
		    });
</script>
   






