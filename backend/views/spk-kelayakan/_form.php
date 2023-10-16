<?php

use common\models\Produk;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\SpkKelayakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="spk-kelayakan-form">
    <?php $form = ActiveForm::begin(); ?> <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="panel-title">Ketahanan</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="https://support.apple.com/id-id/HT201585" class="btn btn-instagram waves-effect waves-light btn-sm" target="_blank">
                                <i class="fa fa-info"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'dataRKetahanan')->textInput() ?>
                    <?= $form->field($model, 'RsquareKetahanan')->textInput() ?>
                    <?= $form->field($model, 'dataFKetahanan')->textInput() ?>
                    <?= $form->field($model, 'T_cicleCount')->textInput() ?>
                    <?= $form->field($model, 'T_kapasitasPengisian')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="panel-title">Keamanan</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="https://support.apple.com/id-id/HT201585" class="btn btn-instagram waves-effect waves-light btn-sm" target="_blank">
                                <i class="fa fa-info"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'dataRKeamanan')->textInput() ?>
                    <?= $form->field($model, 'RsquareKeamanan')->textInput() ?>
                    <?= $form->field($model, 'dataFKeamanan')->textInput() ?>
                    <?= $form->field($model, 'T_noSeri')->textInput() ?>
                    <?= $form->field($model, 'T_garansi')->textInput() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="panel-title">Kondisi</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="https://support.apple.com/id-id/HT201585" class="btn btn-instagram waves-effect waves-light btn-sm" target="_blank">
                                <i class="fa fa-info"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'dataRKondisi')->textInput() ?>
                    <?= $form->field($model, 'RsquareKondisi')->textInput() ?>
                    <?= $form->field($model, 'dataFKondisi')->textInput() ?>
                    <?= $form->field($model, 'T_layar')->textInput() ?>
                    <?= $form->field($model, 'T_keyboard')->textInput() ?>
                    <?= $form->field($model, 'T_tracpad')->textInput() ?>
                    <?= $form->field($model, 'T_audio')->textInput() ?>
                    <?= $form->field($model, 'T_kamera')->textInput() ?>
                    <?= $form->field($model, 'T_koneksi')->textInput() ?>
                    <?= $form->field($model, 'T_port')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">

                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="panel-title">Performa</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="https://support.apple.com/id-id/HT201585" class="btn btn-instagram waves-effect waves-light btn-sm" target="_blank">
                                <i class="fa fa-info"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'dataRPerforma')->textInput() ?>
                    <?= $form->field($model, 'RsquarePerforma')->textInput() ?>
                    <?= $form->field($model, 'dataFPerforma')->textInput() ?>
                    <?= $form->field($model, 'T_ram')->textInput() ?>
                    <?= $form->field($model, 'T_vga')->textInput() ?>
                    <?= $form->field($model, 'T_presesor')->textInput() ?>
                    <?= $form->field($model, 'T_storage')->textInput() ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Produk</h3>
                </div>
                <div class="panel-body">

                    <?php
                    $list = Produk::find()->all();
                    echo $form->field($model, 'get_produk')->dropDownList(
                        ArrayHelper::map(
                            $list,
                            'id',
                            function ($list) {
                                return $list->id;
                            },
                        ),
                        ['prompt' => 'Select...']
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <?= Html::submitButton('<i class="fa fa-save"></i> Save', ['class' => 'btn btn-success'], ['data-style' => 'zoom-in']) ?>
        <a href="<?= Url::to(['spk-kelayakan/index']) ?>" type="button" class="btn btn-white waves-effect">Cancel</a>
    </div>
    <?php ActiveForm::end(); ?>

</div>