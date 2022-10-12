
<div class="pagetitle">
  <h1><?= $title; ?></h1>
</div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>
               <?php echo form_open_multipart('administrator/apotik/tambah'); ?>
                  
                  <div class="row">
                      <div class="col-6">
                        <label class="form-label">ID Apotik</label>
                        <input type="text" class="form-control" name="id_faskes" >
                      </div>

                      <div class="col-6">
                        <label class="form-label">Nama Apotik</label>
                        <input type="text" class="form-control" name="nama_faskes" >
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-6">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" >
                      </div>
                      <div class="col-6">
                        <label class="form-label">Nomor Telpon</label>
                        <input type="text" class="form-control" name="telpon" >
                      </div>
                  </div>

                  <div class="col-12">
                    <label class="form-label">Kecamatan</label>
                    <select class="form-select" aria-label="Default select example" name="id_kecamatan">
                      <option value="0">Pilih Kecamatan</option>
                      <?php foreach($kecamatan as $camat) :?>
                          <option value="<?php echo $camat->id_kecamatan ?>"><?php echo $camat->nama_kecamatan ?></option>
                     <?php endforeach; ?>
                    </select>
                  </div>
                  
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
                  <div class="col-12">
                    <label class="form-label">Jam Operasional</label>
                    <textarea class="form-control" name="jam" style="height: 100px;"></textarea>
                  </div>
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
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>
                
                <div class="col-12">
                    <label class="form-label">latitude</label>
                    <input type="text" class="form-control" name="latitude" >
                </div>
                 <div class="col-12">
                    <label class="form-label">Longitude</label>
                    <input type="text" class="form-control" name="longitude" >
                </div>
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
            </div>
          </div>
        </div>
       </div>
    </section>

  