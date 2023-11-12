<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\ProdukSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produk-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="input-group">
        <span class="input-group-btn">
            <?= Html::submitButton('<i class="fa fa-search"></i>', ['class' => 'btn waves-effect waves-light btn-primary']) ?>
        </span>
        <?= $form->field($model, 'globalSearch')->textInput(['placeholder' => 'Search here...'])->label('') ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>