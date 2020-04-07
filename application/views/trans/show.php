  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="ion ion-cash"></i> Detail Transaksi</h1>
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
                  <?php foreach ($datas as $data) : ?>
                    <h3 class="card-title">Transaksi <?= $data['Transaksi']['User']['nama'] ?> pada <?= date_format(date_create($data['Transaksi']['tanggal']), 'd M Y') ?></h3>
                  <?php break;
                  endforeach ?>
                </div>
              </div>
              <!-- Tabel -->
              <!-- <div class="card"> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table">
                  <thead>
                    <th>No.</th>
                    <th>Sepatu</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Subtotal</th>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($datas as $data) : ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['Sepatu']['nama'] ?></td>
                        <td>Rp. <?= number_format($data['Sepatu']['harga']) ?></td>
                        <td>X <?= $data['jumlah'] ?></td>
                        <td>Rp. <?= number_format($data['subtotal']) ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <div class="container">
                  <div class="float-left">
                    <br>
                    <h3>Total : </h3>
                  </div>
                  <div class="float-right" style="margin-right: 3%">
                    <br>
                    <?php foreach ($datas as $data) : ?>
                      <h3>Rp. <?= number_format($data['Transaksi']['total']) ?></h3>
                    <?php break;
                    endforeach ?>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <!-- card-footer -->
              <div class="card-footer">
                <h5>
                  <i class="fas fa-map-marker-alt    "></i>
                  Retail Penerima
                </h5>
                <?php foreach ($datas as $data) : ?>
                  <p><b><?= $data['Transaksi']['Retail']['nama'] ?></b> - <?= $data['Transaksi']['Retail']['telp'] ?></p>
                  <p>
                    <?= $data['Transaksi']['Retail']['lokasi'] ?>
                  </p>
                <?php break;
                endforeach ?>
              </div>
              <!-- </div> -->
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