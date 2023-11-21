<?php

use common\models\Daya;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\bootstrap\Modal;

/** @var yii\web\View $this */
/** @var backend\models\DayaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dayas';
$this->params['breadcrumbs'][] = $this->title;
?>




<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['daya/index']) ?>">Daya</a>
                    </li>
                    <li class="active">
                        Index
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="daya-index">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <?= Html::button('<i class="md-add-box"></i> Add Data', ['value' => Url::to(['daya/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
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
                                            // [
                                            //     'attribute' => 'attribute_name',
                                            //     'value' => 'attribute_value',
                                            //     'filter' => Html::activeDropDownList($searchModel, 'username', ArrayHelper::map(User::find()->asArray()->all(), 'id', 'username'), ['class' => 'form-control', 'prompt' => 'Select Category']),
                                            // ],
                                            // ['class' => 'yii\grid\SerialColumn'],
                                            //'id',
                                            //'jenis',
                                            [
                                                'class' => '\kartik\grid\ActionColumn',
                                                'template' => '{view}',
                                                'header' => 'Action',
                                                'buttons' => [
                                                    'class' => 'btn btn-primary dropdown-toggle',
                                                    'view' => function ($url, $model) {
                                                        return Html::a('', ['view', 'id_daya' => $model->id_daya], [
                                                            'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                        ]);
                                                    },
                                                    'update' => function ($url, $model) {

                                                        return Html::a('', ['update', 'id_daya' => $model->id_daya], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                                    },
                                                    'delete' => function ($url, $model) {

                                                        return Html::a('', ['delete', 'id_daya' => $model->id_daya], [
                                                            'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                                            'data' => [
                                                                'confirm' => 'Yakin ingin menghapus item ini?',
                                                                'method' => 'post',
                                                            ],
                                                        ]);
                                                    },
                                                ],
                                            ],
                                            [
                                                'class' => 'kartik\grid\EditableColumn',
                                                'attribute' => 'informasi_baterai',
                                                'headerOptions' => ['class' => 'text-center'],
                                                'contentOptions' => ['style' => 'text-align:center'],
                                            ],
                                        ],
                                        'toolbar' => [
                                            Html::a('<i class="ion-load-a"></i>', ['index'], ['class' => 'btn btn-default']),
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
                                                        return Html::a('', ['view', 'id_daya' => $model->id_daya], [
                                                            'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                        ]);
                                                    },

                                                ],
                                            ],
                                            [
                                                'attribute' => 'informasi_baterai',
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
</div>