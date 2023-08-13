<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\BuiltinApps $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="builtin-apps-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'builtinApp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
