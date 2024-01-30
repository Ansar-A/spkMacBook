<?php

use common\models\JenisSo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var backend\models\JenisSoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jenis Sos';
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
                        <a href="<?= Url::to(['jenis-so/index']) ?>">Sistem Operasi</a>
                    </li>
                    <li class="active">
                        Index
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="jenis-so-index">
                        <div class="row">
                            <div class="col-sm-5">
                                <?= Html::button('<i class="md-add-box"></i> Add Data', ['value' => Url::to(['jenis-so/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
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
                        <?php if (\Yii::$app->user->can('Administrator')) : ?>
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
                                        'template' => '{view} {update}',
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
                                    [
                                        'class' => 'kartik\grid\EditableColumn',
                                        'attribute' => 'jenis',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center'],
                                    ],
                                ],
                                'toolbar' => [
                                    Html::a('<i class="ion-load-a"></i>', ['index'], ['class' => 'btn btn-default']),
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
                                        'template' =>
                                        '{view}',
                                        'header' => 'Action',
                                        'buttons' => [
                                            'class' => 'btn btn-primary dropdown-toggle',
                                            'view' => function ($url, $model) {
                                                return Html::a('', ['view', 'id' => $model->id], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                ]);
                                            },

                                        ],
                                    ],

                                    [

                                        'attribute' => 'jenis',
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