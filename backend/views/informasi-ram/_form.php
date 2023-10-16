<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\InformasiRam $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="informasi-ram-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ram')->textarea() ?>

    <div class="form-group text-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['informasi-ram/index']) ?>" type="button" class="btn btn-white waves-effect md md-reply"></a>
    </div>

    <?php ActiveForm::end(); ?>

</div>