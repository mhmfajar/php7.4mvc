<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */
/**
 * Class Router
 * 
 * @author Muhammad Fajar <muhammadfajar191@gmail.com>
 * @package ${NAMESPACE}
 */
class Application
{

  public Router $router;
  public function __construct()
  {
    $this->router = new Router();
  }
}
