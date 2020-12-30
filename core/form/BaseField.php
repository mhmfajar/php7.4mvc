<?php

namespace app\core\form;

use app\core\Model;

abstract class BaseField
{
  abstract public function renderInput(): string;

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
    $this->model = $model;
    $this->attribute = $attribute;
  }

  public function __toString()
  {
    return sprintf(
      '
      <div class="form-group">
        <label for="%s">%s</label>
        %s
        <div class="invalid-feedback">
          %s
        </div>
      </div>
    ',
      $this->attribute,
      $this->model->getLabels($this->attribute),
      $this->renderInput(),
      $this->model->getFirstError($this->attribute)
    );
  }
}
