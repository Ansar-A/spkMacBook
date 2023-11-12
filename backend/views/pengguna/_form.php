<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Pengguna $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengguna-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'address')->textarea(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">

            <?= $form->field($model, 'status')->dropDownList([10 => 'Active', 9 => 'Inactive']) ?>
        </div>
    </div>

    <!-- <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verification_token')->textInput(['maxlength' => true]) ?> -->



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['pengguna/index']) ?>" type="button" class="btn btn-white waves-effect">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>