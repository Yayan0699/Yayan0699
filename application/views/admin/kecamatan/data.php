	<div class="pagetitle">
      <h1><?php echo $title; ?></h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body"><br>
              <a href="<?php echo base_url('administrator/kecamatan/tambah') ?>" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i>Tambah Data</a><br>
              <div style="padding:5px;">
             	<?php echo $this->session->flashdata('pesan'); ?>
             </div>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Luas</th>
                    <th scope="col">Jumlah Penduduk</th>
                    <th scope="col">Jumlah Rumah Sakit</th>
                    <th scope="col">Jumlah Puskesmas</th>
                    <th scope="col">Jumlah Poskesdes</th>
                    <th scope="col">Jumlah Klinik</th>
                    <th scope="col">Jumlah Apotik</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1;
                foreach ($kecamatan as $camat) : ?>
                  <tr>
                    <th scope="row"><?php echo $no++ ;?></th>
                    <td><?php echo $camat->nama_kecamatan;?></td>
                    <td><?php echo $camat->luas;?></td>
                    <td><?php echo $camat->jum_penduduk;?></td>
                    <td><?php echo $camat->jum_rumkit;?></td>
                    <td><?php echo $camat->jum_puskesmas;?></td>
                    <td><?php echo $camat->jum_poskesdes;?></td>
                    <td><?php echo $camat->jum_klinik;?></td>
                    <td><?php echo $camat->jum_apotik;?></td>
                    <td>
                    	<a href="<?php echo base_url('administrator/kecamatan/ubah/').$camat->id_kecamatan; ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    	<a href="<?php echo base_url('administrator/kecamatan/hapus/').$camat->id_kecamatan; ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin untuk menghapus?')"><i class="bi bi-trash"></i></a>
                    </td>
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