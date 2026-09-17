<?php
function getProducts(){ return require __DIR__.'/data/products.php'; }
function findProduct($id){
  foreach(getProducts() as $p) if($p['id']==$id) return $p;
  return null;
}
function cartCount(){ return array_sum($_SESSION['cart'] ?? []); }
function cartTotal(){
  $total=0;
  foreach($_SESSION['cart'] as $id=>$qty){
    $p=findProduct($id); if($p) $total+=$p['harga']*$qty;
  }
  return $total;
}