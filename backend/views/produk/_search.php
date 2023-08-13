<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\ProdukSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_produk') ?>

    <?= $form->field($model, 'id_servicer') ?>

    <?= $form->field($model, 'tahun_rilis') ?>

    <?= $form->field($model, 'id_jenis') ?>

    <?php // echo $form->field($model, 'id_prosesor') ?>

    <?php // echo $form->field($model, 'id_so') ?>

    <?php // echo $form->field($model, 'id_layar') ?>

    <?php // echo $form->field($model, 'id_penyimpanan') ?>

    <?php // echo $form->field($model, 'get_warna') ?>

    <?php // echo $form->field($model, 'get_daya') ?>

    <?php // echo $form->field($model, 'get_nirkabel') ?>

    <?php // echo $form->field($model, 'get_ukuranberat') ?>

    <?php // echo $form->field($model, 'get_kamera') ?>

    <?php // echo $form->field($model, 'get_builtinApps') ?>

    <?php // echo $form->field($model, 'get_audio') ?>

    <?php // echo $form->field($model, 'get_koneksiekspansi') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'get_detaill') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
