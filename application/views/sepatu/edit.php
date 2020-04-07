  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="ion ion-ios-paw"></i> Sepatu</h1>
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
                <h3 class="card-title">Edit Data Sepatu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach ($datas as $data) : ?>
                <form role="form" method="POST" action="" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="varNama">Nama Sepatu</label>
                      <input type="text" class="form-control" placeholder="Masukkan Nama Sepatu" name="varNama" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="varTipe">Tipe</label>
                      <select name="varTipe" class="form-control">
                        <option value="0"> -> Pilih Tipe Sepatu</option>
                        <?php foreach ($tipe as $t) : ?>
                          <?php if ($t == $data['tipe']) : ?>
                            <option value="<?= $t ?>" selected><?= $t ?></option>
                          <?php else : ?>
                            <option value="<?= $t ?>"><?= $t ?></option>
                          <?php endif ?>
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="varGender">Gender</label>
                      <select name="varGender" class="form-control">
                        <option value="Men" <?= $data['gender'] == 'Men' ? 'selected' : '' ?>>Men</option>
                        <option value="Women" <?= $data['gender'] == 'Women' ? 'selected' : '' ?>>Women</option>
                        <option value="Unisex" <?= $data['gender'] == 'Unisex' ? 'selected' : '' ?>>Unisex</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="varDeskripsi">Deskripsi</label>
                      <textarea name="varDeskripsi" cols="30" rows="2" class="form-control" placeholder="Masukkan Deskripsi Sepatu"><?= $data['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="varUkuran">Ukuran Sepatu</label>
                      <input type="number" class="form-control" placeholder="Masukkan Ukuran Sepatu" name="varUkuran" value="<?= $data['ukuran'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="varHarga">Harga</label>
                      <input type="number" class="form-control" placeholder="Masukkan Harga Sepatu" name="varHarga" value="<?= $data['harga'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="varStok">Stok</label>
                      <input type="number" class="form-control" placeholder="Masukkan Stok Sepatu" name="varStok" value="<?= $data['stok'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="varImage">Gambar</label>
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