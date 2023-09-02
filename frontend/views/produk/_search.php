<?php

use common\models\JenisPenyimpanan;
use common\models\JenisProduk;
use common\models\JenisProsesor;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ProdukSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produk-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-sm-12">
            <form role="form-group">
                <h4 class="page-header header-title"><b>FIND YOUR MACBOOK</b></h4>
                <div class="row">
                    <div class="col-sm-6" style="padding-right: 0px;"><?= $form->field($model, 'budgetMin')->textInput(['placeholder' => 'min', 'type' => 'number'])->label('') ?></div>
                    <div class="col-sm-6" style="padding-left: 0px;"><?= $form->field($model, 'budgetMax')->textInput(['placeholder' => 'max', 'type' => 'number'])->label('') ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <?= Html::submitButton('<i class="fa fa-search"></i> Search', ['class' => 'btn btn-outline-primary']) ?>
                    </div>
                    <div class=" col-xs-6">
                        <?= Html::resetButton('<i class="fa fa-spin fa-refresh"></i> Refresh', ['class' => 'btn btn-outline-secondary']) ?>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-sm-12">
            <h4 class="page-header header-title"><b>Specific FIND</b></h4>
            <div class="panel-group panel-group-joined" id="accordion-test">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed" aria-expanded="false">
                                Jenis
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <div class="input-group" style="padding-left: 10px;">
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
                                                )->label('');
                                                ?>
                                                <span class="input-group-btn" style="padding-bottom: 15px; padding-left: 11px;">
                                                    <?= Html::submitButton('<i class="fa fa-search"></i>', ['class' => 'btn waves-effect waves-light btn-primary']) ?>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo" aria-expanded="false" class="collapsed">
                                Prosessor
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <div class="input-group" style="padding-left: 10px;">
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
                                                )->label('');
                                                ?>
                                                <span class="input-group-btn" style="padding-bottom: 15px; padding-left: 11px;">
                                                    <?= Html::submitButton('<i class="fa fa-search"></i>', ['class' => 'btn waves-effect waves-light btn-primary']) ?>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed" aria-expanded="false">
                                Storage
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <div class="input-group" style="padding-left: 10px;">
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
                                                )->label('');
                                                ?>
                                                <span class="input-group-btn" style="padding-bottom: 15px; padding-left: 11px;">
                                                    <?= Html::submitButton('<i class="fa fa-search"></i>', ['class' => 'btn waves-effect waves-light btn-primary']) ?>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <!-- <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?> -->
    </div>
    <?php ActiveForm::end(); ?>

</div>