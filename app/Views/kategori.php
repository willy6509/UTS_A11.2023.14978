<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    </div>
<ul>
        <?php foreach ($kategori as $id => $kate): ?>
            <li class="mb-5"><a href="<?= 'kategori/' . $id?>"><?= $kate?></a></li>
        <?php endforeach; ?>
</ul>

</div>

<?= $this->endSection() ?>