<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Produk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_servicer')->textInput() ?>

    <?= $form->field($model, 'tahun_rilis')->textInput() ?>

    <?= $form->field($model, 'id_jenis')->textInput() ?>

    <?= $form->field($model, 'id_prosesor')->textInput() ?>

    <?= $form->field($model, 'id_so')->textInput() ?>

    <?= $form->field($model, 'id_layar')->textInput() ?>

    <?= $form->field($model, 'id_penyimpanan')->textInput() ?>

    <?= $form->field($model, 'get_warna')->textInput() ?>

    <?= $form->field($model, 'get_daya')->textInput() ?>

    <?= $form->field($model, 'get_nirkabel')->textInput() ?>

    <?= $form->field($model, 'get_ukuranberat')->textInput() ?>

    <?= $form->field($model, 'get_kamera')->textInput() ?>

    <?= $form->field($model, 'get_builtinApps')->textInput() ?>

    <?= $form->field($model, 'get_audio')->textInput() ?>

    <?= $form->field($model, 'get_koneksiekspansi')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'get_detaill')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>