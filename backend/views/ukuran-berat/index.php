<?php

use common\models\UkuranBerat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\bootstrap\Modal;



/** @var yii\web\View $this */
/** @var backend\models\UkuranBeratSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ukuran Berats';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Ukuran Berat</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Panel Ukuran Berat
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ukuran-berat-index">
                            <div class="row">
                                <div class="col-sm-5">
                                    <?= Html::button('<i class="md-add-box"></i> Add Data', ['value' => Url::to(['ukuran-berat/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
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
                                        //'id_ukuranberat',
                                        [
                                            'class' => 'kartik\grid\EditableColumn',
                                            'attribute' => 'panjang',
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                        ],
                                        [
                                            'class' => 'kartik\grid\EditableColumn',
                                            'attribute' => 'lebar',
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                        ],
                                        [
                                            'class' => 'kartik\grid\EditableColumn',
                                            'attribute' => 'tinggi',
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                        ],
                                        [
                                            'class' => 'kartik\grid\EditableColumn',
                                            'attribute' => 'berat',
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
                                                    return Html::a('', ['view', 'id_ukuranberat' => $model->id_ukuranberat], [
                                                        'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                    ]);
                                                },
                                                'update' => function ($url, $model) {

                                                    return Html::a('', ['update', 'id_ukuranberat' => $model->id_ukuranberat], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                                },
                                                'delete' => function ($url, $model) {

                                                    return Html::a('', ['delete', 'id_ukuranberat' => $model->id_ukuranberat], [
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
                                        '{export}',
                                        '{toggleData}'
                                    ],
                                    'panel' => [
                                        'heading' => false,
                                        'type' => 'default',
                                    ],
                                ]); ?>
                            <?php else : ?>
                                <?= GridView::widget([
                                    'dataProvider' => $dataProvider,
                                    'headerRowOptions' => ['class' => 'table m-0'],
                                    'filterRowOptions' => ['class' => 'table m-0'],
                                    'responsive' => true,
                                    'striped' => false,
                                    'resizableColumns' => true,
                                    'persistResize' => true,
                                    'floatHeader' => true,
                                    'columns' => [
                                        [
                                            'class' => '\kartik\grid\ActionColumn',
                                            'template' => '{view}',
                                            'header' => 'Action',
                                            'buttons' => [
                                                'class' => 'btn btn-primary dropdown-toggle',
                                                'view' => function ($url, $model) {
                                                    return Html::a('', ['view', 'id_ukuranberat' => $model->id_ukuranberat], [
                                                        'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                    ]);
                                                },
                                            ],
                                        ],
                                        [
                                            'attribute' => 'panjang',
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                        ],
                                        [
                                            'attribute' => 'lebar',
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                        ],
                                        [
                                            'attribute' => 'tinggi',
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                        ],
                                        [
                                            'attribute' => 'berat',
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                        ]
                                    ],
                                    'toolbar' => [
                                        Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                                        '{export}',
                                        '{toggleData}'
                                    ],
                                    'panel' => [
                                        'heading' => false,
                                        'type' => 'default',
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