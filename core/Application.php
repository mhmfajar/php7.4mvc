<?php

namespace app\core;

use app\models\User;

class Application
{

  public static string $ROOT_DIR;

  public string $userClass;
  public Router $router;
  public Request $request;
  public Response $response;
  public Session $session;
  public Database $db;
  public ?DbModel $user;

  public static Application $app;
  public Controller $controller;

  public function __construct($rootPath, array $config)
  {
    $this->userClass = $config['userClass'];
    self::$ROOT_DIR = $rootPath;
    self::$app = $this;
    $this->request = new Request();
    $this->response = new Response();
    $this->router = new Router($this->request, $this->response);
    $this->session = new Session();

    $this->db = new Database($config['db']);

    $primaryValue = $this->session->get('user');
    if ($primaryValue) {
      $primaryKey = $this->userClass::primaryKey();
      $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
    } else {
      $this->user = NULL;
    }
  }

  public function run()
  {
    echo $this->router->resolve();
  }

  /**
   * @return \app\core\Controller
   */
  public function getController()
  {
    return $this->controller;
  }

  /**
   * @return \app\core\Controller
   */
  public function setController(Controller $controller)
  {
    $this->controller = $controller;
  }

  public function login(DbModel $user)
  {
    $this->user = $user;
    $primaryKey = $user->primaryKey();
    $primaryValue = $user->{$primaryKey};
    $this->session->set('user', $primaryValue);
    return true;
  }

  public function logout()
  {
    $this->user = null;
    $this->session->remove('user');
  }
}
