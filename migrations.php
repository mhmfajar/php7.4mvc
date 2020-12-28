<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:30 PM
 */

use app\core\Application;
use Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
  'db' => [
    'dsn' => $_ENV['DB_DSN'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD']
  ]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();
