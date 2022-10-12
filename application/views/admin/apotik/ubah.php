
<div class="pagetitle">
  <h1><?= $title; ?></h1>
</div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>
               <?php foreach($apotik as $fas): ?>
              <?php echo form_open_multipart('administrator/apotik/ubah/'.$fas->id_faskes);  ?>
                 
                     <?php $layanan = explode(', ',$fas->layanan); ?>
                      <?php $dokter = explode(', ',$fas->dokter); ?>
                  <div class="row">
                      <div class="col-6">
                        <label class="form-label">ID Apotik</label>
                        <input type="text" class="form-control" name="id_faskes" value="<?php echo $fas->id_faskes ?>">
                      </div>

                      <div class="col-6">
                        <label class="form-label">Nama Apotik</label>
                        <input type="text" class="form-control" name="nama_faskes" value="<?php echo $fas->nama_faskes ?>" >
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-6">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $fas->alamat ?>">
                      </div>
                      <div class="col-6">
                        <label class="form-label">Nomor Telpon</label>
                        <input type="text" class="form-control" name="telpon" value="<?php echo $fas->telpon ?>">
                      </div>
                  </div>

                  <div class="col-12">
                    <label class="form-label">Kecamatan</label>
                    <select class="form-select" aria-label="Default select example" name="id_kecamatan">
                      <option value="<?php echo $fas->id_kecamatan ?>"><?php echo $fas->nama_kecamatan ?></option>
                      <?php foreach($kecamatan as $camat) :?>
                          <option value="<?php echo $camat->id_kecamatan ?>"><?php echo $camat->nama_kecamatan ?></option>
                     <?php endforeach; ?>
                    </select>
                  </div>
                  
                  <div class="col-12" >
                    <label class="form-label">Daftar Layanan</label>
                    <div class="row" style="font-size: 14px;">
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Persalinan" <?php if (in_array("Persalinan", $layanan)) echo "checked";?>>
                        <label class="form-check-label">Persalinan</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Kesehatan Ibu dan Anak" <?php if (in_array("Kesehatan Ibu dan Anak", $layanan)) echo "checked";?>>
                        <label class="form-check-label">Kesehatan Ibu dan Anak</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Kesehatan Bayi dan Balita" <?php if (in_array("Kesehatan Bayi dan Balita", $layanan)) echo "checked";?>>
                        <label class="form-check-label">Kesehatan Bayi dan Balita</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Pelayanan KB" <?php if (in_array("Pelayanan KB", $layanan)) echo "checked";?>>
                        <label class="form-check-label">Pelayanan KB</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Pelayanan Obat" <?php if (in_array("Pelayanan Obat", $layanan)) echo "checked";?>>
                        <label class="form-check-label">Pelayanan Obat</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Cek Asam Urat" <?php if (in_array("Cek Asam Urat", $layanan)) echo "checked";?>>
                        <label class="form-check-label">Cek Asam Urat</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Cek Gula Darah" <?php if (in_array("Cek Gula Darah", $layanan)) echo "checked";?>>
                        <label class="form-check-label">Cek Gula Darah</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Konsultasi Apoteker" <?php if (in_array("Konsultasi Apoteker", $layanan)) echo "checked";?>>
                        <label class="form-check-label">Konsultasi Apoteker</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="layanan[]" value="Cek Kesehatan" <?php if (in_array("Cek Kesehatan", $layanan)) echo "checked";?>>
                        <label class="form-check-label">Cek Kesehatan</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Jam Operasional</label>
                    <textarea class="form-control" name="jam" style="height: 100px;"><?php echo $fas->jam ?></textarea>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Daftar Dokter</label>
                    <div class="row" style="font-size: 15px;">
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="dokter[]" value="Dokter Umum" <?php if (in_array("Dokter Umum", $dokter)) echo "checked";?>>
                        <label class="form-check-label">Dokter Umum</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="dokter[]" value="Dokter Gigi" <?php if (in_array("Dokter Gigi", $dokter)) echo "checked";?>>
                        <label class="form-check-label">Dokter Gigi</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="dokter[]" value="Bidan" <?php if (in_array("Bidan", $dokter)) echo "checked";?>>
                        <label class="form-check-label">Bidan</label>
                      </div>
                      <div class="col-4">
                        <input class="form-check-input" type="checkbox" name="dokter[]" value="Apoteker" <?php if (in_array("Apoteker", $dokter)) echo "checked";?>>
                        <label class="form-check-label">Apoteker</label>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>
                
                <div class="col-12">
                    <label class="form-label">latitude</label>
                    <input type="text" class="form-control" name="latitude" value="<?php echo $fas->latitude ?>">
                </div>
                 <div class="col-12">
                    <label class="form-label">Longitude</label>
                    <input type="text" class="form-control" name="longitude" value="<?php echo $fas->longitude ?>" >
                </div>
              <img src="<?php echo base_url() ;?>template/assets/foto/<?php echo $fas->foto; ?>" width="300" height="250"> <br>
               <div class="col-12">
                    <label class="form-label">Foto Fasilitas Kesehatan</label>
                    <input type="file" class="form-control" name="foto" >
                </div>
                <br>
                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              
              <?php echo form_close(); ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
       </div>
    </section>

  