<?php

use common\models\LikeProduk;
use common\models\Pengguna;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\LikeProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$totalPengguna = Pengguna::find()->count();
$totalLike = LikeProduk::find()->count();
$this->title = 'Like Produks';
$this->params['breadcrumbs'][] = $this->title;
$totalLike = LikeProduk::find()->count();
?>
<html>

<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body .container .card {
            position: relative;
            /* min-width: 320px; */
            height: 200px;
            box-shadow: inset 1px 1px 1px rgba(0, 0, 0, 0.2),
                inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            margin-bottom: 10px;
            transition: 0.5s;
            width: 100%;
        }

        body .container .card:nth-child(1) .box .content a {
            background: #2196f3;
        }

        body .container .card:nth-child(2) .box .content a {
            background: #e91e63;
        }

        body .container .card:nth-child(3) .box .content a {
            background: #23c186;
        }

        body .container .card .box {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: #515E92;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: 0.5s;
        }

        body .container .card .box:hover {
            transform: translateY(-50px);
        }

        body .container .card .box:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: rgba(255, 255, 255, 0.03);
        }

        body .container .card .box .content {
            padding: 20px;
            text-align: center;
        }

        body .container .card .box .content h2 {
            position: absolute;
            top: -10px;
            right: 30px;
            font-size: 8rem;
            color: rgba(255, 255, 255, 0.1);
            padding-top: 20px;
        }

        body .container .card .box .content h3 {
            font-size: 1.8rem;
            color: #fff;
            z-index: 1;
            transition: 0.5s;
            margin-bottom: 15px;
        }

        body .container .card .box .content p {
            font-size: 1rem;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.9);
            z-index: 1;
            transition: 0.5s;
        }

        body .container .card .box .content a {
            position: relative;
            display: inline-block;
            padding: 8px 20px;
            background: black;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            margin-top: 0px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
        }

        body .container .card .box .content a:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
            background: #fff;
            color: #000;
        }

        .e-card {
            margin: 100px auto;
            background: transparent;
            box-shadow: 0px 8px 28px -9px rgba(0, 0, 0, 0.45);
            position: relative;
            width: 100%;
            height: 409px;
            border-radius: 5px;
            overflow: hidden;
        }

        .wave {
            position: absolute;
            width: 540px;
            height: 700px;
            opacity: 0.6;
            left: 0;
            top: 0;
            margin-left: -50%;
            margin-top: -70%;
            background: linear-gradient(744deg, #af40ff, #5b42f3 60%, #00ddeb);
        }

        .icon {
            width: 3em;
            margin-top: -1em;
            padding-bottom: 1em;
        }

        .infotop {
            text-align: center;
            font-size: 20px;
            position: absolute;
            top: 5.6em;
            left: 0;
            right: 0;
            color: rgb(255, 255, 255);
            font-weight: 600;
        }

        .name {
            font-size: 14px;
            font-weight: 100;
            position: relative;
            top: 1em;
            text-transform: lowercase;
        }

        .wave:nth-child(2),
        .wave:nth-child(3) {
            top: 210px;
        }

        .playing .wave {
            border-radius: 40%;
            animation: wave 3000ms infinite linear;
        }

        .wave {
            border-radius: 40%;
            animation: wave 55s infinite linear;
        }

        .playing .wave:nth-child(2) {
            animation-duration: 4000ms;
        }

        .wave:nth-child(2) {
            animation-duration: 50s;
        }

        .playing .wave:nth-child(3) {
            animation-duration: 5000ms;
        }

        .wave:nth-child(3) {
            animation-duration: 45s;
        }

        @keyframes wave {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

</html>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['like-produk/index']) ?>"><i class="icon-people"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['like-produk/index']) ?>">Like Produk</a>
                    </li>
                    <li class="active">
                        Index
                    </li>
                </ol>
            </div>
            <!-- <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="fa fa-heart text-pink"></i>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup"><?php echo $totalLike ?></span></h2>
                            <div class="text-muted m-t-5">Like</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-8">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-account-child text-custom"></i>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup"><?php echo $totalPengguna ?></span></h2>
                            <div class="text-muted m-t-5">Pengguna</div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-sm-9">
                <div class="like-produk-index">
                    <!-- <div class="row">
                                <div class="col-sm-12">
                                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                                </div>
                            </div> -->
                    <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
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
                                // 'id',
                                [
                                    'attribute' => 'produk_id',
                                    'header' => 'ID Produk',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'value' => function ($model) {
                                        return $model->kelayakan->produk->id;
                                    }
                                ],
                                [
                                    'attribute' => 'produk_id',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'value' => function ($model) {
                                        return $model->kelayakan->produk->nama_produk;
                                    }
                                ],
                                [
                                    'attribute' =>  'user_id',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'value' => function ($model) {
                                        return $model->pengguna->username;
                                    }
                                ],
                                [
                                    'attribute' =>  'created_at',
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
                                    'template' => '{view}',
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
                                // 'id',
                                [
                                    'attribute' => 'produk_id',
                                    'header' => 'ID Produk',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'value' => function ($model) {
                                        return $model->kelayakan->produk->id;
                                    }
                                ],
                                [
                                    'attribute' => 'produk_id',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'value' => function ($model) {
                                        return $model->kelayakan->produk->nama_produk;
                                    }
                                ],
                                [
                                    'attribute' =>  'user_id',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'value' => function ($model) {
                                        return $model->pengguna->username;
                                    }
                                ],
                                [
                                    'attribute' =>  'created_at',
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
                    <?php endif ?>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12" style="padding-bottom: 10px;">
                        <div class="card">
                            <div class="box">
                                <div class="content">
                                    <h2><?php echo $totalLike ?></h2>
                                    <h3>Like</h3>
                                    <p>Jumlah total produk yang disukai pengguna</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="box">
                                <div class="content">
                                    <h2><?php echo $totalPengguna ?></h2>
                                    <h3>Pengguna</h3>
                                    <p>Jumlah total pengguna pada aplikasi</p>
                                    <a style="height: 30px; padding-top:5px" href="<?= Url::to(['pengguna/index']) ?>">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>