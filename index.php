<?php
session_start();
if (!isset($_SESSION['cart'])) { $_SESSION['cart'] = []; }
if (!isset($_COOKIE['username'])) {
  setcookie("username", "Tria Puspita - 25012049", time()+3600*24, "/");
}
?>
<h2>Produk - Toko 25M11</h2>
<p>Halo, <?= $_COOKIE['username'] ?? 'Tamu' ?> | Keranjang: <?= count($_SESSION['cart']) ?> item</p>
<a href="?add=1">Tambah Buku Web - 50k</a> | 
<a href="?add=2">Tambah Mouse - 75k</a> | 
<a href="cart.php">Lihat Keranjang</a>
<?php
if (isset($_GET['add'])) {
  $_SESSION['cart'][] = $_GET['add'];
  echo "<p>Produk ditambahkan (pakai SESSION)!</p>";
}
?>