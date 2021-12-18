<?php
/**
 * @var \app\models\User $model
 */
?>

<h1>Login</h1>
<?php $form = \app\core\form\Form::begin('/login', 'post')?>
    <?= $form->field($model, 'email')?>
    <?= $form->field($model, 'password')->passwordField()?>
<button type="submit" class="btn btn-primary">Submit</button>
<?= \app\core\form\Form::end()?>


