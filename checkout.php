<?php
session_start();
echo "Checkout berhasil! Cookie Username: " . ($_COOKIE['username'] ?? 'tidak ada');
$_SESSION['cart'] = [];
?>
<br><br><a href="index.php">Belanja Lagi</a>