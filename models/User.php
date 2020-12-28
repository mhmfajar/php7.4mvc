<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */

namespace app\models;

use app\core\DbModel;

/**
 * Class Router
 * 
 * @author Muhammad Fajar <muhammadfajar191@gmail.com>
 * @package app\models
 */
class User extends DbModel
{
  const STATUS_INACTIVE = 0;
  const STATUS_ACTIVE = 1;
  const STATUS_DELETED = 2;

  public string $firstname = '';
  public string $lastname = '';
  public string $email = '';
  public int $status = self::STATUS_INACTIVE;
  public string $password = '';
  public string $confirmPassword = '';

  public function tableName(): string
  {
    return 'users';
  }

  public function save()
  {
    $this->status = self::STATUS_INACTIVE;
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);

    return parent::save();
  }

  public function rules(): array
  {
    return [
      'firstname' => [self::RULE_REQUIRED],
      'lastname' => [self::RULE_REQUIRED],
      'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
      'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 6]],
      'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
    ];
  }

  public function attributes(): array
  {
    return ['firstname', 'lastname', 'status', 'email', 'password'];
  }
}
