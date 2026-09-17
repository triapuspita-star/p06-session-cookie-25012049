<?php
declare(strict_types=1);
session_start();
$_SESSION['cart'] ??= [];
$_SESSION['flash'] ??= null;

// --- Praktik C - Cookie Preferensi Tema ---
$allowedThemes = ['light', 'dark'];
$theme = $_COOKIE['theme'] ?? 'light';

if (!in_array($theme, $allowedThemes, true)) {
    $theme = 'light';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['theme'])) {
    $candidate = $_POST['theme'];
    if (in_array($candidate, $allowedThemes, true)) {
        setcookie('theme', $candidate, [
            'expires' => time() + 60 * 60 * 24 * 30, // 30 hari
            'path' => '/',
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
        header('Location: index.php'); exit;
    }
}