<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'root', '', 'product_db');
$mysqli->set_charset('utf8mb4');

session_set_cookie_params([
  'httponly' => true,
  'samesite' => 'Lax',
  'secure' => !empty($_SERVER['HTTPS']),
]);
session_start();
