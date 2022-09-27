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
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('welcome') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= ($this->uri->uri_string() == 'kategori/komputer') ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('kategori/komputer') ?>">
                    <i class="fas fa-fw fa-laptop" aria-hidden="true"></i>
                    <span>Komputer & Laptop</span></a>
            </li>

            <li class="nav-item <?= ($this->uri->uri_string() == 'kategori/fashion') ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('kategori/fashion') ?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Fashion</span></a>
            </li>

            <li class="nav-item <?= ($this->uri->uri_string() == 'kategori/olahraga') ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('kategori/olahraga') ?>">
                    <i class="fas fa-fw fa-futbol"></i>
                    <span>Olahraga</span></a>
            </li>

            <li class="nav-item <?= ($this->uri->uri_string() == 'kategori/buku') ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('kategori/buku') ?>">
                    <i class="fa fa-fw fa-book"></i>
                    <span>Buku</span></a>
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

                        <!-- Nav Item - Keranjang Belanja -->
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php
                                    $keranjang = 'Keranjang : ' .  $this->cart->total_items() . ' items';
                                    ?>

                                    <?= anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>
                        </div>

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