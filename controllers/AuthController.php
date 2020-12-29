<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

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
        Application::$app->session->setFlash('success', 'Thank for Registering');
        Application::$app->response->redirect('/');
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
