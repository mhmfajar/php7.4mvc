<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */

namespace app\core;

/**
 * Class Router
 * 
 * @author Muhammad Fajar <muhammadfajar191@gmail.com>
 * @package app\core
 */
class Application
{

  public Router $router;
  public Request $request;
  public function __construct()
  {
    $this->request = new Request();
    $this->router = new Router($this->request);
  }

  public function run()
  {
    $this->router->resolve();
  }
}
