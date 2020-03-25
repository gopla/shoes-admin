  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Retail</h1>
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
                <h3 class="card-title">Edit Data Retail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach ($datas as $data) : ?>
                <form role="form" method="POST" action="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="varNama">Nama Retail</label>
                      <input type="text" class="form-control" placeholder="Masukkan Nama Retail" name="varNama" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="varAlamat">Alamat</label>
                      <textarea name="varAlamat" cols="30" rows="2" class="form-control" placeholder="Masukkan Alamat Retail"><?= $data['lokasi'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="varTelp">No. Telp</label>
                      <input type="text" class="form-control" placeholder="Masukkan No. Telfon" name="varTelp" value="<?= $data['telp'] ?>">
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