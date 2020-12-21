<?php

/**
 * User: muhammadfajar
 * Date: 17/12/2020
 * Time: 06:45 PM
 */

namespace app\core\form;

use app\core\Model;

/**
 * Class Router
 * 
 * @author Muhammad Fajar <muhammadfajar191@gmail.com>
 * @package app\core\form
 */
class Field
{
  public const TYPE_TEXT = 'text';
  public const TYPE_PASSWORD = 'password';
  public const TYPE_NUMBER = 'number';
  public const TYPE_EMAIL = 'email';

  public string $type;
  public Model $model;
  public string $attribute;

  /**
   * Field Constructor
   * 
   * @param \app\core\Model $model
   * @param string          $attribute
   */
  public function __construct(Model $model, $attribute)
  {
    $this->type = self::TYPE_TEXT;
    $this->model = $model;
    $this->attribute = $attribute;
  }

  public function __toString()
  {
    return sprintf(
      '
      <div class="form-group">
        <label for="%s">%s</label>
        <input type="%s" class="form-control %s" value="%s" id="%s" name="%s">
        <div class="invalid-feedback">
          %s
        </div>
      </div>
    ',
      $this->attribute,
      $this->attribute,
      $this->type,
      $this->model->hasError($this->attribute) ? 'is-invalid' : '',
      $this->model->{$this->attribute},
      $this->attribute,
      $this->attribute,
      $this->model->getFirstError($this->attribute)
    );
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
}
