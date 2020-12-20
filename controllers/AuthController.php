<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Class Router
 * 
 * @author Muhammad Fajar <muhammadfajar191@gmail.com>
 * @package app\controllers
 */
class AuthController extends Controller
{
  public function login()
  {
    return $this->render('auth/login');
  }
  public function register(Request $request)
  {
    if ($request->isPost()) {
      return 'Handle Submitted Data';
    }
    return $this->render('auth/register');
  }
}
