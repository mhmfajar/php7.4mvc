<?php

use app\core\form\Form;
?>
<h1 class="mt-5">Register</h1>

<?php $form = Form::begin('', 'POST'); ?>
<div class="form-row">
  <div class="col-md-6">
    <?php echo $form->field($model, 'firstname') ?>
  </div>
  <div class="col-md-6">
    <?php echo $form->field($model, 'lastname') ?>
  </div>
</div>
<?php echo $form->field($model, 'email')->emailField() ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php Form::end(); ?>