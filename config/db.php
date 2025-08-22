<?php
$config = require __DIR__ . '/config.example.php';
if (file_exists(__DIR__ . '/config.php')) {
  $config = array_replace($config, require __DIR__ . '/config.php');
}
function pdo(): PDO {
  static $pdo;
  global $config;
  if (!$pdo) {
    $dsn = 'mysql:host='.$config['DB_HOST'].';dbname='.$config['DB_NAME'].';charset=utf8mb4';
    $pdo = new PDO($dsn, $config['DB_USER'], $config['DB_PASS'], [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
  }
  return $pdo;
}
