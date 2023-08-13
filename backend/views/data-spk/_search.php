<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DataSpkSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-spk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_spk') ?>

    <?= $form->field($model, 'rSquare') ?>

    <?= $form->field($model, 'dataF') ?>

    <?= $form->field($model, 'dataT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
