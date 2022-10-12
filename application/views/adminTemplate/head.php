<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?= base_url() ?>template/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block" style="font-size: 18px;">Dinas Kesehatan Kabupaten Lombok Timur </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="pagetitle">
      <h1 style="font-size: 18px; padding-left: 10px;">Sistem Informasi Geografis Pemetaan Fasilitas Pelayanan Kesehatan</h1>
    </div><!-- End Page Title -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
         <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="<?php echo base_url('administrator/login/logout') ?>" >
            <i class="bi bi-arrow-left-circle"></i><span class="d-none d-md-block  ps-2">Logout</span>
          </a><!-- End Profile Iamge Icon -->

        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
