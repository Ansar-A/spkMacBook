<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\KetKomponent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ket-komponent-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col">
        <div class="col-sm-8">
            <?= $form->field($model, 'ket_jenisProduk')->textarea(['rows' => 8]) ?>
            <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'photo')->widget(FileInput::className(), [
                'options' => ['accept' => 'photos/*'],
                'pluginOptions' => [
                    'showUpload' => false,
                    'browseLabel' => '',
                    'removeLabel' => '',
                    'mainClass' => 'input-group-lg',
                    'fileimageuploaded' => true,
                ]
            ]);
            ?>
        </div>
    </div>
    <div class="form-group" style="padding-left:10px">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['ket-komponent/index']) ?>" type="button" class="btn btn-white waves-effect">Back</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>