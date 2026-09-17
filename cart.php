<?php
require 'bootstrap.php';
require 'functions.php';
$title='Keranjang';
include 'components/header.php';
?>
<h3>Keranjang Belanja (Basis SESSION)</h3>
<?php if(empty($_SESSION['cart'])): ?>
<p>Keranjang kosong. <a href="index.php">Belanja dulu</a></p>
<?php else: ?>
<table class="table bg-white"><tr><th>Produk</th><th>Qty</th><th>Harga</th><th>Aksi</th></tr>
<?php foreach($_SESSION['cart'] as $id=>$qty): $p=findProduct($id); ?>
<tr><td><?= $p['nama'] ?></td><td><?= $qty ?></td><td>Rp <?= number_format($p['harga']*$qty) ?></td>
<td><a href="actions.php?act=remove&id=<?= $id ?>" class="btn btn-danger btn-sm">Hapus</a></td></tr>
<?php endforeach; ?>
<tr><th colspan="2">Total: Rp <?= number_format(cartTotal()) ?></th><th colspan="2"><a href="actions.php?act=clear" class="btn btn-warning btn-sm">Kosongkan</a></th></tr>
</table>
<?php endif; ?>
<?php include 'components/footer.php'; ?>