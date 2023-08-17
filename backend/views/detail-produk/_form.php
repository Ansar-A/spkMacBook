<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use common\models\DataSpk;
use common\models\KeamananMacbook;
use common\models\KetahananMacbook;
use common\models\KondisiMacbook;
use common\models\PerformaMacbook;
use yii\helpers\ArrayHelper;


/** @var yii\web\View $this */
/** @var common\models\DetailProduk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-produk-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KetahananMacbook::find()->all();
            echo $form->field($model, 'ketahanan')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_ketahanan',
                    function ($list) {
                        return $list->baterai;
                    },
                ),
                ['prompt' => 'Select...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = PerformaMacbook::find()->all();
            echo $form->field($model, 'performa')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_performa',
                    function ($list) {
                        return $list->ram;
                    },
                ),
                ['prompt' => 'ram...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = PerformaMacbook::find()->all();
            echo $form->field($model, 'performa')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_performa',
                    function ($list) {
                        return $list->vga;
                    },
                ),
                ['prompt' => 'vga...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = PerformaMacbook::find()->all();
            echo $form->field($model, 'performa')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_performa',
                    function ($list) {
                        return $list->prosesor;
                    },
                ),
                ['prompt' => 'prosesor...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = PerformaMacbook::find()->all();
            echo $form->field($model, 'performa')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_performa',
                    function ($list) {
                        return $list->storage;
                    },
                ),
                ['prompt' => 'storage...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KondisiMacbook::find()->all();
            echo $form->field($model, 'kondisi')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_kondisi',
                    function ($list) {
                        return $list->kondisi_layar;
                    },
                ),
                ['prompt' => 'kondisi_layar...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KondisiMacbook::find()->all();
            echo $form->field($model, 'kondisi')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_kondisi',
                    function ($list) {
                        return $list->keyboard;
                    },
                ),
                ['prompt' => 'keyboard...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KondisiMacbook::find()->all();
            echo $form->field($model, 'kondisi')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_kondisi',
                    function ($list) {
                        return $list->tracpad;
                    },
                ),
                ['prompt' => 'tracpad...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KondisiMacbook::find()->all();
            echo $form->field($model, 'kondisi')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_kondisi',
                    function ($list) {
                        return $list->audio;
                    },
                ),
                ['prompt' => 'audio...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KondisiMacbook::find()->all();
            echo $form->field($model, 'kondisi')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_kondisi',
                    function ($list) {
                        return $list->kamera;
                    },
                ),
                ['prompt' => 'kamera...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KondisiMacbook::find()->all();
            echo $form->field($model, 'kondisi')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_kondisi',
                    function ($list) {
                        return $list->koneksi;
                    },
                ),
                ['prompt' => 'koneksi...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KondisiMacbook::find()->all();
            echo $form->field($model, 'kondisi')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_kondisi',
                    function ($list) {
                        return $list->kondisi_port;
                    },
                ),
                ['prompt' => 'kondisi_port...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KeamananMacbook::find()->all();
            echo $form->field($model, 'keamanan')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_keamanan',
                    function ($list) {
                        return $list->no_seri;
                    },
                ),
                ['prompt' => 'no_seri...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = KeamananMacbook::find()->all();
            echo $form->field($model, 'keamanan')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_keamanan',
                    function ($list) {
                        return $list->garansi;
                    },
                ),
                ['prompt' => 'garansi...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = DataSpk::find()->all();
            echo $form->field($model, 'get_spk')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_spk',
                    function ($list) {
                        return $list->rSquare;
                    },
                ),
                ['prompt' => 'rSquare...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = DataSpk::find()->all();
            echo $form->field($model, 'get_spk')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_spk',
                    function ($list) {
                        return $list->dataF;
                    },
                ),
                ['prompt' => 'dataF...']
            );
            ?>
        </div>
    </div>
    <div class="p-20">
        <div class="col-xs-12">
            <?php
            $list = DataSpk::find()->all();
            echo $form->field($model, 'get_spk')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_spk',
                    function ($list) {
                        return $list->dataT;
                    },
                ),
                ['prompt' => 'dataT...']
            );
            ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>