<?php

/** @var $this \app\core\View */
/** @var $model \app\models\ContactForm */

use app\core\form\TextareaField;

$this->title = 'Contact';

?>

<h1 class="mt-5">Contact Us</h1>

<?php $form = \app\core\form\Form::begin('', 'POST'); ?>
<?php echo $form->inputField($model, 'subject') ?>
<?php echo $form->inputField($model, 'email')->emailField() ?>
<?php echo $form->textareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end(); ?>