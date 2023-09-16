<?php

use common\models\JenisProduk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\DetailView;
use yii\widgets\ListView;


/** @var yii\web\View $this */
/** @var backend\models\JenisProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jenis Produks';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Jenis MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Panel Jenis MacBook
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="jenis-produk-index">
                            <div class="row">
                                <div class="col-sm-5">
                                    <?= Html::button('<i class="md-add-box"></i> Add Data', ['value' => Url::to(['jenis-produk/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
                                </div>
                                <div class="col-sm-7">
                                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                                </div>
                            </div>
                            <?php
                            Modal::begin([
                                'header' => false,
                                'id' => 'modal',
                                'size' => 'modal-lg'
                            ]);
                            echo "<div id = 'modalContent'></div>";
                            Modal::end();
                            ?>
                            <p></p>

                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'headerRowOptions' => ['class' => 'table m-0'],
                                'filterRowOptions' => ['class' => 'table m-0'],
                                //'filterModel' => $searchModel,
                                //'bootstrap' => true,
                                //'responsive' => true,
                                //'bordered' => false,
                                'pjax' => true,
                                'striped' => false,
                                //'condensed' => false,
                                //'responsiveWrap' => false,
                                //'hover' => true,
                                //'containerOptions' => false,
                                //'perfectScrollbar' => false,
                                //'summary' => '',
                                //'showPageSummary' => true,
                                //'summary' => 'Showing <b>{begin}-{end}</b> of <b>{totalCount}</b> Pengguna',
                                //'summaryOptions' => ['class' => 'summary'],

                                'resizableColumns' => true,
                                'persistResize' => true,
                                'floatHeader' => true,
                                //'showPageSummary' => true,
                                'columns' => [
                                    [
                                        'class' => '\kartik\grid\ActionColumn',
                                        'template' => '{view} {delete}',
                                        'header' => 'Action',
                                        'buttons' => [
                                            'class' => 'btn btn-primary dropdown-toggle',
                                            'view' => function ($url, $model) {
                                                return Html::a('', ['view', 'id' => $model->id], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                ]);
                                            },
                                            // 'update' => function ($url, $model) {

                                            //     return Html::a('', ['update', 'id' => $model->id], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                            // },
                                            'delete' => function ($url, $model) {

                                                return Html::a('', ['delete', 'id' => $model->id], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                                    'data' => [
                                                        'confirm' => 'Yakin ingin menghapus item ini?',
                                                        'method' => 'post',
                                                    ],
                                                ]);
                                            },
                                        ],
                                    ],

                                    // [
                                    //     'attribute' => 'attribute_name',
                                    //     'value' => 'attribute_value',
                                    //     'filter' => Html::activeDropDownList($searchModel, 'username', ArrayHelper::map(User::find()->asArray()->all(), 'id', 'username'), ['class' => 'form-control', 'prompt' => 'Select Category']),
                                    // ],
                                    // ['class' => 'yii\grid\SerialColumn'],
                                    //'id',
                                    [
                                        'class' => 'kartik\grid\EditableColumn',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'attribute' => 'jenis',
                                    ],
                                    //'get_ket',
                                ],
                                'toolbar' => [
                                    Html::a('<i class="fa fa-refresh"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                                    // Html::a('<i class="md md-person-add"></i>', ['create'], [
                                    //     'type' => 'button',
                                    //     'class' => 'btn btn-success'
                                    // ]),
                                    // [
                                    //     'content' =>
                                    //     Html::button('<i class="md md-my-library-add"></i>', [
                                    //         'type' => 'button',
                                    //         'class' => 'btn btn-success'
                                    //     ]) . ' ' .
                                    //         Html::a('<i class="md md-redo"></i>', ['grid-demo'], [
                                    //             'class' => 'btn btn-secondary btn-default',
                                    //         ]),
                                    // ],
                                    '{export}',
                                    '{toggleData}'
                                ],
                                'panel' => [
                                    'heading' => false,
                                    //'heading' => '<div class="portlet-heading portlet-default"><i class="md-folder-shared"></i></div>',
                                    'type' => 'default',
                                    // 'before' => Html::a('<i class="md-add-box"></i> Create Jenis Produk', ['create'], ['class' => 'btn btn-success']),
                                    // 'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                                    // 'footer' => false
                                ],
                            ]); ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-box product-detail-box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="product-right-info">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h6><span class="label label-info m-l-5">New</span><b> Chipset</b></h6>
                                                <h4 class="m-t-20" style="padding-left: 5px;margin-top: 0px; margin-bottom: 0px;">
                                                    <b>
                                                        Chipset M3
                                                    </b>
                                                </h4>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="<?php echo Url::to('@web/purple/assets/images/m3.png') ?>" class="thumb-lg img-rounded img-thumbnail" alt="img">
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 class="font-600" style="padding-left: 5px;">Chipset Description</h5>
                                        <p class="text-muted" style="padding-left: 5px;">Apple is developing the next several iterations of its M-series Apple silicon chips, and the chips coming in late 2023 and 2024 will be the "M3" series. The M3 chips will use updated TSMC chip manufacturing technology to make them faster and more efficient than ever before.</p>
                                        <div class="m-t-30 text-center">
                                            <a href="https://www.macrumors.com/guide/m3/" target="_blank" class="btn btn-info waves-effect waves-light btn-sm">
                                                <span class="btn-label"><i class="fa fa-info"></i>
                                                </span>More Info</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>