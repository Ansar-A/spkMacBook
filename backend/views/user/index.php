<?php

use common\models\User;
use kartik\form\ActiveForm;
use kartik\grid\CheckboxColumn;
use kartik\grid\ActionColumn;
use yii\helpers\Html;
use yii\helpers\Url;

use kartik\grid\GridView;
use PHPUnit\TextUI\XmlConfiguration\Constant;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var backend\models\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
$totalStatus = User::find()->count();
$active = User::find()->where(['status' => Yii::$app->user->identity->id])->count('status');
// $inactive = JenisProduk::find()->count();


?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if (Yii::$app->session->hasFlash('error')) : ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i>Not Access!</h4>
                        <?= Yii::$app->session->getFlash('error') ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Panel Admin</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Admin
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="user-index">
                    <div class="row">
                        <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                            <div class="col-sm-1">
                                <?= Html::button('<i class="md-add-box"></i> Add User', ['value' => Url::to(['user/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
                            </div>

                        <?php else : ?>
                        <?php endif ?>
                        <div class="col-sm-11 pull-right">
                            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                        </div>
                    </div>

                    <?php
                    Modal::begin([
                        'header' => 'Create User',
                        'id' => 'modal',
                        'size' => 'modal-lg'
                    ]);
                    echo "<div id = 'modalContent'></div>";
                    Modal::end();
                    ?>
                    <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'responsive' => true,
                            'striped' => false,
                            'resizableColumns' => true,
                            'persistResize' => true,
                            'floatHeader' => true,
                            'headerRowOptions' => ['class' => 'table m-0'],
                            'filterRowOptions' => ['class' => 'table m-0'],
                            //'bootstrap' => true,
                            //'bordered' => false,
                            //'condensed' => false,
                            //'responsiveWrap' => false,
                            //'hover' => true,
                            //'containerOptions' => false,
                            //'perfectScrollbar' => false,
                            //'summary' => '',
                            //'showPageSummary' => true,
                            //'summary' => 'Showing <b>{begin}-{end}</b> of <b>{totalCount}</b> Pengguna',
                            //'summaryOptions' => ['class' => 'summary'],
                            //'showPageSummary' => true,
                            'columns' => [
                                [
                                    'class' => '\kartik\grid\ActionColumn',
                                    'template' => '{view} {update} {delete}',
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
                                        // 'delete' => function ($url, $model) {
                                        //     return Html::a('', $url, [
                                        //         'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                        //         'data' => [
                                        //             'method' => 'POST',
                                        //             'confirm' => 'Yakin ingin menghapus item ini?',

                                        //         ],
                                        //     ]);
                                        // },
                                    ],
                                ],

                                // ['class' => 'yii\grid\SerialColumn'],
                                [
                                    'header' => '',
                                    //'contentOptions' => ['style' => 'max-width:20px;'],
                                    // 'contentOptions' => ['style' => 'text-align:center'],
                                    'headerOptions' => ['class' => 'text-center'],
                                    'format' => 'raw',
                                    'value' => function ($model) {
                                        return '<center>' . Html::img('@web/' . $model->photo, ['style' => 'heigth: 50px; width:50px;', 'class' => 'img-responsive img-rounded']) . '</center>';
                                    }
                                ],
                                [
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'attribute' => 'status',
                                    'format' => 'raw',
                                    'filter'    => [10 => "Active", 9 => "Suspended"],
                                    'value' => function ($data, $key, $index, $column) {
                                        if ($data->status == 10) {
                                            return '<span class="label label-table label-success">Active</span>';
                                        } else {
                                            return '<span class="label label-table label-danger">Suspended</span>';
                                        }
                                    }
                                ],
                                'id',
                                'username',
                                //'photo',
                                'address',
                                'hp',
                                // 'id',
                                //'auth_key',
                                //'password_hash',
                                //'password_reset_token',
                                //'email:email',
                                //'created_at',
                                //'updated_at',
                                //'verification_token',

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
                                //'before' => Html::a('<i class="md-add-box"></i> Create Admin', ['create'], ['class' => 'btn btn-success']),
                                // 'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                                // 'footer' => false
                            ],
                        ]); ?>
                    <?php else : ?>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'responsive' => true,
                            'striped' => false,
                            'resizableColumns' => true,
                            'persistResize' => true,
                            'floatHeader' => true,
                            'headerRowOptions' => ['class' => 'table m-0'],
                            'filterRowOptions' => ['class' => 'table m-0'],
                            'columns' => [
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
                                    ],
                                ],

                                [
                                    'label' => '',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'format' => 'raw',
                                    'value' => function ($model) {
                                        return '<center>' . Html::img('@web/' . $model->photo, ['style' => 'heigth: 50px; width:50px;', 'class' => 'img-responsive img-rounded']) . '</center>';
                                    }
                                ],
                                [
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'attribute' => 'status',
                                    'format' => 'raw',
                                    'filter'    => [10 => "Active", 9 => "Suspended"],
                                    'value' => function ($data, $key, $index, $column) {
                                        if ($data->status == 10) {
                                            return '<span class="label label-table label-success">Active</span>';
                                        } else {
                                            return '<span class="label label-table label-danger">Suspended</span>';
                                        }
                                    }
                                ],
                                [
                                    'attribute' => 'id',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                ],
                                // 'id',
                                'username',
                                'address',
                                'hp',
                            ],
                            'toolbar' => [
                                Html::a('<i class="fas fa-redo"></i> Refresh', ['index'], ['class' => 'btn btn-info']),
                                '{export}',
                                // '{toggleData}'
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