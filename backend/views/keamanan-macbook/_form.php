<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\KeamananMacbook $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="keamanan-macbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_seri')->textInput() ?>

    <?= $form->field($model, 'garansi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
