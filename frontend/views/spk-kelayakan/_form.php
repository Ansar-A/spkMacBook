<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\SpkKelayakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="spk-kelayakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dataRKetahanan')->textInput() ?>

    <?= $form->field($model, 'dataRKeamanan')->textInput() ?>

    <?= $form->field($model, 'dataRKondisi')->textInput() ?>

    <?= $form->field($model, 'dataRPerforma')->textInput() ?>

    <?= $form->field($model, 'RsquareKetahanan')->textInput() ?>

    <?= $form->field($model, 'RsquareKeamanan')->textInput() ?>

    <?= $form->field($model, 'RsquareKondisi')->textInput() ?>

    <?= $form->field($model, 'RsquarePerforma')->textInput() ?>

    <?= $form->field($model, 'dataFKetahanan')->textInput() ?>

    <?= $form->field($model, 'dataFKeamanan')->textInput() ?>

    <?= $form->field($model, 'dataFKondisi')->textInput() ?>

    <?= $form->field($model, 'dataFPerforma')->textInput() ?>

    <?= $form->field($model, 'T_cicleCount')->textInput() ?>

    <?= $form->field($model, 'T_kapasitasPengisian')->textInput() ?>

    <?= $form->field($model, 'T_noSeri')->textInput() ?>

    <?= $form->field($model, 'T_garansi')->textInput() ?>

    <?= $form->field($model, 'T_ram')->textInput() ?>

    <?= $form->field($model, 'T_vga')->textInput() ?>

    <?= $form->field($model, 'T_presesor')->textInput() ?>

    <?= $form->field($model, 'T_storage')->textInput() ?>

    <?= $form->field($model, 'T_layar')->textInput() ?>

    <?= $form->field($model, 'T_keyboard')->textInput() ?>

    <?= $form->field($model, 'T_tracpad')->textInput() ?>

    <?= $form->field($model, 'T_audio')->textInput() ?>

    <?= $form->field($model, 'T_kamera')->textInput() ?>

    <?= $form->field($model, 'T_koneksi')->textInput() ?>

    <?= $form->field($model, 'T_port')->textInput() ?>

    <?= $form->field($model, 'T_layar')->textInput() ?>

    <?= $form->field($model, 'get_produk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>