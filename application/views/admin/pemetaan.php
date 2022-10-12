
    <section class="section">
      <div class="row">

        <div class="col-lg-9">
          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>
               <div id="map" style=" height: 550px;"></div>

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

									var aikmelStyle = {"color": "yellow", "opacity": 1};
									var jerowaruStyle = {"color": "green", "opacity": 1};
									var keruakStyle = {"color": "red", "opacity": 1};
									var sakbarStyle = {"color": "#B8860B", "opacity": 1};
									var saktiStyle = {"color": "#FFD700", "opacity": 1};
									var sakraStyle = {"color": "#9932CC", "opacity": 1};
									var sikurStyle = {"color": "#8B4513", "opacity": 1};
									var teraraStyle = {"color": "#008080", "opacity": 1};
									var mtGadingStyle = {"color": "#006400", "opacity": 1};
									var masbagikStyle = {"color": "#EE82EE", "opacity": 1};
									var labuanStyle = {"color": "#000080", "opacity": 1};
									var selongStyle = {"color": "#00FFFF", "opacity": 1};
									var sukamuliaStyle = {"color": "#800000", "opacity": 1};
									var pringgaselaStyle = {"color": "#696969", "opacity": 1};
									var pringgabayaStyle = {"color": "#D2691E", "opacity": 1};
									var suelaStyle = {"color": "#7FFF00", "opacity": 1};
									var wanasabaStyle = {"color": "navy", "opacity": 1};
									var sembalunStyle = {"color": "#006400", "opacity": 1};
									var sambeliaStyle = {"color": "#0000CD", "opacity": 1};




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
									var suralaga = L.geoJSON(suralaga).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Suralaga <br/>"+
										"<b>Luas Wilayah : </b>27,02 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>65592 Penduduk <br/>");
									var wanasaba = L.geoJSON(wanasaba, {
									    style: wanasabaStyle
									}).addTo(map).bindPopup(
										"<b>Nama Kecamatan : </b> Wanasaba <br/>"+
										"<b>Luas Wilayah : </b>55,89 Km2<br/>"+
										"<b>Jumlah Penduduk : </b>69264 Penduduk <br/>");


					

					//L.geoJSON('<?php echo base_url('map/aikmel.geojson') ?>').addTo(map);
					<?php foreach($faskes as $fas): ?> 
						<?php if( $fas->kategori == "apotik"){ ?>
							var rumkit = L.icon({
					    iconUrl: '<?php echo base_url('leaflet/images/rumkit.png') ?>',
					    iconSize: [30, 37], // size of the icon
							});
						L.marker([<?= $fas->latitude ?>,<?= $fas->longitude ?>], {icon:rumkit}).addTo(map)
						.bindPopup("<img src='<?php echo base_url() ;?>template/assets/foto/<?php echo $fas->foto; ?>' width='100%' height='150'> <br/>"+
							"<b>Nama : </b> <?= $fas->nama_faskes ?> <br/>"+
							"<b>Alamat : </b><?= $fas->alamat ?> <br/>"+
							"<b>Kecamatan : </b><?= $fas->nama_kecamatan ?> <br/>"+
							"<b>No Telpon : </b><?= $fas->telpon ?> <br/>"+
							"<b>Jam Operasional : </b><?= $fas->jam ?> <br/>"+
							"<b>Layanan : </b><?= $fas->layanan ?> <br/>"+
							"<b>Dokter : </b><?= $fas->dokter ?> <br/>"+
							"<a href='<?php echo base_url('administrator/pemetaan/rute/'.$fas->id_faskes) ?>' class='btn btn-default btn-sm'><b> Lihat Rute ....</b></a>");
					<?php }else if($fas->kategori == "puskesmas"){ ?>
						var rumkit = L.icon({
					    iconUrl: '<?php echo base_url('leaflet/images/puskesmas.png') ?>',
					    iconSize: [30, 37], // size of the icon
							});
						L.marker([<?= $fas->latitude ?>,<?= $fas->longitude ?>], {icon:rumkit}).addTo(map)
						.bindPopup("<img src='<?php echo base_url() ;?>template/assets/foto/<?php echo $fas->foto; ?>' width='100%' height='150'> <br/>"+
							"<b>Nama : </b> <?= $fas->nama_faskes ?> <br/>"+
							"<b>Alamat : </b><?= $fas->alamat ?> <br/>"+
							"<b>Kecamatan : </b><?= $fas->nama_kecamatan ?> <br/>"+
							"<b>No Telpon : </b><?= $fas->telpon ?> <br/>"+
							"<b>Jam Operasional : </b><?= $fas->jam ?> <br/>"+
							"<b>Layanan : </b><?= $fas->layanan ?> <br/>"+
							"<b>Dokter : </b><?= $fas->dokter ?> <br/>"+
							"<a href='<?php echo base_url('administrator/pemetaan/rute/'.$fas->id_faskes) ?>' class='btn btn-default btn-sm'><b> Lihat Rute ....</b></a>");
					<?php }else{ ?>

						var rumkit = L.icon({
					    iconUrl: '<?php echo base_url('leaflet/images/poskesdes.png') ?>',
					    iconSize: [30, 37], // size of the icon
							});
						L.marker([<?= $fas->latitude ?>,<?= $fas->longitude ?>], {icon:rumkit}).addTo(map)
						.bindPopup("<img src='<?php echo base_url() ;?>template/assets/foto/<?php echo $fas->foto; ?>' width='100%' height='150'> <br/>"+
							"<b>Nama : </b> <?= $fas->nama_faskes ?> <br/>"+
							"<b>Alamat : </b><?= $fas->alamat ?> <br/>"+
							"<b>Kecamatan : </b><?= $fas->nama_kecamatan ?> <br/>"+
							"<b>No Telpon : </b><?= $fas->telpon ?> <br/>"+
							"<b>Jam Operasional : </b><?= $fas->jam ?> <br/>"+
							"<b>Layanan : </b><?= $fas->layanan ?> <br/>"+
							"<b>Dokter : </b><?= $fas->dokter ?> <br/>"+
							"<a href='<?php echo base_url('administrator/pemetaan/rute/'.$fas->id_faskes) ?>' class='btn btn-default btn-sm'><b> Lihat Rute ....</b></a>");
					<?php } ?>
					<?php endforeach; ?>

					

               </script>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>

              <!-- Pencarian -->
              <span class="" style="font-weight: bold; color:  #012970;">Pencarian</span>
			      <form  method="post" action="<?php echo base_url('administrator/pemetaan/search') ?>">
			      	<div class="d-flex align-items-center">
			      	<input type="text" class="form-control" placeholder="Search...." name="keyword">
			      	<button type="submit" class="btn btn-sm" style="background-color:#006400; color: white; margin:5px 0;">Cari</button>
			      	 </div>
			      </form>
			      <br>
                <!-- Filter By Jenis -->
              <span class="" style="font-weight: bold; color:  #012970;">Filter By Jenis</span>
			      	<form  method="POST" action="<?php echo base_url('administrator/pemetaan/filter_jenis') ?>">
			      	<div class="d-flex align-items-center">
			        <select class="form-select " aria-label="Default select example" name="keyword">
			        <option selected> Fasilitas</option>
                      <option value="rumkit">Rumah Sakit</option>
                      <option value="puskesmas">Puskesmas</option>
                      <option value="poskesdes">Poskesdes</option>
                      <option value="klinik">Klinik</option>
                      <option value="apotik">Apotik</option>    
                    </select>
			         <button type="submit" class="btn btn-sm" style="background-color:#012970; color: white; margin: 0 5px;">Filter</button>
			         </div>
			      </form>

			      <br>
			      <!-- Filter By Kecamatan -->
              	<span class="" style="font-weight: bold; color:  #012970;">Filter By Kecamatan</span>
			      <form  method="POST" action="<?php echo base_url('administrator/pemetaan/filter_kecamatan') ?>">
			      	<div class="d-flex align-items-center">
			        <select class="form-select" aria-label="Default select example" name="keyword">
                      <option selected>Kecamatan</option>
                      <?php foreach($kecamatan as $camat) :?>
                          <option value="<?php echo $camat->id_kecamatan ?>"><?php echo $camat->nama_kecamatan ?></option>
                     <?php endforeach; ?>
                    </select>
			         <button type="submit" class="btn btn-sm" style="background-color:#006400; color: white; margin: 5px; ">Filter</button>
			          </div>
			      </form>


			      <!-- Filter By Layanan -->
			      
			      	<div class="d-grid mt-3">
			      		<span class="" style="font-weight: bold; color:  #012970;">Filter By Layanan</span>
			         	<button type="button" class="btn " style="background-color:#012970; color: white; margin: 5px 0;" data-bs-toggle="modal" data-bs-target="#layanan">Pilih Layanan</button>
			     	</div>
			     	<form action="<?php echo base_url('administrator/pemetaan/filter_layanan') ?>" method="post">
			     	<div class="modal fade" id="layanan" tabindex="-1" data-bs-backdrop="false">
		                <div class="modal-dialog modal-lg">
		                  <div class="modal-content">
		                    <div class="modal-header">
		                      <h5 class="modal-title">Filter By Layanan</h5>
		                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		                    </div>
		                    <div class="modal-body">
		                    	
		                       <div class="col-12" >
				                    <label class="form-label">Daftar Layanan</label>
				                    <div class="row" style="font-size: 14px;">
				                      <div class="col-4">
				                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Persalinan">
				                        <label class="form-check-label">Persalinan</label>
				                      </div>
				                      <div class="col-4">
				                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Kesehatan Ibu dan Anak">
				                        <label class="form-check-label">Kesehatan Ibu dan Anak</label>
				                      </div>
				                      <div class="col-4">
				                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Kesehatan Bayi dan Balita">
				                        <label class="form-check-label">Kesehatan Bayi dan Balita</label>
				                      </div>
				                      <div class="col-4">
				                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Pelayanan KB">
				                        <label class="form-check-label">Pelayanan KB</label>
				                      </div>
				                     <div class="col-4">
				                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Pelayanan Obat">
				                        <label class="form-check-label">Pelayanan Obat</label>
				                      </div>
				                      <div class="col-4">
				                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Cek Asam Urat">
				                        <label class="form-check-label">Cek Asam Urat</label>
				                      </div>
				                      <div class="col-4">
				                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Cek Gula Darah">
				                        <label class="form-check-label">Cek Gula Darah</label>
				                      </div>
				                      <div class="col-4">
				                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Konsultasi Apoteker">
				                        <label class="form-check-label">Konsultasi Apoteker</label>
				                      </div>
				                      <div class="col-4">
				                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Cek Kesehatan">
				                        <label class="form-check-label">Cek Kesehatan</label>
				                      </div>
				                    </div>
				                  </div>

		                    </div>
		                    <div class="modal-footer">
		                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		                      <button type="submit" class="btn btn-primary">Filter</button>
		                    </div>
		                  </div>
		                </div>
		              </div><!-- End Disabled Backdrop Modal-->
			      </form>

			      <!-- Filter By Dokter -->
			      
			      	<div class="d-grid mt-3">
			      		<span class="" style="font-weight: bold; color:  #012970;">Filter By Dokter</span>
			         	<button type="submit" class="btn" style="background-color:#006400; color: white; margin: 5px 0;" data-bs-toggle="modal" data-bs-target="#dokter">Pilih Dokter</button>
			     	</div>

			     	<form action="<?php echo base_url('administrator/pemetaan/filter_dokter') ?>" method="post">
			     	<div class="modal fade" id="dokter" tabindex="-1" data-bs-backdrop="false">
		                <div class="modal-dialog modal-lg">
		                  <div class="modal-content">
		                    <div class="modal-header">
		                      <h5 class="modal-title">Filter By Dokter</h5>
		                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		                    </div>
		                    <div class="modal-body">
		                     <div class="col-12">
			                    <label class="form-label">Daftar Dokter</label>
			                    <div class="row" style="font-size: 15px;">
			                      <div class="col-4">
			                        <input class="form-check-input" type="checkbox" name="dokter[]" value="Dokter Umum">
			                        <label class="form-check-label">Dokter Umum</label>
			                      </div>
			                      <div class="col-4">
			                        <input class="form-check-input" type="checkbox" name="dokter[]" value="Dokter Gigi">
			                        <label class="form-check-label">Dokter Gigi</label>
			                      </div>
			                      <div class="col-4">
			                        <input class="form-check-input" type="checkbox" name="dokter[]" value="Bidan">
			                        <label class="form-check-label">Bidan</label>
			                      </div>
			                      <div class="col-4">
			                        <input class="form-check-input" type="checkbox" name="dokter[]" value="Apoteker">
			                        <label class="form-check-label">Apoteker</label>
			                      </div>

			                    </div>
			                  </div>
		                    </div>
		                    <div class="modal-footer">
		                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		                      <button type="submit" class="btn btn-primary">Filter</button>
		                    </div>
		                  </div>
		                </div>
		              </div><!-- End Disabled Backdrop Modal-->
			      </form>
			      <br>
			      <br>

            </div>
          </div>
        </div>
       </div>
    </section>

  