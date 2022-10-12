

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up" >

        <header class="section-header" style="margin-top:30px;">
          <div>
              <p style="font-size: 30px; line-height: 1;">Daftar Fasilitas Pelayanan Kesehatan</p>

              <p style="font-size: 20px; line-height: 1;">Kabupaten Lombok Timur</p>

          </div>
        </header>
             

        <form method="post" action="<?php echo base_url('user/daftar') ?>">
          <div  class="d-flex justify-content-end">
              <input type="text" class="form-control" placeholder="Search...." name="keyword" style="width: 200px;">
              <input type="submit" name="submit" class="btn btn-primary" style="background-color:#006400; color: white; margin:0px 5px;"></input>
          </div>
        </form>
        <hr>
          <!-- Table with stripped rows -->
          <?php ?>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Alamat</th>
                     <th scope="col">Kecamatan</th>
                    <th scope="col">Telpon</th>
                    <th scope="col">jam</th>
                    <th scope="col">Layanan</th>
                    <th scope="col">Dokter</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php if(empty($faskes)): ?>
                    <tr>
                      <td><center>Data Yang Anda Cari Tidak Ada</center></td>
                    </tr>

                  <?php endif; ?>
                 <?php
                  foreach($faskes as $fas): ?>
                    <tr>
                      <td><?php echo ++$start ?></td>
                      <td><?php echo $fas->nama_faskes?></td>
                      <td><?php echo $fas->alamat?></td>
                      <td><?php echo $fas->id_kecamatan?></td>
                      <td><?php echo $fas->telpon?></td>
                      <td><?php echo $fas->jam?></td>
                      <td><?php echo $fas->layanan?></td>
                      <td><?php echo $fas->dokter?></td>
                      <td><img src="<?php echo base_url() ;?>template/assets/foto/<?php echo $fas->foto; ?>" width="100" height="90"></td>
                      <td>
                          <a href="<?php echo base_url('user/daftar/detail/').$fas->id_faskes; ?>" class="btn btn-primary btn-sm"> Detail</a>
                           <a href="<?php echo base_url('user/peta/rute/').$fas->id_faskes; ?>" class="btn btn-success btn-sm"> rute</a>
                      </td>
                     
                    </tr>
                  <?php endforeach; ?>
                </tbody>
               
              </table>
               <div class="row">
                  <div class="col">
                     <?php  echo $pagination ?>
                  </div>
                 
                </div>
              <!-- End Table with stripped rows -->

      </div>

    </section><!-- End Services Section -->

   
  </main><!-- End #main --