<?php

session_start();

require_once __DIR__ . '/../flight/autoload.php';
require_once __DIR__ . '/../flight/Flight.php';
require_once __DIR__ . '/../config/env.php';
loadEnv(__DIR__ . '/../.env');

// Load DB config
$dbConfig = require __DIR__ . '/../config/database.php';

$dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";

$pdo = new PDO(
    $dsn,
    $dbConfig['username'],
    $dbConfig['password'],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
Flight::set('pdo', $pdo);

// Function for checking authorization
function requireAuth() {
    if (empty($_SESSION['user_id'])) {
        Flight::json(['error' => 'Unauthorized'], 401);
        exit;
    }
}