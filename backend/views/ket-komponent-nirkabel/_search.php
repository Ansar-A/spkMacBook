<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\KetKomponentNirkabelSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ket-komponent-nirkabel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'ket_jenisNirkabel') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
