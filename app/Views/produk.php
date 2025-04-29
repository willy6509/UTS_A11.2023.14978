<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Produk dalam Kategori:</h1>
    </div>
    <ul>
        <?php foreach ($produk as $product): ?>
            <li class="mb-2"><?= $product?></li>
        <?php endforeach; ?>
    </ul>
<a href="/kategori">kembali</a>

</div>

<?= $this->endSection() ?>