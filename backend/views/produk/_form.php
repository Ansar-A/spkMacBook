<?php

use common\models\Audio;
use common\models\BuiltinApps;
use common\models\DataSpk;
use common\models\Daya;
use common\models\InformasiRam;
use common\models\InformasiVga;
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
use common\models\User;
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
                            <?= $form->field($model, 'tahun_rilis')->widget(DatePicker::classname(), [
                                'options' => ['placeholder' => 'Tahun Rilis...'],
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd-M-yyyy',
                                ]
                            ]); ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = InformasiRam::find()->all();
                            echo $form->field($model, 'get_informasi_ram')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id',
                                    function ($list) {
                                        return $list->ram;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            )->label("Informasi RAM");
                            ?>
                        </div>
                        <div class="col-xs-12">
                            <?php
                            $list = InformasiVga::find()->all();
                            echo $form->field($model, 'get_informasi_vga')->dropDownList(
                                ArrayHelper::map(
                                    $list,
                                    'id',
                                    function ($list) {
                                        return $list->vga;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            )->label("Informasi VGA");
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
                                        return $list->jenisProsesor;
                                    },
                                ),
                                ['prompt' => 'Select...']
                            )->label("Informasi Prosesor");
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
                            )->label("Informasi Storage");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="panel-title">Baterai MacBook</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="https://support.apple.com/id-id/HT201585" class="btn btn-instagram waves-effect waves-light btn-sm" target="_blank">
                                <i class="fa fa-info"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'baterai')->textInput(['type' => 'number'])->label("Cycle Count") ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'ket')->dropDownList(['Normal' => 'Normal', 'Replace Soon' => 'Replace Soon'], ['prompt' => 'Select...'])->label("Kondisi") ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'kapasitas_pengisian')->textInput(['type' => 'number'])->label("Kapasitas Pengisian Penuh") ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">No. Seri & Garansi Produk</h3>
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'no_seri')->textInput() ?>
                                </div>
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'garansi')->textInput()->label("Informasi Garansi") ?>
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

            <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Toko MacBook</h3>
                    </div>
                    <div class="panel-body">
                        <div class="p-10">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <?php
                                        $list = User::find()->all();
                                        echo $form->field($model, 'id_servicer')->dropDownList(
                                            ArrayHelper::map(
                                                $list,
                                                'id',
                                                function ($list) {
                                                    return $list->username;
                                                },
                                            ),
                                        )->label("Toko");
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php else : ?>
            <?php endif ?>
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