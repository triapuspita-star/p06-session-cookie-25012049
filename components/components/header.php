<!DOCTYPE html>
<html data-theme="<?= $theme ?>"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
[data-theme='dark'] body { background:#222 !important; color:white !important; }
[data-theme='dark'] .card { background:#333; color:white; }
[data-theme='dark'] .navbar { background:#000 !important; }
</style>
<title>Toko 25M11 - Tria Puspita</title>
</head><body class="<?= $theme === 'dark' ? 'bg-dark text-white' : 'bg-light' ?>">
<nav class="navbar navbar-dark bg-dark mb-4">
<div class="container">
<a class="navbar-brand" href="index.php">Toko Tria Puspita - <?= $theme ?> mode</a>
<div class="d-flex gap-2">
<form method="POST" class="d-inline"><input type="hidden" name="theme" value="<?= $theme==='light'?'dark':'light' ?>"><button class="btn btn-sm btn-outline-light"><?= $theme==='light'?'🌙 Dark':'☀️ Light' ?></button></form>
<a href="cart.php" class="btn btn-warning">Keranjang (<?= cartCount($_SESSION['cart']) ?>)</a>
</div>
</div></nav>
<div class="container">
<?php $flash = $flash ?? pullFlash(); if($flash): ?><div class="alert alert-success"><?= e($flash) ?></div><?php endif; ?>