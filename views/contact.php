<?php
    use app\core\form\TextareaField;

    /** @var \app\core\View $this */
    $this->title = 'Contact';
?>

<h1>Contact us, please!</h1>

<?php $form = \app\core\form\Form::begin('', 'post');?>

<?= $form->field($model,'subject');?>
<?= $form->field($model,'email');?>
<?= new TextareaField($model, 'body');?>

<button type="submit" class="btn btn-primary">Submit</button>
<?= \app\core\form\Form::end(); ?>

