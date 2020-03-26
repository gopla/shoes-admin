  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <?php foreach ($dataTrans as $data) : ?>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?= $data['count'] ?></h3>

                  <p>Transaksi</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          <?php endforeach ?>
          <?php foreach ($dataSepatu as $data) : ?>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?= $data['count'] ?></h3>

                  <p>Sepatu</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-paw"></i>
                </div>
                <a href="<?= base_url() . 'sepatu' ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          <?php endforeach ?>
          <?php foreach ($dataUser as $data) :  ?>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?= $data['count'] ?></h3>

                  <p>User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-stalker"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          <?php endforeach ?>
          <?php foreach ($dataRetail as $data) : ?>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?= $data['count'] ?></h3>

                  <p>Retail</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-map"></i>
                </div>
                <a href="<?= base_url() . 'retail' ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          <?php endforeach ?>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->