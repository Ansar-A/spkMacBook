<?php

use common\models\FrMacpro;
use common\models\LikeProduk;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


/** @var yii\web\View $this */
/** @var common\models\FrMacpro $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="fr-macpro-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'get_like')->textInput() ?> -->
    <?php
    $list = LikeProduk::find()->all();
    echo $form->field($model, 'get_like')->dropDownList(
        ArrayHelper::map(
            $list,
            'id',
            function ($list) {
                return 'ID ' . $list->kelayakan->produk->id . ' - ' . $list->kelayakan->produk->nama_produk;
            },
        ),
        ['prompt' => 'Choose...']
    )->label('');
    ?>
    <div class="form-group text-right">
        <?= Html::submitButton('<i class="fa fa-save"></i> Save', ['class' => 'btn btn-success']) ?>
        <a href="<?= Url::to(['fr-macpro/index']) ?>" type="button" class="btn btn-white waves-effect md md-reply"></a>
    </div>

    <?php ActiveForm::end(); ?>

</div>