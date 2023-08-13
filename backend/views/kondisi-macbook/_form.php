<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\KondisiMacbook $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kondisi-macbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kondisi_layar')->textInput() ?>

    <?= $form->field($model, 'keyboard')->textInput() ?>

    <?= $form->field($model, 'tracpad')->textInput() ?>

    <?= $form->field($model, 'audio')->textInput() ?>

    <?= $form->field($model, 'kamera')->textInput() ?>

    <?= $form->field($model, 'koneksi')->textInput() ?>

    <?= $form->field($model, 'kondisi_port')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
