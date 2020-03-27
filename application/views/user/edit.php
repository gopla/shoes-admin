  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach ($datas as $data) : ?>
                <form role="form" method="POST" action="" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="varNama">Nama User</label>
                      <input type="text" class="form-control" placeholder="Masukkan Nama User" name="varNama" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="varEmail">Email</label>
                      <input type="email" class="form-control" placeholder="Masukkan Email User" name="varEmail" value="<?= $data['email'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="varPassword">Password</label>
                      <input type="password" class="form-control" placeholder="Masukkan Password User" name="varPassword">
                    </div>
                    <div class="form-group">
                      <label for="varAlamat">Alamat</label>
                      <textarea name="varAlamat" cols="30" rows="2" class="form-control" placeholder="Masukkan Alamat User"><?= $data['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="varTelp">No. Telp</label>
                      <input type="number" class="form-control" placeholder="Masukkan No. Telp User" name="varTelp" value="<?= $data['telp'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="varRole">Role</label>
                      <select name="varRole" class="form-control">
                        <option value="0" selected>-> Pilih Role User</option>
                        <?php foreach ($role as $r) : ?>
                          <?php if ($r == $data['role']) : ?>
                            <option value="<?= $r ?>" selected><?= $r ?></option>|
                          <?php else : ?>
                            <option value="<?= $r ?>"><?= $r ?></option>|
                          <?php endif ?>
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="varImage">Foto</label>
                      <div class="custom-file">
                        <input type="file" class="form-control" name="varImage">
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              <?php endforeach ?>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->