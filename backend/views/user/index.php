<?php

use common\models\User;
use kartik\editable\Editable;
use kartik\form\ActiveForm;
use kartik\grid\CheckboxColumn;
use kartik\grid\ActionColumn;
use kartik\grid\EditableColumn;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
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
<html>

<head>
    <style>
        .card {
            width: 100%;
            height: 320px;
            background: white;
            border-radius: 5px;
            padding: 3px;
            position: relative;
            box-shadow: #604b4a30 0px 70px 30px -50px;
            transition: all 0.5s ease-in-out;
        }

        .card .profile-pic {
            position: absolute;
            width: calc(100% - 6px);
            height: calc(100% - 6px);
            top: 3px;
            left: 3px;
            border-radius: 5px;
            z-index: 1;
            border: 0px solid #714ABA;
            overflow: hidden;
            transition: all 0.5s ease-in-out 0.2s, z-index 0.5s ease-in-out 0.2s;
        }

        .card .profile-pic img {
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
            height: 100%;
            -o-object-position: 0px 0px;
            object-position: 0px 0px;
            transition: all 0.5s ease-in-out 0s;
        }

        .card .profile-pic svg {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: 0px 0px;
            object-position: 0px 0px;
            transform-origin: 45% 20%;
            transition: all 0.5s ease-in-out 0s;
        }

        .card .bottom {
            position: absolute;
            bottom: 3px;
            left: 3px;
            right: 3px;
            background: #714ABA;
            top: 100%;
            border-radius: 29px;
            z-index: 2;
            box-shadow: rgba(96, 75, 74, 0.1882352941) 0px 5px 5px 0px inset;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.645, 0.045, 0.355, 1) 0s;
        }

        .card .bottom .content {
            position: absolute;
            bottom: 0;
            left: 1.5rem;
            right: 1.5rem;
            height: 160px;
        }

        .card .bottom .content .name {
            display: block;
            font-size: 1.2rem;
            color: white;
            font-weight: bold;
        }

        .card .bottom .content .about-me {
            display: block;
            font-size: 0.9rem;
            color: white;
            margin-top: 1rem;
        }

        .card .bottom .bottom-bottom {
            position: absolute;
            bottom: 1rem;
            left: 1.5rem;
            right: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card .bottom .bottom-bottom .social-links-container {
            display: flex;
            gap: 1rem;
        }

        .card .bottom .bottom-bottom .social-links-container svg {
            height: 20px;
            fill: white;
            filter: drop-shadow(0 5px 5px rgba(165, 132, 130, 0.1333333333));
        }

        .card .bottom .bottom-bottom .social-links-container svg:hover {
            fill: #714ABA;
            transform: scale(1.2);
        }

        .card .bottom .bottom-bottom .button {
            background: white;
            color: #714ABA;
            border: none;
            border-radius: 20px;
            font-size: 1.4rem;
            padding: 0.4rem 0.6rem;
            box-shadow: rgba(165, 132, 130, 0.1333333333) 0px 5px 5px 0px;
        }

        .card .bottom .bottom-bottom .button:hover {
            background: #714ABA;
            color: white;
        }

        .card:hover {
            border-top-left-radius: 55px;
        }

        .card:hover .bottom {
            top: 20%;
            border-radius: 80px 29px 29px 29px;
            transition: all 0.5s cubic-bezier(0.645, 0.045, 0.355, 1) 0.2s;
        }

        .card:hover .profile-pic {
            width: 100px;
            height: 100px;
            aspect-ratio: 1;
            top: 10px;
            left: 10px;
            border-radius: 50%;
            z-index: 3;
            border: 7px solid #714ABA;
            box-shadow: rgba(96, 75, 74, 0.1882352941) 0px 5px 5px 0px;
            transition: all 0.5s ease-in-out, z-index 0.5s ease-in-out 0.1s;
        }

        .card:hover .profile-pic:hover {
            transform: scale(1.3);
            border-radius: 0px;
        }

        .card:hover .profile-pic img {
            transform: scale(2.5);
            -o-object-position: 0px 25px;
            object-position: 0px 25px;
            transition: all 0.5s ease-in-out 0.5s;
        }

        .card:hover .profile-pic svg {
            transform: scale(2.5);
            transition: all 0.5s ease-in-out 0.5s;
        }
    </style>
</head>

</html>
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
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['user/index']) ?>"><i class="ti-user"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['user/index']) ?>">Admin</a>
                    </li>
                    <li class="active">
                        Index
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if (\Yii::$app->user->can('Administrator')) : ?>
                                <div class="col-sm-2" style="padding-top: 4px; padding-left:0%">
                                    <!-- <?= Html::a('<i class="md-add-box"></i> Add Data', ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?> -->
                                    <!-- <?= Html::button('<i class="md-add-box"></i> Add Admin', ['value' => Url::to(['user/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?> -->
                                </div>
                                <!-- <?php echo $this->render('_search', ['model' => $searchModel]); ?> -->
                            <?php else : ?>
                            <?php endif ?>

                        </div>
                    </div>

                    <div class="user-index">
                        <?php
                        Modal::begin([
                            'header' => 'Create User',
                            'id' => 'modal',
                            'size' => 'modal-lg'
                        ]);
                        echo "<div id = 'modalContent'></div>";
                        Modal::end();
                        ?>
                        <?php if (\Yii::$app->user->can('Administrator')) : ?>
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
                                'columns' => [
                                    [
                                        'class' => '\kartik\grid\ActionColumn',
                                        'template' => '{view} {update} ',
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
                                        'attribute' =>    'username',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search by ID...',
                                        ],
                                    ],

                                    // [
                                    //     'class' => 'kartik\grid\EditableColumn',
                                    //     'headerOptions' => ['class' => 'text-center'],
                                    //    'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                    //     'attribute' => 'status',
                                    //     'format' => 'raw',
                                    //     'label' => 'Status',
                                    //     'filterType' => GridView::FILTER_SELECT2,
                                    //     'filter'    => [10 => "Active", 9 => "Suspended"],
                                    //     'editableOptions' => [
                                    //         'inputType' => Editable::INPUT_DROPDOWN_LIST,
                                    //         'data' => [10 => 'Active', 9 => 'Suspended'],
                                    //         'displayValueConfig' => [
                                    //             10 => 'Active',
                                    //             9 => 'Suspended',
                                    //         ],
                                    //     ],
                                    //     'value' => function ($data, $key, $index, $column) {
                                    //         if ($data->status == 10) {
                                    //             return '<span class="label label-table label-success">Active</span>';
                                    //         } else {
                                    //             return '<span class="label label-table label-danger">Suspended</span>';
                                    //         }
                                    //     },
                                    // ],
                                    [
                                        'attribute' => 'role',
                                        'label' => 'Akses',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search Akses...',
                                        ],
                                    ],
                                    [
                                        'attribute' =>     'id',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search ID...',
                                        ],
                                    ],
                                    // [
                                    //     'attribute' =>   'id',
                                    //     'headerOptions' => ['class' => 'text-center'],
                                    //    'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                    // ],

                                    // [
                                    //     'attribute' =>     'address',
                                    //     'headerOptions' => ['class' => 'text-center'],
                                    //    'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                    // ],
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
                                    Html::a('<i class="fas fa-redo"></i> go to Access', ['auth-assignment/index'], ['class' => 'btn btn-info']),
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
                                    //'before' => Html::a('<i class="md-add-box"></i> Create Admin', ['create'], ['class' => 'btn btn-success']),
                                    // 'after' => Html::a('<i class="fas fa-redo"></i> go to Access', ['auth-assignment/index'], ['class' => 'btn btn-info']),
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
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'attribute' => 'status',
                                        'format' => 'raw',
                                        'filter'    => [9 => "Active", 10 => "Suspended"],
                                        'value' => function ($data, $key, $index, $column) {
                                            if ($data->status == 9) {
                                                return '<span class="label label-table label-success">Active</span>';
                                            } else {
                                                return '<span class="label label-table label-danger">Suspended</span>';
                                            }
                                        }
                                    ],
                                    // [
                                    //     'attribute' => 'id',
                                    //     'headerOptions' => ['class' => 'text-center'],
                                    //    'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                    // ],
                                    // 'id',
                                    [
                                        'attribute' =>    'username',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                    ],
                                    [
                                        'attribute' =>     'address',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                    ],
                                    [
                                        'attribute' =>      'hp',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                    ],

                                ],
                                'toolbar' => [
                                    Html::a('<i class="ion-load-a"></i>', ['index'], ['class' => 'btn btn-default']),
                                    // '{export}',
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
</div>