<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item" >
        <a class="nav-link collapsed" href="<?= base_url('administrator/beranda') ?>" >
          <i class="bi bi-grid"></i>
          <span style="font-size: 17px;">Beranda</span>
        </a>
      </li><!-- End Beranda Nav -->

      <li class="nav-item collapsed">
        <a class="nav-link collapsed " href="<?= base_url('administrator/pemetaan') ?>">
          <i class="bi bi-map"></i>
          <span style="font-size: 17px;">Peta</span>
        </a>
      </li><!-- End Peta Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#fasilitas-kesehatan" data-bs-toggle="collapse" href="#">
          <i class="bi bi-house-door"></i><span style="font-size: 17px;">Fasilitas Kesehatan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="fasilitas-kesehatan" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('administrator/rumkit') ?>">
              <i class="bi bi-circle" ></i><span style="font-size:15px;" >Rumah Sakit</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('administrator/puskesmas') ?>">
              <i class="bi bi-circle"></i><span style="font-size:15px;">Puskesmas</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('administrator/poskesdes') ?>">
              <i class="bi bi-circle"></i><span style="font-size:15px;">Poskesdes</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('administrator/klinik') ?>">
              <i class="bi bi-circle"></i><span style="font-size:15px;">Klinik</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('administrator/apotik') ?>">
              <i class="bi bi-circle"></i><span style="font-size:15px;">Apotik</span>
            </a>
          </li>
        </ul>
      </li><!-- End Fasilitas Kesehatan Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kecamatan" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span style="font-size: 17px;">Kecamatan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kecamatan" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('administrator/kecamatan') ?>">
              <i class="bi bi-circle" ></i><span style="font-size:15px;" >Data Kecamatan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('administrator/rasio') ?>">
              <i class="bi bi-circle"></i><span style="font-size:15px;">Analisis Rasio</span>
            </a>
          </li>
        </ul>
      </li><!-- End Fasilitas Kesehatan Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('administrator/user') ?>">
          <i class="bi bi-person-circle"></i>
          <span style="font-size:17px;">Admin Management</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
