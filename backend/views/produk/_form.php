<?php

use common\models\Audio;
use common\models\BuiltinApps;
use common\models\Daya;
use common\models\DetailProduk;
use common\models\JenisLayar;
use common\models\JenisPenyimpanan;
use common\models\JenisProduk;
use common\models\JenisProsesor;
use common\models\JenisSo;
use common\models\Kamera;
use common\models\KoneksiEkspansi;
use common\models\Nirkabel;
use common\models\Warna;
use common\models\UkuranBerat;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Produk $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="produk-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Spesifikasi Teknis</h3>
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <?php
                            $list = JenisLayar::find()->all();
                            echo $form->field($model, 'id_layar')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id',
                                    function ($list) {
                                        return $list->jenis;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = Warna::find()->all();
                            echo $form->field($model, 'get_warna')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_warna',
                                    function ($list) {
                                        return $list->warna;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = Daya::find()->all();
                            echo $form->field($model, 'get_daya')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_daya',
                                    function ($list) {
                                        return $list->informasi_baterai;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = Audio::find()->all();
                            echo $form->field($model, 'get_audio')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_audio',
                                    function ($list) {
                                        return $list->audio;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = KoneksiEkspansi::find()->all();
                            echo $form->field($model, 'get_koneksiekspansi')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_koneksi',
                                    function ($list) {
                                        return $list->koneksiEkspansi;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = Kamera::find()->all();
                            echo $form->field($model, 'get_kamera')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_kamera',
                                    function ($list) {
                                        return $list->kamera;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = BuiltinApps::find()->all();
                            echo $form->field($model, 'get_builtinApps')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_builtinApps',
                                    function ($list) {
                                        return $list->builtinApp;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <?php
                                    $list = Nirkabel::find()->all();
                                    echo $form->field($model, 'get_nirkabel')->dropDownList(
                                        ArrayHelper::map(
                                            $list,
                                            'id_nirkabel',
                                            function ($list) {
                                                return $list->wifi;
                                            },
                                        ),
                                        ['prompt' => 'wifi...']
                                    );
                                    ?>
                                </div>
                                <div class="col-xs-6">
                                    <?php
                                    $list = Nirkabel::find()->all();
                                    echo $form->field($model, 'get_nirkabel')->dropDownList(
                                        ArrayHelper::map(
                                            $list,
                                            'id_nirkabel',
                                            function ($list) {
                                                return $list->bluetooth;
                                            },
                                        ),
                                        ['prompt' => 'bluetooth...']
                                    )->label('&nbsp;');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <?php
                                    $list = UkuranBerat::find()->all();
                                    echo $form->field($model, 'get_ukuranberat')->dropDownList(
                                        ArrayHelper::map(
                                            $list,
                                            'id_ukuranberat',
                                            function ($list) {
                                                return $list->tinggi;
                                            },
                                        ),
                                        ['prompt' => 'tinggi...']
                                    );
                                    ?>
                                </div>
                                <div class="col-xs-6">
                                    <?php
                                    $list = UkuranBerat::find()->all();
                                    echo $form->field($model, 'get_ukuranberat')->dropDownList(
                                        ArrayHelper::map(
                                            $list,
                                            'id_ukuranberat',
                                            function ($list) {
                                                return $list->panjang;
                                            },
                                        ),
                                        [
                                            'prompt' => 'panjang...',
                                        ]
                                    )->label('&nbsp;');
                                    ?>
                                </div>
                                <div class="col-xs-6">
                                    <?php
                                    $list = UkuranBerat::find()->all();
                                    echo $form->field($model, 'get_ukuranberat')->dropDownList(
                                        ArrayHelper::map(
                                            $list,
                                            'id_ukuranberat',
                                            function ($list) {
                                                return $list->berat;
                                            },
                                        ),
                                        ['prompt' => 'berat...']
                                    )->label('&nbsp;');
                                    ?>
                                </div>
                                <div class="col-xs-6">
                                    <?php
                                    $list = UkuranBerat::find()->all();
                                    echo $form->field($model, 'get_ukuranberat')->dropDownList(
                                        ArrayHelper::map(
                                            $list,
                                            'id_ukuranberat',
                                            function ($list) {
                                                return $list->lebar;
                                            },
                                        ),
                                        ['prompt' => 'lebar...']
                                    )->label('&nbsp;');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Get ID Detail</h3>
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    $list = DetailProduk::find()->all();
                                    echo $form->field($model, 'get_detaill')->dropDownList(
                                        ArrayHelper::map(
                                            $list,
                                            'id_detail',
                                            function ($list) {
                                                return $list->id_detail;
                                            },
                                        ),
                                        ['prompt' => 'get ID Detail...']
                                    )->label('');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Photo</h3>
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-sm-12">
                            <?= $form->field($model, 'photo')->widget(FileInput::className(), [
                                'options' => ['accept' => 'photos/*'],
                                'pluginOptions' => [
                                    'showUpload' => false,
                                    'browseLabel' => '',
                                    'removeLabel' => '',
                                    'mainClass' => 'input-group-lg',
                                    'fileimageuploaded' => true,
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Basic</h3>
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-xs-12">
                            <?= $form->field($model, 'harga')->textInput(['type' => 'number']) ?>
                        </div>
                        <div class="col-xs-12">
                            <?= $form->field($model, 'stock')->textInput(['type' => 'number']) ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = JenisProduk::find()->all();
                            echo $form->field($model, 'id_jenis')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id',
                                    function ($list) {
                                        return $list->jenis;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = JenisProsesor::find()->all();
                            echo $form->field($model, 'id_prosesor')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id',
                                    function ($list) {
                                        return $list->jenis;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = JenisSo::find()->all();
                            echo $form->field($model, 'id_so')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id',
                                    function ($list) {
                                        return $list->jenis;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = JenisPenyimpanan::find()->all();
                            echo $form->field($model, 'id_penyimpanan')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id',
                                    function ($list) {
                                        return $list->jenis;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            );
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?= $form->field($model, 'tahun_rilis')->widget(DatePicker::classname(), [
                                'options' => ['placeholder' => 'Tahun Rilis...'],
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd-M-yyyy',
                                ]
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-md-12">
        <div class="form-group text-center">
            <?= Html::submitButton('<i class="fa fa-save"></i> Save', ['class' => 'btn btn-success']) ?>
            <a href="<?= Url::to(['produk/index']) ?>" type="button" class="btn btn-white waves-effect">Cancel</a>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>