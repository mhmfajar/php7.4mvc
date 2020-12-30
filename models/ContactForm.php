<?php

namespace app\models;

use app\core\Model;

class ContactForm extends Model
{
  public string $subject = '';
  public string $email = '';
  public string $body = '';

  public function rules(): array
  {
    return [
      'subject' => [SELF::RULE_REQUIRED],
      'email' => [SELF::RULE_REQUIRED, SELF::RULE_EMAIL],
      'body' => [SELF::RULE_REQUIRED]
    ];
  }

  public function labels(): array
  {
    return [
      'subject' => 'Enter Your Subject',
      'email' => 'Your Email',
      'body' => 'Body',
    ];
  }

  public function send()
  {
    return true;
  }
}
