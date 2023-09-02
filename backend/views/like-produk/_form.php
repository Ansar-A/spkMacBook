<?php

use common\models\Produk;
use common\models\Pengguna;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\LikeProduk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="like-produk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $list = Produk::find()->all();
    echo $form->field($model, 'get_likeProduk')->dropDownList(
        ArrayHelper::map(
            $list,
            'id',
            function ($list) {
                return $list->nama_produk;
            },
        ),
        ['prompt' => 'Select...']
    );
    ?>
    <?php
    $list = Pengguna::find()->all();
    echo $form->field($model, 'get_pengguna')->dropDownList(
        ArrayHelper::map(
            $list,
            'id',
            function ($list) {
                return $list->username;
            },
        ),
        ['prompt' => 'Select...']
    );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['like-produk/index']) ?>" type="button" class="btn btn-white waves-effect">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>