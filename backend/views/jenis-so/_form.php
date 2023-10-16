<?php

use common\models\KetKomponentSo;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\JenisSo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jenis-so-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'jenis')->textarea()->label("Jenis Sistem Operasi") ?>
    <div class="form-group text-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['jenis-so/index']) ?>" type="button" class="btn btn-white waves-effect md md-reply"></a>
    </div>
    <?php ActiveForm::end(); ?>

</div>