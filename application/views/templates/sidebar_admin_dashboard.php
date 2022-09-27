<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Online Shop</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= ($this->uri->uri_string() == 'admin/dashboard_admin') ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/dashboard_admin'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= ($this->uri->segment(2) == 'data_barang') ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/data_barang'); ?>">
                    <i class="fas fa-database"></i>
                    <span>Data Barang</span></a>
            </li>

            <li class="nav-item <?= ($this->uri->segment(2) == 'invoice') ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/invoice'); ?>">
                    <i class="fas fa-file-invoice"></i>
                    <span>Invoices</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <?php if ($this->session->userdata('username')) : ?>
                                    <li>
                                        <div>Selamat Datang, <?= $this->session->userdata('username') ?></div>
                                    </li>
                                    <li class="ml-3"><?= anchor('auth/logout', 'Logout') ?></li>
                                <?php else : ?>
                                    <li><?= anchor('auth/login', 'Login') ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">