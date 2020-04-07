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
            <div class="card">
              <div class="card-header border-1">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Daftar Sepatu</h3>
                </div>
              </div>
              <!-- Tabel -->
              <!-- /.card-header -->
              <div class="card-body">
                <a href="<?= base_url() . 'sepatu/tambah/' ?>" class="btn btn-success">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <span>Tambah Data</span>
                </a>
                <table id="tabel" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Gambar</th>
                      <th>Sepatu</th>
                      <th>Ukuran</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    $urut = 1;
                    foreach ($datas as $data) :
                      $path = 'downloads/sepatu/';
                      $img = 'sepatu' . $no++ . '.jpg';
                      file_put_contents($path . $img, base64_decode($data['gambar']))
                    ?>
                      <tr>
                        <td><?= $urut++ ?></td>
                        <td><img src="<?= $path . $img ?>" style="width: 100px; height:100px;"></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['ukuran'] ?></td>
                        <td>Rp. <?= number_format($data['harga']) ?></td>
                        <td>
                          <div class="btn-group">
                            <a href="<?= base_url() . 'sepatu/edit/' . $data['id_sepatu'] ?>" class="btn btn-warning">
                              <i class="fas fa-edit    "></i>
                            </a>
                            <a href="<?= base_url() . 'sepatu/detail/' . $data['id_sepatu'] . '/' . $img ?>" class="btn btn-primary">
                              <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="<?= base_url() . 'sepatu/hapus/' . $data['id_sepatu'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->