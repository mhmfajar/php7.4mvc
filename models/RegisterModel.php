<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */

namespace app\models;

use app\core\Model;

/**
 * Class Router
 * 
 * @author Muhammad Fajar <muhammadfajar191@gmail.com>
 * @package app\models
 */
class RegisterModel extends Model
{
  public string $firstname;
  public string $lastname;
  public string $email;
  public string $password;
  public string $confirmPassword;

  public function register()
  {
    return 'Creating new users';
  }

  public function rules(): array
  {
    return
  }
}
