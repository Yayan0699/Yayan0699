
<div class="pagetitle">
  <h1><?= $title; ?></h1>
</div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <!-- Vertical Form --><br>
              <?php foreach($user as $admin) : ?>
              <form class="row g-3" action="<?php echo base_url('administrator/user/ubah/').$admin->id_admin ?>" method="post">
                <div class="col-12">
                  <label class="form-label">ID Admin</label>
                  <input type="text" class="form-control" name="id_admin" value="<?= $admin->id_admin ?>" >
                </div>
                <div class="col-12">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama_admin" value="<?= $admin->nama_admin ?>">
                </div>
                <div class="col-12">
                  <label class="form-label">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" value="<?= $admin->jabatan ?>">
                </div>
                <div class="col-12">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" value="<?= $admin->username ?>" >
                </div>
                <div class="col-12">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control"  name="password" value="<?= $admin->password ?>">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </form><!-- Vertical Form -->
            <?php endforeach; ?>
            </div>
          </div>
        </div>

      </div>
    </section>

  