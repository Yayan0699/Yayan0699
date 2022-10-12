
    <section class="section">
      <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

            	 <!-- Filter By Jenis
            	 
		              <div class="col-lg-5" style="margin-top:10px;">
						      	<form  method="POST" action="<?php echo base_url('administrator/rasio/filter_jenis') ?>">
								      	<div class="d-flex align-items-center">
								        <select class="form-select " aria-label="Default select example" name="keyword">
								        <option selected> Fasilitas</option>
					                      <option value="rumkit">Rumah Sakit</option>
					                      <option value="puskesmas">Puskesmas</option>
					                      <option value="poskesdes">Poskesdes</option>
					                      <option value="klinik">Klinik</option>
					                      <option value="apotik">Apotik</option>    
					                    </select>
								         <button type="submit" class="btn " style="background-color:#012970; color: white; margin: 0 10px;">Filter</button>
								         </div>
						     		 </form>

			     		 		</div> -->

              <!-- Vertical Form <br>-->
               <div id="map" style=" height: 500px;"></div>

               <script src="<?php echo base_url('map/aikmel.js') ?>"></script>
               <script src="<?php echo base_url('map/jerowaru.js') ?>"></script>
               <script src="<?php echo base_url('map/keruak.js') ?>"></script>
               <script src="<?php echo base_url('map/sakra_barat.js') ?>"></script>
               <script src="<?php echo base_url('map/sakra_timur.js') ?>"></script>
               <script src="<?php echo base_url('map/sakra.js') ?>"></script>
               <script src="<?php echo base_url('map/sikur.js') ?>"></script>
               <script src="<?php echo base_url('map/terara.js') ?>"></script>
               <script src="<?php echo base_url('map/montong_gading.js') ?>"></script>
               <script src="<?php echo base_url('map/labuhan_haji.js') ?>"></script>
               <script src="<?php echo base_url('map/pringgasela.js') ?>"></script>
               <script src="<?php echo base_url('map/selong.js') ?>"></script>
               <script src="<?php echo base_url('map/sukamulia.js') ?>"></script>
               <script src="<?php echo base_url('map/masbagik.js') ?>"></script>
               <script src="<?php echo base_url('map/pringgabaya.js') ?>"></script>
               <script src="<?php echo base_url('map/suela.js') ?>"></script>
               <script src="<?php echo base_url('map/wanasaba.js') ?>"></script>
               <script src="<?php echo base_url('map/sembalun.js') ?>"></script>
               <script src="<?php echo base_url('map/sambelia.js') ?>"></script>
                <script src="<?php echo base_url('map/suralaga.js') ?>"></script>


               <script>
               		var map = L.map('map').setView([-8.6444677,116.5102843], 11);

									var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
										attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
									}).addTo(map);

									var aikmelStyle = {"color": "green", "opacity": 1};
									var jerowaruStyle = {"color": "green", "opacity": 1};
									var keruakStyle = {"color": "green", "opacity": 1};
									var sakbarStyle = {"color": "green", "opacity": 1};
									var saktiStyle = {"color": "green", "opacity": 1};
									var sakraStyle = {"color": "green", "opacity": 1};
									var sikurStyle = {"color": "green", "opacity": 1};
									var teraraStyle = {"color": "green", "opacity": 1};
									var mtGadingStyle = {"color": "green", "opacity": 1};
									var masbagikStyle = {"color": "green", "opacity": 1};
									var labuanStyle = {"color": "green", "opacity": 1};
									var selongStyle = {"color": "green", "opacity": 1};
									var sukamuliaStyle = {"color": "red", "opacity": 1};
									var pringgaselaStyle = {"color": "red", "opacity": 1};
									var pringgabayaStyle = {"color": "red", "opacity": 1};
									var suelaStyle = {"color": "red", "opacity": 1};
									var wanasabaStyle = {"color": "red", "opacity": 1};
									var sembalunStyle = {"color": "red", "opacity": 1};
									var sambeliaStyle = {"color": "red", "opacity": 1};




									var aikmel = L.geoJSON(aikmel, {
									    style: aikmelStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Aikmel <br/>"+
										"<b>Luas Wilayah : </b>75,05 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>71.108 Penduduk <br/>");

								
									var jerowaru = L.geoJSON(jerowaru, {
									    style: jerowaruStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Jerowaru <br/>"+
										"<b>Luas Wilayah : </b>142,78 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>62.276 Penduduk <br/>");

									
									var keruak = L.geoJSON(keruak, {
									    style: keruakStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Keruak <br/>"+
										"<b>Luas Wilayah : </b>40,49 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>58,518 Penduduk <br/>");

									var sakra_barat = L.geoJSON(sakra_barat, {
									    style: sakbarStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Sakra Barat <br/>"+
										"<b>Luas Wilayah : </b>32,30 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>59.003 Penduduk <br/>");

									var sakra_timur = L.geoJSON(sakra_timur, {
									    style: saktiStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Sakra Timur <br/>"+
										"<b>Luas Wilayah : </b>37,04 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>52.774 Penduduk <br/>");

									var sakra = L.geoJSON(sakra, {
									    style: sakraStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Sakra <br/>"+
										"<b>Luas Wilayah : </b>25,09 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>64.982 Penduduk <br/>");

									var sikur = L.geoJSON(sikur, {
									    style: sikurStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Sikur <br/>"+
										"<b>Luas Wilayah : </b>78,27 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>80136 Penduduk <br/>");
									var terara = L.geoJSON(terara, {
									    style: teraraStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Terara <br/>"+
										"<b>Luas Wilayah : </b>41,40 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>76958 Penduduk <br/>");
									var montong_gading = L.geoJSON(montong_gading, {
									    style: mtGadingStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Montong Gading <br/>"+
										"<b>Luas Wilayah : </b>25,66 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>49488 Penduduk <br/>");
									var masbagik = L.geoJSON(masbagik, {
									    style: masbagikStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Masbagik <br/>"+
										"<b>Luas Wilayah : </b>33,17 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>109412 Penduduk <br/>");
									var labuhan_haji = L.geoJSON(labuhan_haji, {
									    style: labuanStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> labbuhan Haji <br/>"+
										"<b>Luas Wilayah : </b>49,57 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>65400 Penduduk <br/>");
									var selong = L.geoJSON(selong, {
									    style: selongStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> selong <br/>"+
										"<b>Luas Wilayah : </b>31,68 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>93766 Penduduk <br/>");
									var sukamulia = L.geoJSON(sukamulia, {
									    style: sukamuliaStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Sukamulia <br/>"+
										"<b>Luas Wilayah : </b>14,49 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>36885 Penduduk <br/>");
									var pringgasela = L.geoJSON(pringgasela, {
									    style: pringgaselaStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> pringgasela <br/>"+
										"<b>Luas Wilayah : </b>134,26 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>63999 Penduduk <br/>");
									var pringgabaya = L.geoJSON(pringgabaya, {
									    style: pringgaselaStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> pringgaya <br/>"+
										"<b>Luas Wilayah : </b>136,20 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>112373 Penduduk <br/>");
									var suela = L.geoJSON(suela, {
									    style: suelaStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Suela <br/>"+
										"<b>Luas Wilayah : </b>115,01 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>46061 Penduduk <br/>");
									var sambelia = L.geoJSON(sambelia, {
									    style: sambeliaStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Sambelia <br/>"+
										"<b>Luas Wilayah : </b>245,22 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>37903 Penduduk <br/>");
									var sembalun = L.geoJSON(sembalun, {
									    style: sembalunStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Sembalun <br/>"+
										"<b>Luas Wilayah : </b>217,08 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>23900 Penduduk <br/>");
									var suralaga = L.geoJSON(suralaga, {
									    style: sembalunStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Suralaga <br/>"+
										"<b>Luas Wilayah : </b>27,02 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>65592 Penduduk <br/>");
									var wanasaba = L.geoJSON(wanasaba, {
									    style: wanasabaStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Wanasaba <br/>"+
										"<b>Luas Wilayah : </b>55,89 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>69264 Penduduk <br/>");


					

								// //L.geoJSON('<?php echo base_url('map/aikmel.geojson') ?>').addTo(map);
								// <?php foreach($faskes as $fas): ?> 
								// 	<?php if( $fas->kategori == "rumkit"){ ?>
								// 		var rumkit = L.icon({
								//     iconUrl: '<?php echo base_url('leaflet/images/rumkit.png') ?>',
								//     iconSize: [30, 37], // size of the icon
								// 		});
								// 	L.marker([<?= $fas->latitude ?>,<?= $fas->longitude ?>], {icon:rumkit}).addTo(map)
								// 	.bindPopup("<img src='<?php echo base_url() ;?>template/assets/foto/<?php echo $fas->foto; ?>' width='100%' height='150'> <br/>"+
								// 		"<b>Nama : </b> <?= $fas->nama_faskes ?> <br/>"+
								// 		"<b>Alamat : </b><?= $fas->alamat ?> <br/>"+
								// 		"<b>Kecamatan : </b><?= $fas->nama_kecamatan ?> <br/>"+
								// 		"<b>No Telpon : </b><?= $fas->telpon ?> <br/>"+
								// 		"<b>Jam Operasional : </b><?= $fas->jam ?> <br/>"+
								// 		"<b>Layanan : </b><?= $fas->layanan ?> <br/>"+
								// 		"<b>Dokter : </b><?= $fas->dokter ?> <br/>"+
								// 		"<a href='<?php echo base_url('administrator/pemetaan/rute/'.$fas->id_faskes) ?>' class='btn btn-default btn-sm'><b> Lihat Rute ....</b></a>");
								// <?php }else if($fas->kategori == "puskesmas"){ ?>
								// 	var rumkit = L.icon({
								//     iconUrl: '<?php echo base_url('leaflet/images/puskesmas.png') ?>',
								//     iconSize: [30, 37], // size of the icon
								// 		});
								// 	L.marker([<?= $fas->latitude ?>,<?= $fas->longitude ?>], {icon:rumkit}).addTo(map)
								// 	.bindPopup("<img src='<?php echo base_url() ;?>template/assets/foto/<?php echo $fas->foto; ?>' width='100%' height='150'> <br/>"+
								// 		"<b>Nama : </b> <?= $fas->nama_faskes ?> <br/>"+
								// 		"<b>Alamat : </b><?= $fas->alamat ?> <br/>"+
								// 		"<b>Kecamatan : </b><?= $fas->nama_kecamatan ?> <br/>"+
								// 		"<b>No Telpon : </b><?= $fas->telpon ?> <br/>"+
								// 		"<b>Jam Operasional : </b><?= $fas->jam ?> <br/>"+
								// 		"<b>Layanan : </b><?= $fas->layanan ?> <br/>"+
								// 		"<b>Dokter : </b><?= $fas->dokter ?> <br/>"+
								// 		"<a href='<?php echo base_url('administrator/pemetaan/rute/'.$fas->id_faskes) ?>' class='btn btn-default btn-sm'><b> Lihat Rute ....</b></a>");
								// <?php }else{ ?>

								// 	var rumkit = L.icon({
								//     iconUrl: '<?php echo base_url('leaflet/images/poskesdes.png') ?>',
								//     iconSize: [30, 37], // size of the icon
								// 		});
								// 	L.marker([<?= $fas->latitude ?>,<?= $fas->longitude ?>], {icon:rumkit}).addTo(map)
								// 	.bindPopup("<img src='<?php echo base_url() ;?>template/assets/foto/<?php echo $fas->foto; ?>' width='100%' height='150'> <br/>"+
								// 		"<b>Nama : </b> <?= $fas->nama_faskes ?> <br/>"+
								// 		"<b>Alamat : </b><?= $fas->alamat ?> <br/>"+
								// 		"<b>Kecamatan : </b><?= $fas->nama_kecamatan ?> <br/>"+
								// 		"<b>No Telpon : </b><?= $fas->telpon ?> <br/>"+
								// 		"<b>Jam Operasional : </b><?= $fas->jam ?> <br/>"+
								// 		"<b>Layanan : </b><?= $fas->layanan ?> <br/>"+
								// 		"<b>Dokter : </b><?= $fas->dokter ?> <br/>"+
								// 		"<a href='<?php echo base_url('administrator/pemetaan/rute/'.$fas->id_faskes) ?>' class='btn btn-default btn-sm'><b> Lihat Rute ....</b></a>");
								// <?php } ?>
								// <?php endforeach; ?>

					

               </script>
            </div>
          </div>
        </div>
       </div>

        <div class="row">
        	
        		 <div class="card">
           		 <div class="card-body">
           		 	<div style="overflow-x:auto;">
         
              <!-- Table with stripped rows -->
              
              <table class="table ">
                <thead>
                  <tr style="font-size: 13px;">
                    <th >No</th>
                    <th>id</th>
                    <th >Nama</th>
                    <th >Luas</th>
                    <th >Jumlah Penduduk</th>
                    <th >Jumlah Puskesmas</th>
                    <th >Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php $no=1;
                foreach ($kecamatan as $camat) : ?>
                	<?php $kecamatan = $camat->id_kecamatan; ?>
                  <tr>
                    <th scope="row"><?php echo $no++ ;?></th>
                    <td><?php echo $camat->id_kecamatan;?></td>
                    <td><?php echo $camat->nama_kecamatan;?></td>
                    <td><?php echo $camat->luas;?></td>
                    <td><?php echo $camat->jum_penduduk;?></td>
                     <td><?php echo $camat->jum_puskesmas;?></td>
                    <?php if($camat->jum_penduduk/$camat->jum_rumkit <= 1000){ ?>
                    	<td><span class="badge bg-success">cukup</span></td>
                    <?php }else{ ?>
                    	<td><span class="badge bg-danger">cukup</span></td>
                    <?php } ?>
                  </tr>
              <?php endforeach; ?>
                </tbody>
              </table>
              
              <!-- End Table with stripped rows -->

           </div>
         </div>
       </div>
        
      </div>
    </section>

  