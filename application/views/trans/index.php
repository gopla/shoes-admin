  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="ion ion-cash"></i> Transaksi</h1>
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
                  <h3 class="card-title">Daftar Transaksi</h3>
                </div>
              </div>
              <!-- Tabel -->
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="tabel" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Total</th>
                        <th>Status Barang</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($datas as $data) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= date_format(date_create($data['tanggal']), 'd M Y'); ?></td>
                          <td><?= $data['User']['nama'] ?></td>
                          <td>Rp. <?= number_format($data['total']) ?></td>
                          <td>
                            <?php if ($data['status'] == true) : ?>
                              <h5><span class="badge badge-danger">Belum Diambil</span></h5>
                            <?php else : ?>
                              <h5><span class="badge badge-success">Sudah Diambil</span></h5>
                            <?php endif ?>
                          </td>
                          <td>
                            <div class="btn-group">
                              <a href="<?= base_url() . 'trans/show/' . $data['id_transaksi'] ?>" class="btn btn-primary" title="Detail Transaksi">
                                <i class="fas fa-eye    "></i>
                              </a>
                              <?php if ($data['status'] == true) : ?>
                                <a href="<?= base_url() . 'trans/checkout/' . $data['id_transaksi'] ?>" class="btn btn-success" title="Ubah Status Pengambilan">
                                  <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                              <?php else : ?>
                                <a href="#" class="btn btn-secondary" title="Barang sudah diambil">
                                  <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                              <?php endif ?>
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