
    <section class="section dashboard">
          <!-- code disini -->
        <center>
          <div style="margin-top: 20px;" >
            <img src="<?= base_url() ?>template/assets/img/logo.png" alt="" style="width: 100px; height: 100px;">
          </div><br>  
          <div>
            <span>Selamat Datang Admin <br> di</span><br> <br>  
          </div>
          <div class="pagetitle" style="font-weight: bold; line-height: 1.5;">
            <h1 style="font-size: 40px;">SISTEM INFORMASI GEOGRAFIS</h1>
            <span class="dashboard-header">Persebaran Fasilitas Pelayanan Kesehatan <br> Kabupaten Lombok Timur</span>
          </div>
        </center>
        <br>  
       
     
       <!-- Default Card -->
       <div class="row"> 
          <div class="col-lg-3"> 
            <div class="card">
            <div class="card-body">
               <a href="<?php echo base_url('administrator/rumkit') ?>"><h5 class="card-title" style="font-weight: bold;">Rumah Sakit</h5></a>
             <?php echo $rumkit; ?>
            </div>
          </div><!-- End Default Card -->
          </div> 

          <div class="col-lg-3"> 
            <div class="card">
            <div class="card-body">
              <a href="<?php echo base_url('administrator/puskesmas') ?>"><h5 class="card-title" style="font-weight: bold;">Puskesmas</h5></a>
             <?php echo $puskesmas; ?>
            </div>
          </div><!-- End Default Card -->
          </div> 
          <div class="col-lg-3"> 
            <div class="card">
            <div class="card-body">
              <a href="<?php echo base_url('administrator/poskesdes') ?>"> <h5 class="card-title" style="font-weight: bold;">Poskesdes</h5></a>
             <?php echo $poskesdes; ?>
            </div>
          </div><!-- End Default Card -->
          </div> 
          <div class="col-lg-3"> 
            <div class="card">
            <div class="card-body">
               <a href="<?php echo base_url('administrator/klinik') ?>"><h5 class="card-title" style="font-weight: bold;">Klinik</h5></a>
             <?php echo $klinik; ?>
            </div>
          </div><!-- End Default Card -->
          </div>

          <div class="col-lg-3"> 
            <div class="card">
            <div class="card-body">
             <a href="<?php echo base_url('administrator/apotik') ?>"> <h5 class="card-title" style="font-weight: bold;">Apotik</h5></a>
             <?php echo $apotik; ?>
            </div>
          </div><!-- End Default Card -->
          </div> 

          <div class="col-lg-3"> 
            <div class="card">
            <div class="card-body">
              <a href="<?php echo base_url('administrator/kecamatan') ?>"><h5 class="card-title" style="font-weight: bold;">Data Kecamatan</h5></a>
             <?php echo $kecamatan; ?>
            </div>
          </div><!-- End Default Card -->
          </div> 

          <div class="col-lg-3"> 
            <div class="card">
            <div class="card-body">
             <a href="admin/apotik/klinik"> <h5 class="card-title" style="font-weight: bold;">Rasio Perbandingan</h5></a>
             1
            </div>
          </div><!-- End Default Card -->
          </div> 

          <div class="col-lg-3"> 
            <div class="card">
            <div class="card-body">
             <a href="administrator/user/data"> <h5 class="card-title" style="font-weight: bold;">Admin Management</h5></a>
            <?php echo $user; ?>
            </div>
          </div><!-- End Default Card -->
          </div>  

       </div>
         
    </section>