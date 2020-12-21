<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

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

    $registerModel = new RegisterModel();
    $this->setLayout('auth');

    if ($request->isPost()) {
      $registerModel->loadData($request->getBody());

      if ($registerModel->validate() && $registerModel->register()) {
        return 'Success';
      }

      return $this->render('auth/register', [
        'model' => $registerModel
      ]);
    }

    return $this->render('auth/register', [
      'model' => $registerModel
    ]);
  }
}
