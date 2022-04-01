<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
    style="transition: all 0.9s;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/read') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-solid fa-mobile"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ngeApple</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a style="transition: all 0.9s;" class="nav-link" href="<?= base_url('admin/read') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a style="transition: all 0.9s;" class="nav-link" href="<?php echo site_url('admin/read'); ?>">
            <i class="fas fa-user-edit"></i>
            <span>Admin</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a style="transition: all 0.9s;" class="nav-link" href="<?php echo site_url('pengunjung/read'); ?>">
            <i class="fas fa-users"></i>
            <span>Pengunjung</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>