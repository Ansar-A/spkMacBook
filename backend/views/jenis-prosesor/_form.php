<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\JenisProsesor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jenis-prosesor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenisProsesor')->textarea()->label("Jenis Prosesor") ?>

    <div class="form-group text-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['jenis-prosesor/index']) ?>" type="button" class="btn btn-white waves-effect md md-reply"></a>
    </div>

    <?php ActiveForm::end(); ?>

</div>