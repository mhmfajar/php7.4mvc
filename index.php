<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:30 PM
 */

require_once

  $app = new Application();

$router = new Router();
$router->get('/', function () {
  return 'Hello World';
});

$app->userRouter($router);

$app->run();
