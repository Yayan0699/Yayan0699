
<div class="pagetitle">
  <h1><?= $title; ?></h1>
</div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>
              <form class="row g-3" action="<?php echo base_url('administrator/user/tambah') ?>" method="post">
                <div class="col-12">
                  <label class="form-label">ID Admin</label>
                  <input type="text" class="form-control" name="id_admin" >
                </div>
                <div class="col-12">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama_admin" >
                </div>
                <div class="col-12">
                  <label class="form-label">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" >
                </div>
                <div class="col-12">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" >
                </div>
                <div class="col-12">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control"  name="password">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>

      </div>
    </section>

  