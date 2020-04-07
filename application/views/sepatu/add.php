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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Sepatu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="varNama">Nama Sepatu</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Sepatu" name="varNama">
                  </div>
                  <div class="form-group">
                    <label for="varTipe">Tipe</label>
                    <select name="varTipe" class="form-control">
                      <option value="0" selected disabled> -> Pilih Tipe Sepatu</option>
                      <?php foreach ($tipe as $t) : ?>
                        <option value="<?= $t ?>"><?= $t ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="varGender">Gender</label>
                    <select name="varGender" class="form-control">
                      <option value="Men">Men</option>
                      <option value="Women">Women</option>
                      <option value="Unisex">Unisex</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="varDeskripsi">Deskripsi</label>
                    <textarea name="varDeskripsi" cols="30" rows="2" class="form-control" placeholder="Masukkan Deskripsi Sepatu"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="varUkuran">Ukuran Sepatu</label>
                    <input type="number" class="form-control" placeholder="Masukkan Ukuran Sepatu" name="varUkuran">
                  </div>
                  <div class="form-group">
                    <label for="varHarga">Harga</label>
                    <input type="number" class="form-control" placeholder="Masukkan Harga Sepatu" name="varHarga">
                  </div>
                  <div class="form-group">
                    <label for="varStok">Stok</label>
                    <input type="number" class="form-control" placeholder="Masukkan Stok Sepatu" name="varStok">
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