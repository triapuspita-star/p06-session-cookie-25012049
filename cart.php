<?php session_start(); ?>
<h2>Keranjang Belanja (SESSION)</h2>
<?php
if(empty($_SESSION['cart'])) echo "Kosong";
else { foreach($_SESSION['cart'] as $i) echo "Produk ID: $i <br>"; }
?>
<br><a href="index.php">Kembali</a> | <a href="checkout.php">Checkout</a> | <a href="?clear=1">Kosongkan</a>
<?php if(isset($_GET['clear'])){ $_SESSION['cart']=[]; header("Location: cart.php"); } ?>