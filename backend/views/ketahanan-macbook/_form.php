<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\KetahananMacbook $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ketahanan-macbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'baterai')->textInput(['type' => 'number']) ?>
    <?= $form->field($model, 'kapasitas_pengisian')->textInput(['type' => 'number']) ?>
    <?= $form->field($model, 'ket')->dropDownList(['Normal' => 'Normal', 'Replace Soon' => 'Replace Soon'], ['prompt' => 'Select...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>