  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="ion ion-person-stalker"></i> User</h1>
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
                  <h3 class="card-title">Daftar User</h3>
                </div>
              </div>
              <!-- Tabel -->
              <!-- /.card-header -->
              <div class="card-body">
                <a href="<?= base_url() . 'user/tambah/' ?>" class="btn btn-success">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <span>Tambah Data</span>
                </a>
                <table id="tabel" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>No. Telp</th>
                      <th>Role</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    $urut = 1;
                    foreach ($datas as $data) :
                      $path = 'downloads/user/';
                      $img = 'user' . $no++ . '.jpg';
                      file_put_contents($path . $img, base64_decode($data['foto']))
                    ?>
                      <tr>
                        <td><?= $urut++ ?></td>
                        <td><img src="<?= $path . $img ?>" style="width: 100px; height:100px;"></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['telp'] ?></td>
                        <td><?= $data['role'] ?></td>
                        <td>
                          <div class="btn-group">
                            <a href="<?= base_url() . 'user/edit/' . $data['id_user'] ?>" class="btn btn-warning">
                              <i class="fas fa-edit    "></i>
                            </a>
                            <a href="<?= base_url() . 'user/hapus/' . $data['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">
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