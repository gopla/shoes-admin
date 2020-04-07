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
            <div class="card card-primary">
              <div class="card-header border-1">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Detail Sepatu</h3>
                </div>
              </div>
              <!-- Tabel -->
              <!-- /.card-header -->
              <?php
              foreach ($datas as $data) : ?>
                <div class="card-body">
                  <h2><?= $data['nama'] ?></h2>
                  <div class="container float-left" style="width:50%">
                    <img src="<?= base_url() . 'downloads/sepatu/' . $gambar ?>">
                  </div>
                  <div class="container float-right" style="width:50%">
                    <table class="table">
                      <tr>
                        <th>Harga</th>
                        <td>Rp.<?= number_format($data['harga']) ?></td>
                      </tr>
                      <tr>
                        <th>Tipe</th>
                        <td><?= $data['tipe'] ?></td>
                      </tr>
                      <tr>
                        <th>Gender</th>
                        <td><?= $data['gender'] ?></td>
                      </tr>
                      <tr>
                        <th>Ukuran</th>
                        <td><?= $data['ukuran'] ?></td>
                      </tr>
                      <tr>
                        <th>Stok</th>
                        <td><?= $data['stok'] ?></td>
                      </tr>
                      <tr>
                        <th>Deskripsi</th>
                        <td><?= $data['deskripsi'] ?></td>
                      </tr>
                    </table>
                  </div>
                <?php endforeach ?>
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