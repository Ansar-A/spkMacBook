<?php

use common\models\AuthAssignment;
use common\models\AuthItem;
use common\models\User;
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
    // $list = AuthItem::find()->all();
    $result = AuthItem::find()
        ->select(['name', 'type'])
        ->where(['type' => 1]) // Ganti 'tipe_column' dengan nama kolom yang berisi tipe
        ->limit(3)
        ->all();
    echo $form->field($model, 'item_name')->dropDownList(
        ArrayHelper::map(
            $result,
            'name',
            function ($result) {
                return $result->name;
            },
        ),
        ['prompt' => 'Pilih...']
    )->label('Akses')
    ?>
    <!-- <?= $form->field($model, 'item_name')->textInput(['maxlength' => true]) ?> -->

    <?php
    $list = User::find()->all();
    echo $form->field($model, 'user_id')->dropDownList(
        ArrayHelper::map(
            $list,
            'id',
            function ($list) {
                return $list->username;
            },
        ),
        ['prompt' => 'Pilih...']
    )->label('User') ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>