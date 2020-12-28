<?php

use app\core\Application;

class m0002_add_password_column
{

  public function up()
  {
    $db = Application::$app->db;
    $db->pdo->exec("ALTER TABLE users ADD password VARCHAR(512) NOT NULL AFTER email");
  }

  public function down()
  {
    $db = Application::$app->db;
    $db->pdo->exec("ALTER TABLE users DROP password");
  }
}
