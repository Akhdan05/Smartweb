<!DOCTYPE HTML>
<html>
  <body class="hold-transition skin-red-light sidebar-mini fixed">  
    <div class="content-wrapper">
      <section class="content-header">
        <h2>
            Selamat Datang, <?= $this->session->userdata('nama') ?>
        </h2>
      </section>
      <!-- Main content -->
      <br>
      <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $data_iphone ?></h3>
                <!-- <h3>0</h3> -->
                <p>iPhone</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $data_macbook ?></h3>
                <p>Macbook</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6"></div>
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $data_pengunjung ?></h3>
                <p>Pengunjung</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </section>
    </div>
      <!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div>
      <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script> -->
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-3">
          <label for="">Pilih Bulan</label>
          <select id="bulan" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4" selected="">4</option>
          </select>
        </div>
      </div>
    </div>
    <br></br>
    <div id="container"></div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script>
    // Chart
    const options = {
      chart: {
        type: 'spline',
        events: {
          load: getData(4)
        }
      },
      title: {
        text: 'Pengunjung Website NgeApple'
      },
      xAxis: {
              type: 'datetime',
              dateTimeLabelFormats: {
                  day: '%e of %b'
              }
      },
      series: [
        {
          name:'Kunjungan',
          data:[],
          pointStart: Date.UTC(2020, 3, 1),
            pointInterval: 24 * 3600 * 1000 // one day
        }
      ]
    };
    const chart = Highcharts.chart('container', options)

    // Data
    $("#bulan").change(function(){
      const val = $(this).val();
      getData(val);
    })
    function getData(bulan) {
        const url = `/home/apiData/${bulan}`;
        $.getJSON(url,function(data) {
          const p =[];
        data.map((obj) => {
            p.push(parseInt(obj.jumlah))
          });
        chart.series[0].update({
          data:p,
          pointStart: Date.UTC(2020, bulan-1, 1)
        })
        chart.redraw(); 
      })
    }
  </script>	
</body>
</html>