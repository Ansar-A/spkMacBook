<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\PerformaMacbookSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="performa-macbook-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_performa') ?>

    <?= $form->field($model, 'ram') ?>

    <?= $form->field($model, 'vga') ?>

    <?= $form->field($model, 'prosesor') ?>

    <?= $form->field($model, 'storage') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
