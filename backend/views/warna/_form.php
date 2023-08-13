<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Warna $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="warna-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'warna')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
