<?php
require 'bootstrap.php';
require 'functions.php';
$act = $_GET['act'] ?? $_POST['act'] ?? '';
$id = (int)($_GET['id'] ?? $_POST['id'] ?? 0);

if($act=='add' && $id){
  $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
  $_SESSION['flash'] = "Produk ditambahkan ke keranjang (SESSION)!";
  setcookie("last_product", (string)$id, time()+86400, "/");
  header("Location: index.php"); exit;
}
if($act=='remove' && $id){
  unset($_SESSION['cart'][$id]);
  header("Location: cart.php"); exit;
}
if($act=='clear'){
  $_SESSION['cart'] = [];
  header("Location: cart.php"); exit;
}