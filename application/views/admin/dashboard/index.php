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
</body>