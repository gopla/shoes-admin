  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pemesanan</h1>
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
                  <h3 class="card-title">Pemesanan Kamar</h3>
                </div>
              </div>
              <!-- Tabel -->
              <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel" class="table table-bordered">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>No Kamar</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($kumpulanPemesanan as $psn): ?>
                      <tr>
                        <td><?php echo $psn['nama'] ?></td>
                        <td><?php echo $psn['no_kamar'] ?></td>
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