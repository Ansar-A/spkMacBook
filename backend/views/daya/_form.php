<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Daya $model */
/** @var yii\widgets\ActiveForm $form */
// on your view layout file
?>


<div class="daya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'informasi_baterai')->textarea()->label("Daya") ?>
    <div class="form-group text-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['jenis-penyimpanan/index']) ?>" type="button" class="btn btn-white waves-effect md md-reply"></a>
    </div>

    <?php ActiveForm::end(); ?>

</div>