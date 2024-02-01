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
// var_dump($model->getErrors());
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
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'get_informasi_ram')->textarea()->label('Info RAM...');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'get_informasi_vga')->textarea()->label('Info VGA...');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'id_prosesor')->textarea()->label('Info Prosesor...');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'id_penyimpanan')->textarea()->label('Info Storage...');
                                    ?>
                                </div>
                            </div>
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
                        <div class="col-xs-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'baterai')->textInput(['type' => 'number', 'placeholder' => 'Cycle Count...'])->label('') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'ket')->dropDownList(['Normal' => 'Normal', 'Replace' => 'Replace Soon'])->label('') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'kapasitas_pengisian')->textInput(['placeholder' => 'Kapasitas Pengisian Penuh...'])->label('') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-right">
                        <a href="https://support.apple.com/id-id/HT201585" target="_blank" type="button" class="btn btn-info btn-sm waves-effect waves-light">
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

                <?php if (\Yii::$app->user->can('Administrator')) : ?>
                    <div class="panel-body">
                        <div class="p-10">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <?= $form->field($model, 'status_produk')->dropDownList(
                                            ['Finish' => 'Finish', 'Unprocessed' => 'Unprocessed'],
                                            [
                                                'options' => [
                                                    'Unprocessed' => ['selected' => true],
                                                    'disabled' => true
                                                ],
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                <?php endif ?>
            </div>
            <div class="panel panel-custom panel-border">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <?= $form->field($model, 'tinggi')->textInput(['placeholder' => 'cm'])->label(); ?>
                                </div>
                                <div class="col-sm-3">
                                    <?= $form->field($model, 'lebar')->textInput(['placeholder' => 'cm'])->label(); ?>
                                </div>
                                <div class="col-sm-3">
                                    <?= $form->field($model, 'panjang')->textInput(['placeholder' => 'cm'])->label(); ?>
                                </div>
                                <div class="col-sm-3">
                                    <?= $form->field($model, 'berat')->textInput(['placeholder' => 'kg'])->label(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-custom panel-border">
                <div class="panel-body">
                    <div class="p-10">
                        <div class="col-sm-12">
                            <?= $form->field($model, 'photo')->widget(FileInput::className(), [
                                'options' => ['accept' => 'photos/*'],
                                'pluginOptions' => [
                                    'initialPreview' => Url::to('@web/' . $model->photo),
                                    'initialPreviewAsData' => true,
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
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'id_layar')->textarea()->label('Info Layar...');
                                    ?>
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
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'get_daya')->textarea()->label('Daya...');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'get_audio')->textarea()->label('Audio...');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'get_koneksiekspansi')->textarea()->label('Koneksi Ekspansi...');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'get_kamera')->textarea()->label('Kamera...');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'get_nirkabel')->textarea()->label('Nirkabel...');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'get_builtinApps')->textarea()->label('Dalam Kotak Pembelian...');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (\Yii::$app->user->can('Administrator')) : ?>
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
                                        )->label('Toko');
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