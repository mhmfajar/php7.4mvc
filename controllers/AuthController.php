<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\User;

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
    $this->setLayout('auth');
    return $this->render('auth/login');
  }

  public function register(Request $request)
  {

    $user = new User();
    $this->setLayout('auth');

    if ($request->isPost()) {
      $user->loadData($request->getBody());

      if ($user->validate() && $user->save()) {
        return 'Success';
      }

      return $this->render('auth/register', [
        'model' => $user
      ]);
    }

    return $this->render('auth/register', [
      'model' => $user
    ]);
  }
}
