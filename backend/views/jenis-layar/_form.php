<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\JenisLayar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jenis-layar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis')->textarea()->label("Jenis Layar") ?>

    <div class="form-group text-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['jenis-layar/index']) ?>" type="button" class="btn btn-white waves-effect md md-reply"></a>
    </div>

    <?php ActiveForm::end(); ?>

</div>