<?php

/** @var $model \app\models\User */

$this->title = 'Login';

?>

<h1 class="mt-5">Login</h1>

<?php $form = \app\core\form\Form::begin('', 'POST'); ?>
<?php echo $form->field($model, 'email')->emailField() ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end(); ?>