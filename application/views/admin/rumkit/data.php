	<div class="pagetitle">
      <h1><?php echo $title; ?></h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body"><br>
              <a href="<?php echo base_url('administrator/rumkit/tambah') ?>" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i>Tambah Data</a><br>
              <div style="padding:5px;">
             	<?php echo $this->session->flashdata('pesan'); ?>
             </div>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID </th>
                    <th scope="col">Nama</th>
                    <th scope="col">alamat</th>
                    <th scope="col">telpon</th>
                    <th scope="col">Latitude</th>
                    <th scope="col">Longitude</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1;
                foreach ($rumkit as $rum) : ?>
                  <tr>
                    <th scope="row"><?php echo $no++ ;?></th>
                    <td><?php echo $rum->id_faskes;?></td>
                    <td><?php echo $rum->nama_faskes;?></td>
                    <td><?php echo $rum->alamat;?></td>
                    <td><?php echo $rum->telpon;?></td>
                    <td><?php echo $rum->latitude;?></td>
                    <td><?php echo $rum->longitude;?></td>
                    <td>
                      <a href="<?php echo base_url('administrator/rumkit/detail/').$rum->id_faskes; ?>" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                    	<a href="<?php echo base_url('administrator/rumkit/ubah/').$rum->id_faskes; ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    	<a href="<?php echo base_url('administrator/rumkit/hapus/').$rum->id_faskes; ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin untuk menghapus?')"><i class="bi bi-trash"></i></a>
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