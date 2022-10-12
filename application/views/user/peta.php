 <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div  data-aos="fade-up" style="margin-left:10px; margin-right: 10px; margin-top: 20px;">

        <br>

        <div class="row">

          <div class="col-lg-10">
          	<div class="card">
  			<div class="card-body shadow p-3 mb-5 bg-white rounded">
           <div id="map" style="width: 100%; height: 550px;"></div>
				<script>
					var map = L.map('map').setView([-8.6444677,116.5102843], 11);

					var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
						maxZoom: 19,
						attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
					}).addTo(map);
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
							"<a href='<?php echo base_url('user/peta/rute/'.$fas->id_faskes) ?>' class='btn btn-default btn-sm'><b> Lihat Rute ....</b></a>");
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
							"<a href='<?php echo base_url('user/peta/rute/'.$fas->id_faskes) ?>' class='btn btn-default btn-sm'><b> Lihat Rute ....</b></a>");
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
							"<a href='<?php echo base_url('user/peta/rute/'.$fas->id_faskes) ?>' class='btn btn-default btn-sm'><b> Lihat Rute ....</b></a>");
					<?php } ?>
					<?php endforeach; ?>
				</script>
				</div>
			    </div>
          </div>

          <div class="col-lg-2 d-flex">
          	<div class="card">
  			<div class="card-body shadow p-3 mb-5 bg-white rounded">
            <div class="row ">
            	

              <!-- Pencarian -->
              <span class="" style="font-weight: bold; color:  #012970;">Pencarian</span>
			      <form  method="POST" action="<?php echo base_url('user/peta/search') ?>">
			      	<input type="text" class="form-control" placeholder="Search...." name="keyword">
			      	<button type="submit" class="btn btn-sm" style="background-color:#006400; color: white; margin: 5px 0;">Cari</button>
			      </form>
			      <br>
                <!-- Filter By Jenis -->
              	<span class="" style="font-weight: bold; color:  #012970;">Filter By Jenis</span>
			      <form  method="POST" action="<?php echo base_url('user/peta/filter_jenis') ?>">
			      	
			        <select class="form-select " aria-label="Default select example" name="keyword">
			        <option selected> Fasilitas</option>
                      <option value="rumkit">Rumah Sakit</option>
                      <option value="puskesmas">Puskesmas</option>
                      <option value="poskesdes">Poskesdes</option>
                      <option value="klinik">Klinik</option>
                      <option value="apotik">Apotik</option>    
                    </select>
			         <button type="submit" class="btn btn-sm" style="background-color:#012970; color: white; margin:5px 0;">Filter</button>
			         
			      </form>

			      <br>
			      <!-- Filter By Kecamatan -->
              	<span class="" style="font-weight: bold; color:  #012970;">Filter By Kecamatan</span>
			      <form  method="POST" action="<?php echo base_url('user/peta/filter_kecamatan') ?>">
			      	
			        <select class="form-select" aria-label="Default select example" name="keyword">
                      <option selected>Kecamatan</option>
                      <?php foreach($kecamatan as $camat) :?>
                          <option value="<?php echo $camat->id_kecamatan ?>"><?php echo $camat->nama_kecamatan ?></option>
                     <?php endforeach; ?>
                    </select>
			         <button type="submit" class="btn btn-sm" style="background-color:#006400; color: white; margin: 5px 0; ">Filter</button>
			         
			      </form>


			      <!-- Filter By Layanan -->
			      
			      	<div class="d-grid mt-3">
			      		<span class="" style="font-weight: bold; color:  #012970;">Filter By Layanan</span>
			         	<button type="button" class="btn " style="background-color:#012970; color: white; margin: 5px 0;" data-bs-toggle="modal" data-bs-target="#layanan">Pilih Layanan</button>
			     	</div>
			     	<form action="<?php echo base_url('user/peta/filter_layanan') ?>" method="post">
			     	<div class="modal fade " id="layanan" tabindex="-1" data-bs-backdrop="false">
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

			     	<form action="<?php echo base_url('user/peta/filter_dokter') ?>" method="post">
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

      </div>

    </section><!-- End Features Section -->



