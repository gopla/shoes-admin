<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.0.0-rc.1
  </div>
</footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE -->
<script src="<?= base_url('assets/dist/js/adminlte.js') ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('assets/dist/js/demo.js') ?>"></script>
<script src="<?= base_url('assets/dist/js/pages/dashboard3.js') ?>"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<script>
  $(document).ready(function() {
    $('#tabel').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });

    let path = window.location.pathname;

    if (path.match(/retail.*/)) {
      $("#navRetail").addClass("active");
    } else if (path.match(/sepatu.*/)) {
      $("#navSepatu").addClass("active");
    } else if (path.match(/home.*/) || path == "/shoes-admin/") {
      $("#navHome").addClass("active");
    } else if (path.match(/user.*/)) {
      $("#navUser").addClass("active");
    }


    async function getDataHarian() {
      let dataHarian = await $.ajax({
        type: "GET",
        url: "http://sepatu.gopla.xyz/dashboard/transpermonth",
        data: "data",
        dataType: "json"
      });
      return dataHarian
    }

    let arrTanggal = [],
      arrTotal = []
    getDataHarian().then(data => {
      $.map(data, function(elementOrValue, indexOrKey) {
        let tgl = new Date(elementOrValue.tanggal)
        arrTanggal.push(tgl.getDate() + "-" + (tgl.getMonth() + 1) + "-" +
          tgl.getFullYear())

        arrTotal.push(elementOrValue.total_harian)
      });
    })

    setTimeout(() => {
      // Sales graph chart
      var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
      //$('#revenue-chart').get(0).getContext('2d');

      var salesGraphChartData = {
        labels: arrTanggal,
        datasets: [{
          label: 'Total Pendapatan',
          fill: false,
          borderWidth: 2,
          lineTension: 0,
          spanGaps: true,
          borderColor: '#efefef',
          pointRadius: 3,
          pointHoverRadius: 7,
          pointColor: '#efefef',
          pointBackgroundColor: '#efefef',
          data: arrTotal
        }]
      }

      var salesGraphChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false,
        },
        scales: {
          xAxes: [{
            ticks: {
              fontColor: '#efefef',
            },
            gridLines: {
              display: false,
              color: '#efefef',
              drawBorder: false,
            }
          }],
          yAxes: [{
            ticks: {
              stepSize: 5000000,
              fontColor: '#efefef',
            },
            gridLines: {
              display: true,
              color: '#efefef',
              drawBorder: false,
            }
          }]
        }
      }

      // This will get the first returned node in the jQuery collection.
      var salesGraphChart = new Chart(salesGraphChartCanvas, {
        type: 'line',
        data: salesGraphChartData,
        options: salesGraphChartOptions
      })
    }, 3000)
  });
</script>
</body>

</html>