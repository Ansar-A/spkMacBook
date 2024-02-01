<?php

use common\models\Produk;
use GuzzleHttp\Handler\Proxy;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
// use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use kartik\form\ActiveField;

/** @var yii\web\View $this */
/** @var common\models\SpkKelayakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="spk-kelayakan-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-5">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Nilai SPK</h3>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'nilai')->widget(FileInput::className(), [
                        'options' => ['accept' => 'Penilaian/*'],
                        'pluginOptions' => [
                            'initialPreview' => Url::to('@web/' . $model->nilai),
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
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Produk</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $list = Produk::find()
                        ->leftJoin('user', 'produk.id_servicer = user.id')
                        ->andWhere(['produk.status_produk' => 'Unprocessed'])
                        ->all();
                    echo $form->field($model, 'get_produk')->dropDownList(
                        ArrayHelper::map(
                            $list,
                            'id',
                            function ($list) {
                                return 'ID ' . $list->id . ' - ' . $list->nama_produk . ' - ' . $list->user->username;
                            },
                        ),
                        ['prompt' => 'Select...']
                    );
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <div class="row">
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo $form->field($model, 'dataR', [
                                'hintType' => ActiveField::HINT_SPECIAL,
                                'hintSettings' => [
                                    'placement' => 'right',
                                    'iconBesideInput' => true,
                                    'onLabelClick' => false,
                                    'onLabelHover' => false,
                                    'onIconClick' => true,
                                    'onIconHover' => true,
                                    'title' => '<i class="fas fa-info-sign"></i> Note'
                                ]
                            ])->hint('<div style="width:200px">Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.</div>'); ?>
                            <!-- <?= $form->field($model, 'dataR')->textInput(['placeholder' => 'R Square Ketahanan'])->label('') ?> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo $form->field($model, 'Rsquare', [
                                'hintType' => ActiveField::HINT_SPECIAL,
                                'hintSettings' => [
                                    'iconBesideInput' => true,
                                    'onLabelClick' => false,
                                    'onLabelHover' => false,
                                    'onIconClick' => true,
                                    'onIconHover' => true,
                                    'title' => '<i class="fas fa-info-sign"></i> Note'
                                ]
                            ])->hint('<div style="width:200px">Enter <b>valid notes</b> to identify this record.</div>'); ?>
                            <!-- <?= $form->field($model, 'Rsquare')->textInput(['placeholder' => 'Adjusted R Square'])->label('') ?> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo $form->field($model, 'dataF', [
                                'hintType' => ActiveField::HINT_SPECIAL,
                                'hintSettings' => [
                                    'iconBesideInput' => true,
                                    'onLabelClick' => false,
                                    'onLabelHover' => false,
                                    'onIconClick' => true,
                                    'onIconHover' => true,
                                    'title' => '<i class="fas fa-info-sign"></i> Note'
                                ]
                            ])->hint('<div style="width:200px">Enter <b>valid notes</b> to identify this record.</div>'); ?>
                            <!-- <?= $form->field($model, 'dataF')->textInput(['placeholder' => 'Uji F Ketahanan'])->label('') ?> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo $form->field($model, 'T_ketahanan', [
                                'hintType' => ActiveField::HINT_SPECIAL,
                                'hintSettings' => [
                                    'iconBesideInput' => true,
                                    'onLabelClick' => false,
                                    'onLabelHover' => false,
                                    'onIconClick' => true,
                                    'onIconHover' => true,
                                    'title' => '<i class="fas fa-info-sign"></i> Note'
                                ]
                            ])->hint('<div style="width:200px">Enter <b>valid notes</b> to identify this record.</div>'); ?>
                            <!-- <?= $form->field($model, 'T_ketahanan')->textInput(['placeholder' => 'Uji T Cycle Count'])->label('') ?> -->
                        </div>
                        <div class="col-sm-12">
                            <?php echo $form->field($model, 'T_keamanan', [
                                'hintType' => ActiveField::HINT_SPECIAL,
                                'hintSettings' => [
                                    'iconBesideInput' => true,
                                    'onLabelClick' => false,
                                    'onLabelHover' => false,
                                    'onIconClick' => true,
                                    'onIconHover' => true,
                                    'title' => '<i class="fas fa-info-sign"></i> Note'
                                ]
                            ])->hint('<div style="width:200px">Enter <b>valid notes</b> to identify this record.</div>'); ?>
                            <!-- <?= $form->field($model, 'T_keamanan')->textInput(['placeholder' => 'Uji T Kapasitas Pengisian'])->label('') ?> -->
                        </div>
                        <div class="col-sm-12">
                            <?php echo $form->field($model, 'T_kondisi', [
                                'hintType' => ActiveField::HINT_SPECIAL,
                                'hintSettings' => [
                                    'iconBesideInput' => true,
                                    'onLabelClick' => false,
                                    'onLabelHover' => false,
                                    'onIconClick' => true,
                                    'onIconHover' => true,
                                    'title' => '<i class="fas fa-info-sign"></i> Note'
                                ]
                            ])->hint('<div style="width:200px">Enter <b>valid notes</b> to identify this record.</div>'); ?>
                            <!-- <?= $form->field($model, 'T_kondisi')->textInput(['placeholder' => 'Uji T Kapasitas Pengisian'])->label('') ?> -->
                        </div>
                        <div class="col-sm-12">
                            <?php echo $form->field($model, 'T_performa', [
                                'hintType' => ActiveField::HINT_SPECIAL,
                                'hintSettings' => [
                                    'iconBesideInput' => true,
                                    'onLabelClick' => false,
                                    'onLabelHover' => false,
                                    'onIconClick' => true,
                                    'onIconHover' => true,
                                    'title' => '<i class="fas fa-info-sign"></i> Note'
                                ]
                            ])->hint('<div style="width:200px">Enter <b>valid notes</b> to identify this record.</div>'); ?>
                            <!-- <?= $form->field($model, 'T_performa')->textInput(['placeholder' => 'Uji T Kapasitas Pengisian'])->label('') ?> -->
                        </div>
                    </div>
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