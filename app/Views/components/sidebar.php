<?php 
$role = session()->get('role');
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Elektronik<sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= (uri_string() == '') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('/' . $role); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>

    <!-- Nav Item - produklist -->
    <li class="nav-item <?= (uri_string() == 'produkList') ? 'active' : '' ?>">
        <a class="nav-link" href="/produkList">
                <i class="fas fa-fw fa-table"></i>
            <span>Product List</span></a>
    </li>
    <!-- Nav Item - keranjang -->
    <li class="nav-item <?= (uri_string() == 'keranjang') ? 'active' : '' ?>">
        <a class="nav-link" href="/keranjang">
            <i class="fas fa-clipboard-list"></i>
            <span>Keranjang</span></a>
    </li>
    
    <!-- Nav Item - produkman -->
    <?php if ($role === 'admin') : ?>
    <li class="nav-item <?= (uri_string() == 'produk') ? 'active' : '' ?>">
        <a class="nav-link" href="/produk">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Product Management</span></a>
    </li>
    <?php endif; ?>

    <!-- Nav Item - Tables (Admin Only) -->
    <!-- <?php if ($role === 'admin') : ?>
        <li class="nav-item <?= (uri_string() == 'datatable') ? 'active' : '' ?>">
            <a class="nav-link" href="/datatable">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>
    <?php endif; ?> -->

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
