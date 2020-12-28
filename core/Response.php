<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 00:10 AM
 */

namespace app\core;

/**
 * Class Response
 * 
 * @author Muhammad Fajar <muhammadfajar191@gmail.com>
 * @package app\core
 */
class Response
{
  public function setStatusCode(int $code)
  {
    http_response_code($code);
  }
}
