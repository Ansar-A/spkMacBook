<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SpkKelayakanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="spk-kelayakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="col-sm-4"><?= $form->field($model, 'budgetMin')->textInput(['placeholder' => 'Budget Min', 'type' => 'number'])->label('') ?></div>
    <div class="col-sm-4"><?= $form->field($model, 'budgetMax')->textInput(['placeholder' => 'Budget Max', 'type' => 'number'])->label('') ?></div>

    <div class="form-group" style="padding-top: 20px;">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>