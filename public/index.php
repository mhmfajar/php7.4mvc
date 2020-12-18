<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:30 PM
 */

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$app = new Application();

$app->router->get('/', function () {
  return 'Hello World';
});

$app->router->get('/users', function () {
  return 'Users World';
});

$app->run();
