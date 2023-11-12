<?php

use common\models\Audio;
use common\models\BuiltinApps;
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
use kartik\money\MaskMoney;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Produk $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="produk-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-custom panel-border">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true, 'placeholder' => 'Nama Produk...'])->label('') ?>
                        </div>
                        <div class="col-xs-12">
                            <?php echo $form->field($model, 'harga')->widget(MaskMoney::class, [
                                'pluginOptions' => [
                                    'prefix' => 'Rp. ', // Simbol mata uang
                                    'suffix' => '', // Suffix, jika diperlukan
                                    'allowNegative' => false, // Mencegah angka negatif
                                    'thousands' => '.', // Separator ribuan
                                    'decimal' => ',', // Separator desimal
                                    'precision' => 0, // Jumlah angka desimal
                                ],

                            ])->label(''); ?>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Jenis MacBook...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['jenis-produk/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Sistem Operasi...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['jenis-so/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Info RAM...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['informasi-ram/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Info VGA...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['informasi-vga/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Info Prosesor...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['jenis-prosesor/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Info Storage...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['jenis-penyimpanan/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <?= $form->field($model, 'tahun_rilis')->widget(DatePicker::classname(), [
                                'options' => ['placeholder' => 'Tahun Rilis...'],
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'dd-M-yyyy',
                                ]
                            ])->label(''); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-custom panel-border">
                <div class=" panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'baterai')->textInput(['type' => 'number', 'placeholder' => 'Cycle Count...'])->label('') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'ket')->dropDownList(['Normal' => 'Normal', 'Replace Soon' => 'Replace Soon'])->label('') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'kapasitas_pengisian')->textInput(['type' => 'number', 'placeholder' => 'Kapasitas Pengisian Penuh...'])->label('') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-right">
                        <a href="https://support.apple.com/id-id/HT201585" type="button" class="btn btn-info btn-sm waves-effect waves-light">
                            <i class="fa fa-info m-r-5"></i> more info
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-custom panel-border">
                <div class="panel-heading">
                    <!-- <h3 class="panel-title">No. Seri & Garansi Produk</h3> -->
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'no_seri')->textInput(['placeholder' => 'No Seri...'])->label('') ?>
                                </div>
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'garansi')->textarea(['placeholder' => 'Info Garansi...'])->label('') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                <div class="panel panel-custom panel-border">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="p-10">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-right: 12px;">
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
                                            ['prompt' => 'Toko...']
                                        )->label('');
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
        <div class="col-md-6">
            <div class="panel panel-custom panel-border">
                <div class="panel-heading">
                    <!-- <h3 class="panel-title">Photo</h3> -->
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
                            ])->label('');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-custom panel-border">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Jenis Layar...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['jenis-layar/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Warna...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['warna/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Daya...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['daya/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Audio...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['audio/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Koneksi Ekspansi...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['koneksi-ekspansi/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Kamera...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['kamera/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Builtin Apps...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['builtin-apps/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-9">
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
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['nirkabel/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
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
                                        ['prompt' => 'Bluetooth...']
                                    )->label('');
                                    ?>
                                </div>
                                <div class="col-sm-3" style="padding-top: 22px; ">
                                    <a href="<?= Url::to(['nirkabel/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                                        <span class="btn-label"><i class="md-add-box"></i>
                                        </span>New
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-custom panel-border">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="p-10">
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
                    <div class="col-sm-12 text-right" style="padding-right: 5px;">
                        <a href="<?= Url::to(['ukuran-berat/index']) ?>" type="button" class="btn btn-primary waves-effect waves-light" style="right: 5px;">
                            <span class="btn-label"><i class="md-add-box"></i>
                            </span>New
                        </a>
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