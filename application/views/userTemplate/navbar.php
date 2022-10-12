<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo base_url('user/beranda') ?>" class="logo d-flex align-items-center">
        <img src="<?= base_url() ?>templateUser/assets/img/logo.png" alt="">
        <span>SIG Pemetaan Fasilitas Kesehatan</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul >
          <li><a class="nav-link scrollto" href="<?php echo base_url('user/beranda') ?>"><div style="font-size:20px;">Beranda</div></a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('user/peta') ?>"><div style="font-size:20px;">Peta</div></a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('user/daftar') ?>"><div style="font-size:20px;">Daftar Fasilitas</div></a></li>
          
          <!-- <li class="dropdown"><a href="<?php echo base_url('user/daftar') ?>"><span><div style="font-size:20px;">Daftar Fasilitas</div></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php $keyword = null; ?>
              <li><a href="<?php echo base_url('user/daftar/rumkit') ?>">Rumah Sakit</a></li>
              <li><a href="<?php echo base_url('user/daftar/puskesmas') ?>">Puskesmas</a></li>
              <li><a href="<?php echo base_url('user/daftar/poskesdes')?>">Poskesdes</a></li>
              <li oncli><a href="<?php echo base_url('user/daftar/klinik') ?>">Klinik</a></li>
              <li><a href="<?php echo base_url('user/daftarApotik')?>">Apotik</a></li>
            </ul>
          </li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->