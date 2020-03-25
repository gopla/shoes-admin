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
            <div class="card">
              <div class="card-header border-1">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Daftar Retail</h3>
                </div>
              </div>
              <!-- Tabel -->
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <a href="<?= base_url() . 'retail/tambah/' ?>" class="btn btn-success">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span>Tambah Data</span>
                  </a>
                  <table id="tabel" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Retail</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($datas as $data) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $data['nama'] ?></td>
                          <td><?= $data['lokasi'] ?></td>
                          <td><?= $data['telp'] ?></td>
                          <td>
                            <div class="btn-group">
                              <a href="<?= base_url() . 'retail/edit/' . $data['id_retail'] ?>" class="btn btn-warning">
                                <i class="fas fa-edit    "></i>
                              </a>
                              <a href="<?= base_url() . 'retail/hapus/' . $data['id_retail'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">
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
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->