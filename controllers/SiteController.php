<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

  public function home()
  {
    $params = [
      'title' => "ZezeKea"
    ];

    return $this->render('home', $params);
  }

  public function Contact()
  {
    return $this->render('contact');
  }

  public function handleContact(Request $request)
  {
    $request->getBody();
    return 'Handling Submitted Data';
  }
}
