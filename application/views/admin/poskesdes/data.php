	<div class="pagetitle">
      <h1><?php echo $title; ?></h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body"><br>
              <a href="<?php echo base_url('administrator/poskesdes/tambah') ?>" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i>Tambah Data</a><br>
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
                foreach ($poskesdes as $des) : ?>
                  <tr>
                    <th scope="row"><?php echo $no++ ;?></th>
                    <td><?php echo $des->id_faskes;?></td>
                    <td><?php echo $des->nama_faskes;?></td>
                    <td><?php echo $des->alamat;?></td>
                    <td><?php echo $des->telpon;?></td>
                    <td><?php echo $des->latitude;?></td>
                    <td><?php echo $des->longitude;?></td>
                    <td>
                      <a href="<?php echo base_url('administrator/poskesdes/detail/').$des->id_faskes; ?>" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                    	<a href="<?php echo base_url('administrator/poskesdes/ubah/').$des->id_faskes; ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    	<a href="<?php echo base_url('administrator/poskesdes/hapus/').$des->id_faskes; ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin untuk menghapus?')"><i class="bi bi-trash"></i></a>
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