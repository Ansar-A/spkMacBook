<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\UserSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-sm-5 pull-right" style="padding-bottom: 10px;">
            <div class="input-group">
                <?= $form->field($model, 'globalSearch')->textInput(['placeholder' => 'Search...'])->label('') ?>
                <span class="input-group-btn">
                    <?= Html::submitButton('<i class="fa fa-search"></i>', ['class' => 'btn waves-effect waves-light btn-primary']) ?>
                </span>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>