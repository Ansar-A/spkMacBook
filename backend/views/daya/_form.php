<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Daya $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="daya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'informasi_baterai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
