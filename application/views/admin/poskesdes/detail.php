
<div class="pagetitle">
  <h1><?= $title; ?></h1>
</div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <?php foreach($poskesdes as $pus): ?>

        <div class="col-lg-7">
          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>

              <table class="table ">
                 <tr>
                    <td style="font-weight: bold;" width="30%">ID Faskes</td>
                    <td width="5%">: </td>
                    <td><?= $pus->id_faskes ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Nama puskesmas</td>
                    <td>: </td>
                    <td><?= $pus->nama_faskes ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Alamat</td>
                    <td>: </td>
                    <td><?= $pus->alamat ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Kecamatan</td>
                    <td>: </td>
                    <td><?= $pus->nama_kecamatan ?></td>
                  </tr>
                   <tr>
                    <td style="font-weight: bold;">No. Telpon</td>
                    <td>: </td>
                    <td><?= $pus->telpon ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Jam Operasional</td>
                    <td>: </td>
                    <td><?= $pus->jam ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Daftar Layanan</td>
                    <td>: </td>
                    <td><?= $pus->layanan ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Daftar Dokter</td>
                    <td>: </td>
                    <td><?= $pus->dokter ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Latitude</td>
                    <td>: </td>
                    <td><?= $pus->latitude ?></td>
                   </tr>
                   <tr>
                    <td style="font-weight: bold;">Longitude</td>
                    <td>: </td>
                    <td><?= $pus->longitude ?></td>
                  </tr>

                
              </table>        

            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>

              <table>
                <tr>
                   <td style="font-weight: bold;">Gambar Fasilitas Kesehatan</td>
                </tr>
                 <tr>
                    <td><img src="<?php echo base_url() ;?>template/assets/foto/<?php echo $pus->foto; ?>" width="370" height="250"></td>
                  </tr>
                 <tr>
                  <td style="font-weight: bold;">Disini Peta</td>
                </tr>
                <tr>
                  
                  <td>
                     <div id="map" style="width: 100%; height: 300px;"></div>

                      <script>
                          var map = L.map('map').setView([<?= $pus->latitude ?>,<?= $pus->longitude ?>], 15);

                          var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 25,
                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                          }).addTo(map);

                          <?php if( $pus->kategori == "rumkit"){ ?>
                            var rumkit = L.icon({
                            iconUrl: '<?php echo base_url('leaflet/images/rumkit.png') ?>',
                            iconSize: [30, 37], // size of the icon
                            });
                            L.marker([<?= $pus->latitude ?>,<?= $pus->longitude ?>], {icon:rumkit}).addTo(map);
                          
                        <?php }else if($pus->kategori == "puskesmas"){ ?>
                          var rumkit = L.icon({
                            iconUrl: '<?php echo base_url('leaflet/images/puskesmas.png') ?>',
                            iconSize: [30, 37], // size of the icon
                            });
                          L.marker([<?= $pus->latitude ?>,<?= $pus->longitude ?>], {icon:rumkit}).addTo(map);
                        <?php }else{ ?>

                          var rumkit = L.icon({
                            iconUrl: '<?php echo base_url('leaflet/images/poskesdes.png') ?>',
                            iconSize: [30, 37], // size of the icon
                            });
                          L.marker([<?= $pus->latitude ?>,<?= $pus->longitude ?>], {icon:rumkit}).addTo(map);
                        <?php } ?>

                        </script>
                  </td>
                </tr>
                
              </table>    

            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </section>

  