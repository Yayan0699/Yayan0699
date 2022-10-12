	<div class="pagetitle">
      <h1><?php echo $title; ?></h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body"><br>
              <a href="<?php echo base_url('administrator/user/tambah') ?>" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i>Tambah Data</a><br>
              <div style="padding:5px;">
             	<?php echo $this->session->flashdata('pesan'); ?>
             </div>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1;
                foreach ($user as $admin) : ?>
                  <tr>
                    <th scope="row"><?php echo $no++ ;?></th>
                    <td><?php echo $admin->nama_admin;?></td>
                    <td><?php echo $admin->jabatan;?></td>
                    <td><?php echo $admin->username;?></td>
                    <td><?php echo $admin->password;?></td>
                    <td>
                    	<a href="<?php echo base_url('administrator/user/ubah/').$admin->id_admin; ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    	<a href="<?php echo base_url('administrator/user/hapus/').$admin->id_admin; ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin untuk menghapus?')"><i class="bi bi-trash"></i></a>
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