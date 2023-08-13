<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Nirkabel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="nirkabel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wifi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bluetooth')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
