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
class Controller
{

  public function render($view, $params = [])
  {
    return Application::$app->router->renderView($view, $params);
  }
}
