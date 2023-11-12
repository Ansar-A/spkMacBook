<?php

use common\models\InformasiRam;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\bootstrap\Modal;

/** @var yii\web\View $this */
/** @var backend\models\InformasiRamSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Informasi Rams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title"> Informasi RAM</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Panel Informasi RAM
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="informasi-ram-index">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <?= Html::button('<i class="md-add-box"></i> Add Data', ['value' => Url::to(['informasi-ram/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
                                    </div>
                                    <div class="col-sm-5 pull-right">
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
                                <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                                    <?= GridView::widget([
                                        'dataProvider' => $dataProvider,
                                        //'filterModel' => $searchModel,
                                        'headerRowOptions' => ['class' => 'table m-0'],
                                        'filterRowOptions' => ['class' => 'table m-0'],
                                        //'bootstrap' => true,
                                        'responsive' => true,
                                        //'bordered' => false,
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

                                            // 'id',
                                            [
                                                'class' => 'kartik\grid\EditableColumn',
                                                'attribute' =>  'ram',
                                                'headerOptions' => ['class' => 'text-center'],
                                                'contentOptions' => ['style' => 'text-align:center'],
                                            ],
                                            [
                                                'class' => '\kartik\grid\ActionColumn',
                                                'template' => '{view}',
                                                'header' => 'Action',
                                                'buttons' => [
                                                    'class' => 'btn btn-primary dropdown-toggle',
                                                    'view' => function ($url, $model) {
                                                        return Html::a('', ['view', 'id' => $model->id], [
                                                            'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                        ]);
                                                    },
                                                    'update' => function ($url, $model) {

                                                        return Html::a('', ['update', 'id' => $model->id], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                                    },
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

                                        ],
                                        'toolbar' => [
                                            Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
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
                                            //'before' => Html::a('<i class="md-add-box"></i> Create Jenis SO', ['create'], ['class' => 'btn btn-success']),
                                            // 'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                                            // 'footer' => false
                                        ],
                                    ]); ?>
                                <?php else : ?>
                                    <?= GridView::widget([
                                        'dataProvider' => $dataProvider,
                                        //'filterModel' => $searchModel,
                                        'headerRowOptions' => ['class' => 'table m-0'],
                                        'filterRowOptions' => ['class' => 'table m-0'],
                                        //'bootstrap' => true,
                                        'responsive' => true,
                                        //'bordered' => false,
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
                                                'template' => '{view}',
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
                                                    // 'delete' => function ($url, $model) {

                                                    //     return Html::a('', ['delete', 'id' => $model->id], [
                                                    //         'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                                    //         'data' => [
                                                    //             'confirm' => 'Yakin ingin menghapus item ini?',
                                                    //             'method' => 'post',
                                                    //         ],
                                                    //     ]);
                                                    // },
                                                ],
                                            ],
                                            // 'id',
                                            [
                                                'attribute' => 'ram',
                                                'headerOptions' => ['class' => 'text-center'],
                                                'contentOptions' => ['style' => 'text-align:center'],
                                            ],


                                        ],
                                        'toolbar' => [
                                            Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
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
                                            //'before' => Html::a('<i class="md-add-box"></i> Create Jenis SO', ['create'], ['class' => 'btn btn-success']),
                                            // 'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                                            // 'footer' => false
                                        ],
                                    ]); ?>
                                <?php endif ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>