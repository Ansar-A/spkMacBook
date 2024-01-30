<?php

use common\models\AuthItem;
use common\models\AuthItemChild;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AuthItemChild $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="auth-item-child-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    $list = AuthItemChild::find()->all();

    echo $form->field($model, 'parent')->dropDownList(
        ArrayHelper::map(
            $list,
            'parent',
            function ($list) {
                return $list->parent0->name;
            },
        ),
    );
    ?>
    <?= $form->field($model, 'child')->textInput(['maxlength' => true]) ?>
    <?php
    // $list = AuthItemChild::find()->all();
    // echo $form->field($model, 'child')->dropDownList(
    //     ArrayHelper::map(
    //         $list,
    //         'child',
    //         function ($list) {
    //             return $list->child0->name;
    //         },
    //     ),
    // );
    ?>
    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>