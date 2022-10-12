
<div class="pagetitle">
  <h1><?= $title; ?></h1>
</div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>
              <?php foreach($kecamatan as $camat) : ?>
              <form class="row g-3" action="<?php echo base_url('administrator/kecamatan/ubah/').$camat->id_kecamatan ?>" method="post">
                <div class="row">
                    <div class="col-6">
                      <label class="form-label">ID Kecamatan</label>
                      <input type="text" class="form-control" name="id_kecamatan" value="<?php echo $camat->id_kecamatan; ?>" >
                    </div>
                    <div class="col-6">
                      <label class="form-label">Nama Kecamatan</label>
                      <input type="text" class="form-control" name="nama_kecamatan" value="<?php echo $camat->nama_kecamatan; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                      <label class="form-label">Luas Wilayah</label>
                      <input type="text" class="form-control" name="luas" value="<?php echo $camat->luas; ?>" >
                    </div>
                    <div class="col-6">
                      <label class="form-label">Jumlah Penduduk</label>
                      <input type="text" class="form-control" name="jum_penduduk" value="<?php echo $camat->jum_penduduk; ?>">
                    </div>
               </div>
               <div class="row">
                    <div class="col-6">
                      <label class="form-label">Jumlah Rumah Sakit</label>
                      <input type="text" class="form-control"  name="jum_rumkit" value="<?php echo $camat->jum_rumkit; ?>">
                    </div>
                    <div class="col-6">
                      <label class="form-label">Jumlah Puskesmas</label>
                      <input type="text" class="form-control"  name="jum_puskesmas" value="<?php echo $camat->jum_puskesmas; ?>">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-6">
                      <label class="form-label">Jumlah Poskesdes</label>
                      <input type="text" class="form-control"  name="jum_poskesdes" value="<?php echo $camat->jum_poskesdes; ?>">
                    </div>
                    <div class="col-6">
                      <label class="form-label">Jumlah Klinik</label>
                      <input type="text" class="form-control"  name="jum_klinik" value="<?php echo $camat->jum_klinik; ?>">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-6">
                      <label class="form-label">Jumlah Apotik</label>
                      <input type="text" class="form-control"  name="jum_apotik" value="<?php echo $camat->jum_apotik; ?>">
                    </div> 
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </form><!-- Vertical Form -->
            <?php endforeach; ?>
            </div>
          </div>
        </div>

      </div>
    </section>

  