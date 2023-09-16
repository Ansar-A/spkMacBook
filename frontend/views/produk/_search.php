<?php

use common\models\JenisPenyimpanan;
use common\models\JenisProduk;
use common\models\JenisProsesor;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


/** @var yii\web\View $this */
/** @var frontend\models\ProdukSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produk-search" style="
    width: 602px;">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row ">
        <div class="col-sm-4"><?= $form->field($model, 'budgetMin')->textInput(['placeholder' => 'Budget Min', 'type' => 'number'])->label('') ?></div>
        <div class="col-sm-4"><?= $form->field($model, 'budgetMax')->textInput(['placeholder' => 'Budget Max', 'type' => 'number'])->label('') ?></div>
        <div class="col-sm-4" style="padding-top: 20px;">
            <?= Html::resetButton('<i class="fa fa-spin fa-refresh"></i>', ['class' => 'btn btn-outline-secondary']) ?>
            <?= Html::submitButton('<i class="fa fa-search"></i> FIND', ['class' => 'btn btn-outline-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>