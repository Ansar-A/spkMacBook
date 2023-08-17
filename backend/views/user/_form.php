<?php

use common\models\SosialMedia;
use common\models\User;
use kartik\file\FileInput;
use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="user-form">
    <?php $form = ActiveForm::begin([]); ?>
    <div class="row">
        <div class="col-sm-8">
            <div class="col-md-6">
                <?php
                echo $form->field($model, 'username', [
                    'feedbackIcon' => [
                        'prefix' => 'fa fa-user',
                        'default' => 'fa fa-user',
                        'success' => 'user-plus',
                        'error' => 'user-times',
                        'defaultOptions' => ['class' => 'text-primary']
                    ]
                ])->textInput(['placeholder' => 'Enter username...'])->label('');
                ?>
            </div>
            <div class="col-md-6">
                <?php
                echo $form->field($model, 'email', [
                    'feedbackIcon' => [
                        'prefix' => 'fa fa-envelope',
                        'default' => 'fa fa-envelope',
                        'success' => 'user-plus',
                        'error' => 'user-times',
                        'defaultOptions' => ['class' => 'text-primary']
                    ]
                ])->textInput(['placeholder' => 'Enter email...'])->label('');
                ?>
            </div>
            <div class="col-md-6">
                <?php
                echo $form->field($model, 'hp', [
                    'feedbackIcon' => [
                        'prefix' => 'fa fa-phone',
                        'default' => 'fa fa-phone',
                        'success' => 'user-plus',
                        'error' => 'user-times',
                        'defaultOptions' => ['class' => 'text-primary']
                    ]
                ])->textInput(['type' => 'number'], ['placeholder' => 'Enter Hp...'])->label('');
                ?>
            </div>
            <div class="col-md-6">
                <?php
                echo $form->field($model, 'status')->dropDownList(['10' => 'Active', '9' => 'Inactive'])->label('');
                ?>
            </div>
            <div class="col-md-6">
                <?php
                echo $form->field($model, 'address', [
                    'feedbackIcon' => [
                        'prefix' => 'fa fa-street-view',
                        'default' => 'fa fa-street-view',
                        'success' => 'user-plus',
                        'error' => 'user-times',
                        'defaultOptions' => ['class' => 'text-primary']
                    ]
                ])->textarea(['placeholder' => 'Enter address...'])->label('');
                ?>
            </div>

            <div class="col-md-6">
                <?php
                echo $form->field($model, 'tentang', [
                    'feedbackIcon' => [
                        'prefix' => 'fa fa-street-view',
                        'default' => 'fa fa-street-view',
                        'success' => 'user-plus',
                        'error' => 'user-times',
                        'defaultOptions' => ['class' => 'text-primary']
                    ]
                ])->textarea(['placeholder' => 'Enter tentang...'])->label('');
                ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="col-md-12">
                <?= $form->field($model, 'photo')->widget(FileInput::className(), [
                    'options' => ['accept' => 'photos/*'],
                    'pluginOptions' => [
                        'showUpload' => false
                    ]
                ])->label(''); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="form-group">
                    <hr>
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>