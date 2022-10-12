 <!-- ======= Features Section ======= -->
    <section id="features" class="features">
			<div  data-aos="fade-up" style="margin-left:10px; margin-right: 10px; margin-top: 20px;"><br>
        <div class="row">
          <div class="col-lg-12">
          	<div class="card">
  						<div class="card-body shadow p-3 mb-5 bg-white rounded">
         			  <div id="map" style="width: 100%; height: 550px;"></div>
									<script>
										var map = L.map('map');

										L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
										    attribution: '© OpenStreetMap contributors'
										}).addTo(map);

										if(!navigator.geolocation){
											console.log("your browser dont support");
										}else{
											navigator.geolocation.getCurrentPosition(getPosition); 

										}

										function getPosition(position){
											var lat = position.coords.latitude;
											var long = position.coords.longitude;

											<?php foreach($faskes as $fas): ?>
											L.Routing.control({
											    waypoints: [
											        L.latLng(lat, long),
											        L.latLng(<?php echo $fas->latitude ?>, <?php echo $fas->longitude;?>)
											    ],
											    routeWhileDragging: true
											}).addTo(map);
											<?php endforeach; ?>
										}
									</script>
								</div>
			   		 </div>
          </div>  
      	</div>
      </div>

    </section><!-- End Features Section -->



