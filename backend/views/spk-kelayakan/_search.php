<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\SpkKelayakanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="spk-kelayakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kelayakan') ?>

    <?= $form->field($model, 'dataRKetahanan') ?>

    <?= $form->field($model, 'dataRKeamanan') ?>

    <?= $form->field($model, 'dataRKondisi') ?>

    <?= $form->field($model, 'dataRPerforma') ?>

    <?php // echo $form->field($model, 'RsquareKetahanan') ?>

    <?php // echo $form->field($model, 'RsquareKeamanan') ?>

    <?php // echo $form->field($model, 'RsquareKondisi') ?>

    <?php // echo $form->field($model, 'RsquarePerforma') ?>

    <?php // echo $form->field($model, 'dataFKetahanan') ?>

    <?php // echo $form->field($model, 'dataFKeamanan') ?>

    <?php // echo $form->field($model, 'dataFKondisi') ?>

    <?php // echo $form->field($model, 'dataFPerforma') ?>

    <?php // echo $form->field($model, 'T_cicleCount') ?>

    <?php // echo $form->field($model, 'T_kapasitasPengisian') ?>

    <?php // echo $form->field($model, 'T_noSeri') ?>

    <?php // echo $form->field($model, 'T_garansi') ?>

    <?php // echo $form->field($model, 'T_ram') ?>

    <?php // echo $form->field($model, 'T_vga') ?>

    <?php // echo $form->field($model, 'T_presesor') ?>

    <?php // echo $form->field($model, 'T_storage') ?>

    <?php // echo $form->field($model, 'T_layar') ?>

    <?php // echo $form->field($model, 'T_keyboard') ?>

    <?php // echo $form->field($model, 'T_tracpad') ?>

    <?php // echo $form->field($model, 'T_audio') ?>

    <?php // echo $form->field($model, 'T_kamera') ?>

    <?php // echo $form->field($model, 'T_koneksi') ?>

    <?php // echo $form->field($model, 'T_port') ?>

    <?php // echo $form->field($model, 'get_produk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
