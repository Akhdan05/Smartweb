<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>


  <!--<img src="{base_url('asset/img/ui.png')}" style="width:60px;padding:10px;">-->
  <h1 class="h5 mb-0 text-gray-700"><?php echo $list; ?></h1>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <span class="badge badge-danger badge-counter" id="notif"><?= $count; ?></span>
      </a>
      <!-- Dropdown - Alerts -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
          Updates
        </h6>
        <?php foreach($notif as $data): ?>
        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('notification/index') ?>">
          <div class="mr-3">
            <div class="icon-circle bg-success">
              <i class="fas fa-info text-white"></i>
            </div>
          </div>
          <div>
            <div class="small text-gray-700" id="tanggal"><?= date('D, d-M-Y', $data['tanggal']); ?></div>
            <span class="font-weight-bold" id="pesan"><?= $data['judul']; ?></span>
          </div>
        </a>
           <?php endforeach; ?>
        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
      </div>
    </li>


    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - admin Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata("nama"); ?></span>
        <i class="fas fa-user fa-lg fa-fw"></i>
      </a>

      <!-- Dropdown - admin Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?php echo site_url('admin/logout'); ?>">
          <i class="fas fa-power-off fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->