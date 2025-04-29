<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <p class="mb-4">Selamat Datang <?= session()->get('username'); ?> (<?= session()->get('role'); ?>)</p>
    <p class="mb-4"><?= esc($message); ?></p>

    <?php if ($role === 'admin'): ?>
        <h3>Data Admin:</h3>
        <ul>
            <li>Total User: <?= esc($adminData['total_users']); ?></li>
            <li>Login Terakhir: <?= esc($adminData['last_login']); ?></li>
        </ul>
    <?php elseif ($role === 'user'): ?>
        <h3>Data User:</h3>
        <ul>
            <li>Furnitur Favorit: <?= esc($userData['favorite_furniture']); ?></li>
            <li>Status Member: <?= esc($userData['membership_status']); ?></li>
        </ul>
    <?php endif; ?>

</div>

<?= $this->endSection() ?>