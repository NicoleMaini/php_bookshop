<?php
include __DIR__ . '/includes/database.php';
// inserire il database
$stmt = $pdo->prepare('DELETE FROM libri WHERE id = ?');
$stmt->execute([$_GET["id"]]);

header("Location: /php_bookshop/index.php");
