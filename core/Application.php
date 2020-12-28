<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */

namespace app\core;

/**
 * Class Application
 * 
 * @author Muhammad Fajar <muhammadfajar191@gmail.com>
 * @package app\core
 */
class Application
{

  public static string $ROOT_DIR;
  public Router $router;
  public Request $request;
  public Response $response;
  public Session $session;
  public Database $db;
  public Controller $controller;
  public static Application $app;

  public function __construct($rootPath, array $config)
  {
    self::$ROOT_DIR = $rootPath;
    self::$app = $this;
    $this->request = new Request();
    $this->response = new Response();
    $this->router = new Router($this->request, $this->response);
    $this->session = new Session();

    $this->db = new Database($config['db']);
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
}
