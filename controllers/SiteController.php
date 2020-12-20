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
