<?php
require 'bootstrap.php';
require 'functions.php';
$title='Produk';
include 'components/header.php';
?>
<h3>Produk - Cookie Terakhir: <?= $_COOKIE['last_product'] ?? 'Belum ada' ?></h3>
<div class="row">
<?php foreach(getProducts() as $p): ?>
<div class="col-md-3 mb-3"><div class="card p-3">
<h1><?= $p['gambar'] ?></h1>
<h6><?= $p['nama'] ?></h6>
<p>Rp <?= number_format($p['harga']) ?></p>
<a href="actions.php?act=add&id=<?= $p['id'] ?>" class="btn btn-primary btn-sm">+ Keranjang</a>
</div></div>
<?php endforeach; ?>
</div>
<?php include 'components/footer.php'; ?>