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
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-border panel-custom">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel Detail</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
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
                    <div class="row">
                        <div class="col-sm-3">
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
                        <div class="col-sm-3">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                        <div class="col-sm-3">

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
                            )->label('&nbsp;');
                            ?>

                        </div>
                        <div class="col-sm-3">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">

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
                        <div class="col-sm-3">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                        <div class="col-sm-3">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                        <div class="col-sm-3">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                        <div class="col-sm-3">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                        <div class="col-sm-3">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                        <div class="col-sm-3">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
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
                        <div class="col-sm-6">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-border panel-custom">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel Data SPK</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <?php
                            $list = DataSpk::find()->all();
                            echo $form->field($model, 'get_spk')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_spk',
                                    function ($list) {
                                        return $list->id_spk;
                                    },
                                ),
                                ['prompt' => 'Get Id SPK...']
                            );
                            ?>
                        </div>
                        <!-- <div class="col-sm-4">
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
                            )->label('&nbsp;');
                            ?>
                        </div>
                        <div class="col-sm-4">
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
                            )->label('&nbsp;');
                            ?>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>