<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\label\LabelInPlace;

/** @var yii\web\View $this */
/** @var common\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="user-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'username')->textInput() ?></div>
        <div class="col-md-6"><?= $form->field($model, 'email')->textInput() ?></div>
    </div>
    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'status')->textInput() ?></div>
        <div class="col-md-6"><?= $form->field($model, 'hp')->textInput() ?></div>
    </div>
    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'photo')->fileInput() ?></div>
        <div class="col-md-6"><?= $form->field($model, 'address')->textarea() ?></div>

    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>