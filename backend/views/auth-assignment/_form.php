<?php

use common\models\AuthAssignment;
use common\models\AuthItem;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AuthAssignment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="auth-assignment-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    $list = AuthItem::find()->all();
    echo $form->field($model, 'item_name')->dropDownList(
        ArrayHelper::map(
            $list,
            'name',
            function ($list) {
                return $list->name;
            },
        ),
        ['prompt' => 'Pilih...']
    );
    ?>
    <!-- <?= $form->field($model, 'item_name')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true, 'placeholder' => 'lihat ID Panel Admin']) ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>