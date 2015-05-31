<?php
/**
 * Created by PhpStorm.
 * User: liqiu
 * Date: 2015/5/30
 * Time: 12:28
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>