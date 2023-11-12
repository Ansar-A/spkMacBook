<?php

use yii\helpers\ArrayHelper;
use common\models\LikeProduk;
use common\models\Pengguna;
use common\models\SpkKelayakan;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\LikeProduk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="like-produk-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    $list = SpkKelayakan::find()->all();
    echo $form->field($model, 'produk_id')->dropDownList(
        ArrayHelper::map(
            $list,
            'id_kelayakan',
            function ($list) {
                return $list->kode_produk;
            },
        ),
    )->label('Produk');
    ?>
    <?php
    $list = Pengguna::find()->all();
    echo $form->field($model, 'user_id')->dropDownList(
        ArrayHelper::map(
            $list,
            'id',
            function ($list) {
                return $list->username;
            },
        ),
    )->label('Produk');
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>