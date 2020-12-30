<?php

/** @var $model \app\models\User */

$this->title = 'Register Account';

?>

<h1 class="mt-5">Register</h1>

<?php $form = \app\core\form\Form::begin('', 'POST'); ?>
<div class="form-row">
  <div class="col-md-6">
    <?php echo $form->inputField($model, 'firstname') ?>
  </div>
  <div class="col-md-6">
    <?php echo $form->inputField($model, 'lastname') ?>
  </div>
</div>
<?php echo $form->inputField($model, 'email')->emailField() ?>
<?php echo $form->inputField($model, 'password')->passwordField() ?>
<?php echo $form->inputField($model, 'confirmPassword')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end(); ?>