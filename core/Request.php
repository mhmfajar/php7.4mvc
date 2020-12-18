<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */

namespace app\core;

/**
 * Class Request
 * 
 * @author Muhammad Fajar <muhammadfajar191@gmail.com>
 * @package app\core
 */
class Request
{

  public function getPath()
  {
    $path = $_SERVER['REQUEST_URI'] ?? false;
    $position = strpos($path, '?');
    if ($position === false) {
      return $path;
    }
    return substr($path, 0, $position);
  }

  public function getMethod()
  {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }
}
