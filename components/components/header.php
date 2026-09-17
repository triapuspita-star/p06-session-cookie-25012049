<!DOCTYPE html>
<html><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Toko 25M11 - <?= $title ?? 'Home' ?></title>
</head><body class="bg-light">
<nav class="navbar navbar-dark bg-dark mb-4">
<div class="container"><a class="navbar-brand" href="index.php">Toko Tria Puspita - 25012049</a>
<a href="cart.php" class="btn btn-warning">Keranjang (<?= cartCount() ?>)</a></div></nav>
<div class="container">
<?php if(!empty($_SESSION['flash'])){ echo '<div class="alert alert-success">'.$_SESSION['flash'].'</div>'; $_SESSION['flash']=null; } ?>