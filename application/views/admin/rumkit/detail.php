
<div class="pagetitle">
  <h1><?= $title; ?></h1>
</div><!-- End Page Title -->

    <section class="section">
      <?php foreach($rumkit as $kit): ?>
      <div class="row">
        <div class="col-lg-7">
          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>

              <table class="table ">
                 <tr>
                    <td style="font-weight: bold;" width="30%">ID Faskes</td>
                    <td width="5%">: </td>
                    <td><?= $kit->id_faskes ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Nama Rumah Sakit</td>
                    <td>: </td>
                    <td><?= $kit->nama_faskes ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Alamat</td>
                    <td>: </td>
                    <td><?= $kit->alamat ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Kecamatan</td>
                    <td>: </td>
                    <td><?= $kit->nama_kecamatan ?></td>
                  </tr>
                   <tr>
                    <td style="font-weight: bold;">No. Telpon</td>
                    <td>: </td>
                    <td><?= $kit->telpon ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Jam Operasional</td>
                    <td>: </td>
                    <td><?= $kit->jam ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Daftar Layanan</td>
                    <td>: </td>
                    <td><?= $kit->layanan ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Daftar Dokter</td>
                    <td>: </td>
                    <td><?= $kit->dokter ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Latitude</td>
                    <td>: </td>
                    <td><?= $kit->latitude ?></td>
                   </tr>
                   <tr>
                    <td style="font-weight: bold;">Longitude</td>
                    <td>: </td>
                    <td><?= $kit->longitude ?></td>
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
                    <td><img src="<?php echo base_url() ;?>template/assets/foto/<?php echo $kit->foto; ?>" width="370" height="300"></td>
                  </tr>
                 <tr>
                  <td style="font-weight: bold;">Disini Peta</td>
                </tr>
                
              </table>        

            </div>
          </div>
        </div>
      
      </div>
      <?php endforeach; ?>
    </section>

  