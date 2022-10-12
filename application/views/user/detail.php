  <section >
    <div class="container" >
        <header class="section-header" style="margin-top:30px;">
          <div>
              <p style="font-size: 30px; line-height: 1;">Detail Fasilitas Pelayanan Kesehatan</p>
              <p style="font-size: 20px; line-height: 1;">Kabupaten Lombok Timur</p>
          </div>
        </header>

        <div data-aos="fade-up" >
          <?php foreach($faskes as $kit): ?>
          <br>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body shadow p-3 mb-1 bg-white rounded">
                   <table class="table ">
                     <tr>
                        <td style="font-weight: bold;">Nama Rumah Sakit</td>
                        <td>: </td>
                        <td><?= $kit->nama_faskes ?></td>

                        <td style="font-weight: bold;">No. Telpon</td>
                        <td>: </td>
                        <td><?= $kit->telpon ?></td>
                      </tr>
                      
                      <tr>
                        <td style="font-weight: bold;">Alamat</td>
                        <td>: </td>
                        <td><?= $kit->alamat ?></td>

                         <td style="font-weight: bold;">Kecamatan</td>
                        <td>: </td>
                        <td><?= $kit->nama_kecamatan ?></td>
                      </tr>
                     
                       <tr>
                        <td style="font-weight: bold;">Daftar Layanan</td>
                        <td>: </td>
                        <td><?= $kit->layanan ?></td>

                        <td style="font-weight: bold;">Jam Operasional</td>
                        <td>: </td>
                        <td><?= $kit->jam ?></td>
                      </tr>
                      
                      <tr>
                        <td style="font-weight: bold;">Daftar Dokter</td>
                        <td>: </td>
                        <td><?= $kit->dokter ?></td>
                      </tr>

                  </table>  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body shadow p-3 mb-1 bg-white rounded">
                      <center><h6 style="font-weight:bold;">Gambar Fasilitas</h6></center>
                      <table>
                         <tr>
                            <td><img src="<?php echo base_url() ;?>template/assets/foto/<?php echo $kit->foto; ?>" width="100%"></td>
                          </tr>
                      </table>  
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body shadow p-3 mb-1 bg-white rounded">
                      <a href="<?php echo base_url('user/peta/rute/').$kit->id_faskes; ?>"><center><h6 style="font-weight:bold;">Lihat Rute</h6></center></a>
                      <div id="map" style="width: 100%; height: 300px;"></div>

                      <script>
                          var map = L.map('map').setView([<?= $kit->latitude ?>,<?= $kit->longitude ?>], 15);

                          var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 25,
                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                          }).addTo(map);

                          <?php if( $kit->kategori == "rumkit"){ ?>
                            var rumkit = L.icon({
                            iconUrl: '<?php echo base_url('leaflet/images/rumkit.png') ?>',
                            iconSize: [30, 37], // size of the icon
                            });
                            L.marker([<?= $kit->latitude ?>,<?= $kit->longitude ?>], {icon:rumkit}).addTo(map);
                          
                        <?php }else if($kit->kategori == "puskesmas"){ ?>
                          var rumkit = L.icon({
                            iconUrl: '<?php echo base_url('leaflet/images/puskesmas.png') ?>',
                            iconSize: [30, 37], // size of the icon
                            });
                          L.marker([<?= $kit->latitude ?>,<?= $kit->longitude ?>], {icon:rumkit}).addTo(map);
                        <?php }else{ ?>

                          var rumkit = L.icon({
                            iconUrl: '<?php echo base_url('leaflet/images/poskesdes.png') ?>',
                            iconSize: [30, 37], // size of the icon
                            });
                          L.marker([<?= $kit->latitude ?>,<?= $kit->longitude ?>], {icon:rumkit}).addTo(map);
                        <?php } ?>

                        </script>
                      </div>
                    </div>
                  </div>
                </div>
          </div>

          <?php endforeach; ?>
        </div>
    </div>
  </section>