<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PerformaMacbook $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="performa-macbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ram')->textInput() ?>

    <?= $form->field($model, 'vga')->textInput() ?>

    <?= $form->field($model, 'prosesor')->textInput() ?>

    <?= $form->field($model, 'storage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
