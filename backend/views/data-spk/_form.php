<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\DataSpk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-spk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rSquare')->textInput() ?>

    <?= $form->field($model, 'dataF')->textInput() ?>

    <?= $form->field($model, 'dataT')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
