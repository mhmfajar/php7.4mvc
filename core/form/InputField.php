<?php

namespace app\core\form;

use app\core\Model;

class InputField extends BaseField
{
  public const TYPE_TEXT = 'text';
  public const TYPE_PASSWORD = 'password';
  public const TYPE_NUMBER = 'number';
  public const TYPE_EMAIL = 'email';

  public string $type;

  /**
   * InputField Constructor
   * 
   * @param \app\core\Model $model
   * @param string          $attribute
   */
  public function __construct(Model $model, $attribute)
  {
    $this->type = self::TYPE_TEXT;
    parent::__construct($model, $attribute);
  }

  public function passwordField()
  {
    $this->type = self::TYPE_PASSWORD;
    return $this;
  }

  public function emailField()
  {
    $this->type = self::TYPE_EMAIL;
    return $this;
  }

  public function renderInput(): string
  {
    return sprintf(
      '<input type="%s" class="form-control %s" value="%s" id="%s" name="%s">',
      $this->type,
      $this->model->hasError($this->attribute) ? 'is-invalid' : '',
      $this->model->{$this->attribute},
      $this->attribute,
      $this->attribute
    );
  }
}
