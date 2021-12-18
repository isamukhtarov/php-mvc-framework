<?php
/**
 * @var \app\models\User $model
 */
?>

<h1>Create an account</h1>
<?php $form = \app\core\form\Form::begin('/register', 'post')?>
    <div class="row">
        <?= $form->field($model, 'firstname')?>
        <?= $form->field($model, 'lastname')?>
    </div>

    <?= $form->field($model, 'email')?>
    <?= $form->field($model, 'password')->passwordField()?>
    <?= $form->field($model, 'confirmPassword')?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?= \app\core\form\Form::end()?>


