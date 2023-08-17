<?php

use common\models\Audio;
use common\models\BuiltinApps;
use common\models\DataSpk;
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

/** @var yii\web\View $this */
/** @var common\models\Produk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produk-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col">
        <div class="col-sm-6"> <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true]) ?></div>
        <div class="col-sm-6">
            <?= $form->field($model, 'tahun_rilis')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Tahun Rilis...'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'dd-M-yyyy',
                ]
            ]); ?>
        </div>
    </div>
    <div class="col">
        <div class="col-sm-6"><?php
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
                                ?></div>
        <div class="col-sm-6">
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
            ?></div>
    </div>
    <div class="col">
        <div class="col-sm-6">
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
        <div class="col-sm-6">
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
    </div>
    <div class="col">
        <div class="col-sm-6">
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
        <div class="col-sm-6">
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
    </div>
    <div class="col">
        <div class="col-sm-6">
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
        <!-- ketahanan -->
        <div class="col-sm-6">
            <?php
            $list = DetailProduk::find()->all();
            echo $form->field($model, 'get_detaill')->dropDownList(
                ArrayHelper::map(
                    $list,
                    'id_detail',
                    function ($list) {
                        return $list->ketahanan0->baterai;
                    },
                ),
                ['prompt' => 'baterai...']
            )->label('Detail Ketahanan');
            ?>
        </div>
        <!-- performa -->
        <div class="col">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-3">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->performa0->ram;
                                    },
                                ),
                                ['prompt' => 'ram...']
                            )->label('Detail Performa');
                            ?>
                        </div>
                        <div class="col-sm-3">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->performa0->vga;
                                    },
                                ),
                                ['prompt' => 'vga...']
                            )->label('Detail Performa');
                            ?>
                        </div>
                        <div class="col-sm-3">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->performa0->prosesor;
                                    },
                                ),
                                ['prompt' => 'prosesor...']
                            )->label('Detail Performa');
                            ?>
                        </div>
                        <div class="col-sm-3">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->performa0->storage;
                                    },
                                ),
                                ['prompt' => 'storage...']
                            )->label('Detail Performa');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- kondisi -->
        <div class="col">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-3">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->kondisi0->kondisi_layar;
                                    },
                                ),
                                ['prompt' => 'kondisi layar...']
                            )->label('Detail kondisi');
                            ?>
                        </div>
                        <div class="col-sm-3">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->kondisi0->keyboard;
                                    },
                                ),
                                ['prompt' => 'keyboard...']
                            )->label('Detail kondisi');
                            ?>
                        </div>
                        <div class="col-sm-3">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->kondisi0->tracpad;
                                    },
                                ),
                                ['prompt' => 'tracpad...']
                            )->label('Detail kondisi');
                            ?>
                        </div>
                        <div class="col-sm-3">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->kondisi0->audio;
                                    },
                                ),
                                ['prompt' => 'audio...']
                            )->label('Detail kondisi');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- keamanan -->
        <div class="col">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <!-- keamanan -->
                        <div class="col-sm-6">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->keamanan0->no_seri;
                                    },
                                ),
                                ['prompt' => 'No Seri...']
                            )->label('Detail keamanan');
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->keamanan0->garansi;
                                    },
                                ),
                                ['prompt' => 'garansi...']
                            )->label('Detail keamanan');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- spk -->
        <div class="col">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-4">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->spk->rSquare;
                                    },
                                ),
                                ['prompt' => 'R Square...']
                            )->label('Detail SPK');
                            ?>
                        </div>
                        <div class="col-sm-4">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->spk->dataF;
                                    },
                                ),
                                ['prompt' => 'data F...']
                            )->label('Detail SPK');
                            ?>
                        </div>
                        <div class="col-sm-4">
                            <?php
                            $list = DetailProduk::find()->all();
                            echo $form->field($model, 'get_detaill')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id_detail',
                                    function ($list) {
                                        return $list->spk->dataT;
                                    },
                                ),
                                ['prompt' => 'data T...']
                            )->label('Detail SPK');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="col-sm-6">
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
        <div class="col-sm-6">
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
    </div>

    <div class="col">
        <div class="col-sm-6"> <?= $form->field($model, 'harga')->textInput(['type' => 'number']) ?></div>
        <div class="col-sm-6">
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
    </div>

    <!-- UkuranBerat -->
    <div class="col">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-xs-3">
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
                    <div class="col-xs-3">
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
                    <div class="col-xs-3">
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
                    <div class="col-xs-3">
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
        <div class="col-sm-6">
            <?= $form->field($model, 'photo')->widget(FileInput::className(), [
                'options' => ['accept' => 'photos/*'],
                'pluginOptions' => [
                    'showUpload' => false
                ]
            ]); ?>
        </div>
    </div>
    <div class="col">
        <div class="col-sm-6">
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
        <!-- Nirkabel -->
        <div class="col-sm-6">
            <div class="card-box">
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
        </div>
    </div>
    <!-- <?= $form->field($model, 'id_servicer')->textInput() ?> -->
    <div class="col-md-12">
        <div class="col pull-right">
            <div class="form-group ">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <div class="container">
    </div>
    <?php ActiveForm::end(); ?>

</div>