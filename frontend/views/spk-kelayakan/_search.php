<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\money\MaskMoney;

/** @var yii\web\View $this */
/** @var frontend\models\SpkKelayakanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="spk-kelayakan-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="input-container">
        <div class="col-sm-4">
            <!-- <?= $form->field($model, 'budgetMin')->textInput(['placeholder' => 'Budget Min', 'type' => 'number'])->label('') ?> -->
            <?php echo $form->field($model, 'budgetMin')->widget(MaskMoney::class, [
                'pluginOptions' => [
                    'prefix' => 'Rp. ', // Simbol mata uang
                    'suffix' => '', // Suffix, jika diperlukan
                    'allowNegative' => false, // Mencegah angka negatif
                    'thousands' => '.', // Separator ribuan
                    'decimal' => ',', // Separator desimal
                    'precision' => 0, // Jumlah angka desimal
                ],

            ])->label('Budget Min'); ?>
        </div>
        <div class="col-sm-4">
            <!-- <?= $form->field($model, 'budgetMax')->textInput(['placeholder' => 'Budget Max', 'type' => 'number'])->label('') ?> -->
            <?php echo $form->field($model, 'budgetMax')->widget(MaskMoney::class, [
                'pluginOptions' => [
                    'prefix' => 'Rp. ', // Simbol mata uang
                    'suffix' => '', // Suffix, jika diperlukan
                    'allowNegative' => false, // Mencegah angka negatif
                    'thousands' => '.', // Separator ribuan
                    'decimal' => ',', // Separator desimal
                    'precision' => 0, // Jumlah angka desimal
                ],

            ])->label('Budget Max'); ?>
        </div>

        <div class="form-group" style="padding-top: 25px;">
            <?= Html::submitButton('<i class="fa fa-search"></i>', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>