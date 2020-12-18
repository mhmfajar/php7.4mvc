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
class Router
{
  public Request $request;
  protected array $routes = [];

  /**
   * Router Constructor.
   * 
   * @param \app\core\Request $request
   */
  public function __construct(\app\core\Request $request)
  {
    $this->request = $request;
  }

  public function get($path, $callback)
  {
    $this->routes['get'][$path] = $callback;
  }

  public function resolve()
  {
    $path = $this->request->getPath();
    $method = $this->request->getMethod();
    $callback = $this->routes[$method][$path] ?? false;
    if ($callback === false) {
      echo "Not found";
      exit;
    }
    echo call_user_func($callback);
  }
}
