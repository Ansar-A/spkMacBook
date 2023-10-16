<?php

use common\models\SpkKeamanan;
use common\models\SpkKetahanan;
use common\models\SpkKondisi;
use common\models\SpkPerforma;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\DataSpk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-spk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $list = SpkKeamanan::find()->all();
    echo $form->field($model, 'get_dataRKeamanan')->dropDownList(
        ArrayHelper::map(
            $list,
            'id',
            function ($list) {
                return $list->dataR;
            },
        ),
        ['prompt' => 'Select...']
    );
    ?>
    <?php
    $list = SpkKetahanan::find()->all();
    echo $form->field($model, 'get_dataRKetahanan')->dropDownList(
        ArrayHelper::map(
            $list,
            'id',
            function ($list) {
                return $list->dataR;
            },
        ),
        ['prompt' => 'Select...']
    );
    ?>
    <?php
    $list = SpkKondisi::find()->all();
    echo $form->field($model, 'get_dataRKondisi')->dropDownList(
        ArrayHelper::map(
            $list,
            'id',
            function ($list) {
                return $list->dataR;
            },
        ),
        ['prompt' => 'Select...']
    );
    ?>
    <?php
    $list = SpkPerforma::find()->all();
    echo $form->field($model, 'get_dataRPerforma')->dropDownList(
        ArrayHelper::map(
            $list,
            'id',
            function ($list) {
                return $list->dataR;
            },
        ),
        ['prompt' => 'Select...']
    );
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>