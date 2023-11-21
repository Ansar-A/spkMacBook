<?php

use common\models\Produk;
use common\models\SpkKelayakan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use common\models\User;

/** @var yii\web\View $this */
/** @var backend\models\SpkKelayakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$totalServicer = User::find()->count();
$totalProduk = SpkKelayakan::find()->count();
$this->title = 'Spk Kelayakans';
$this->params['breadcrumbs'][] = $this->title;
if (\Yii::$app->user->can('SuperAdmin')) {
    $totalProduk = SpkKelayakan::find()->count();
} else {
    $totalProduk = SpkKelayakan::find()->where(['id_servicer' => Yii::$app->user->identity->id])->count();
}
?>
<html>

<head>
    <style>
        .e-card {
            /* margin: 100px auto; */
            background: transparent;
            box-shadow: 0px 8px 28px -9px rgba(0, 0, 0, 0.45);
            position: relative;
            width: 100%px;
            margin-top: 10px;
            height: 350px;
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
            top: 3.8em;
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

        .card {
            height: 157px;
            width: 230px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
            border-radius: 5px;
            box-shadow: 0 0 20px 8px #DBDBDBBB;
            overflow: hidden;
        }

        /*Image*/
        .card-image {
            height: 100%;
            width: 100%;
            position: absolute;
            transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
            background: #0a3394;
            background: linear-gradient(to top, #0a3394, #714ABA);
        }

        /*Description */
        .card-description {
            display: flex;
            position: absolute;
            gap: .5em;
            flex-direction: column;
            background-color: #FFFFFF;
            color: #212121;
            height: 100%;
            bottom: 0;
            border-radius: 5px;
            transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
            padding: 1rem;
        }

        /*Text*/
        .text-title {
            font-size: 1.3rem;
            font-weight: 700;
        }

        .text-body {
            font-size: 1rem;
            line-height: 130%;
        }


        /* Hover states */
        .card:hover .card-description {
            transform: translateY(100%);
        }
    </style>
</head>

</html>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if (Yii::$app->session->hasFlash('error')) : ?>
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i>Access!</h4>
                        <?= Yii::$app->session->getFlash('success') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['spk-kelayakan/index']) ?>">SPK Kelayakan</a>
                    </li>
                    <li class="active">
                        Index
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="spk-kelayakan-index">
                        <p class="text-right">
                            <!-- <div class="row">
                            <div class="col-sm-5 pull-right">
                                <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                            </div>
                        </div> -->
                            <!-- <?= Html::a('Add Data', ['create'], ['class' => 'btn btn-success']) ?> -->
                        </p>
                        <p></p>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            //'responsive' => true,
                            'headerRowOptions' => ['class' => 'table m-0'],
                            'filterRowOptions' => ['class' => 'table m-0'],
                            'striped' => false,
                            'hover' => true,
                            'resizableColumns' => true,
                            'persistResize' => true,
                            'floatHeader' => true,
                            //'bootstrap' => true,
                            //'bordered' => false,
                            //'condensed' => false,
                            //'responsiveWrap' => false,
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
                                    'template' => '{view}',
                                    'header' => 'Action',
                                    //'contentOptions' => ['style' => 'max-width:20px;'],
                                    'buttons' => [
                                        'class' => 'btn btn-primary dropdown-toggle',
                                        'view' => function ($url, $model) {
                                            return Html::a('', ['view', 'id_kelayakan' => $model->id_kelayakan], [
                                                'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                            ]);
                                        },
                                        'update' => function ($url, $model) {

                                            return Html::a('', ['update', 'id_kelayakan' => $model->id_kelayakan], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                        },
                                        'delete' => function ($url, $model) {

                                            return Html::a('', ['delete', 'id_kelayakan' => $model->id_kelayakan], [
                                                'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                                'data' => [
                                                    'confirm' => 'Yakin ingin menghapus item ini?',
                                                    'method' => 'post',
                                                ],
                                            ]);
                                        },
                                    ],
                                ],
                                //['class' => 'yii\grid\SerialColumn'],

                                // [
                                //     'attribute' =>  'id_kelayakan',
                                //     'label'  => 'ID',
                                //     'contentOptions' => ['style' => 'text-align:center'],
                                //     'headerOptions' => ['class' => 'text-center'],
                                //     'filterInputOptions' => [
                                //         'class'       => 'form-control',
                                //         'placeholder' => 'Search...',
                                //     ],
                                // ],
                                [
                                    'attribute' =>  'produk.id',
                                    'label'  => 'ID Produk',
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'headerOptions' => ['class' => 'text-center'],
                                    'filterInputOptions' => [
                                        'class'       => 'form-control',
                                        'placeholder' => 'Search...',
                                    ],
                                ],
                                [
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'headerOptions' => ['class' => 'text-center'],
                                    'attribute' => 'produk.nama_produk',
                                    'label'  => 'Produk',
                                    'filterInputOptions' => [
                                        'class'       => 'form-control',
                                        'placeholder' => 'Search Produk...',
                                    ],
                                    // 'value' => function ($model) {
                                    //     return $model->produk->nama_produk;
                                    // },

                                ],
                                [
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'headerOptions' => ['class' => 'text-center'],
                                    'attribute' => 'dataR',
                                    'label' => 'R Square',
                                    'filterInputOptions' => [
                                        'class'       => 'form-control',
                                        'placeholder' => 'Search...',
                                    ],
                                ],
                                [
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'headerOptions' => ['class' => 'text-center'],
                                    'attribute' => 'Rsquare',
                                    // 'format' => ['formattedNilaiFloat', 2],
                                    'label' => 'Adjusted R Square',
                                    'filterInputOptions' => [
                                        'class'       => 'form-control',
                                        'placeholder' => 'Search...',
                                    ],
                                ],
                                [
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'headerOptions' => ['class' => 'text-center'],
                                    'attribute' => 'dataF',
                                    'label' => 'F',
                                    'filterInputOptions' => [
                                        'class'       => 'form-control',
                                        'placeholder' => 'Search...',
                                    ],
                                ],
                                // [
                                //     'attribute' => 'kode_produk',
                                //     'label' => 'Kode Produk'
                                // ],


                            ],
                            'toolbar' => [
                                Html::a('<i class="md-add-box"></i> Add Data', ['create'], ['class' => 'btn btn-success']),
                                Html::a('<i class="ion-load-a"></i>', ['index'], ['class' => 'btn btn-default']),
                                '{export}',
                                '{toggleData}',
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

                            ],
                            'panel' => [
                                'heading' => false,
                                //'heading' => '<div class="portlet-heading portlet-default"><i class="md-folder-shared"></i></div>',
                                'type' => 'default',
                                // 'before' => Html::a('<i class="md-add-box"></i> Add SPK', ['create'], ['class' => 'btn btn-primary waves-effect waves-light']),
                                'before' => Html::a('<i class="glyphicon glyphicon-import"></i> Import', ['upload'], ['class' => 'btn btn-primary waves-effect waves-light']),
                                // 'after' => Html::a('<i class="fas fa-redo"></i> Info Adjusted R Square', ['index'], ['class' => 'btn btn-info']),
                                // 'footer' => false
                            ],
                        ]); ?>
                    </div>
                </div>
                <!-- <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-image">
                                    <p style="color: #FFFFFF; font-size:50px; padding-left:100px; padding-top: 40px"><?php echo $totalServicer ?></p>
                                </div>
                                <div class="card-description">
                                    <p class="text-title" style="font-size: medium; padding-left:10px"> Admin</p>
                                    <p class="text-body" style="font-size: small; color:#707173BE; padding-left:10px; padding-right:2px">Total Admin yang aktif pada Aplikasi Sistem Pendukung Keputusan MacBook bekas</p>
                                    <p class="text-body" style="font-size: small; color:#707173BE; padding-left:10px; padding-right:2px">click here</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-image">
                                    <p style="color: #FFFFFF; font-size:50px; padding-left:100px; padding-top: 40px"><?php echo $totalProduk ?></p>
                                </div>
                                <div class="card-description">
                                    <p class="text-title" style="font-size: medium; padding-left:10px"> Produk</p>
                                    <p class="text-body" style="font-size: small;  color:#707173BE; padding-left:10px; padding-right:2px">Total MacBook bekas yang telah diakumulasi menggunakan metode Regresi Linear</p>
                                    <p class="text-body" style="font-size: small; color:#707173BE; padding-left:10px; padding-right:2px">click here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-sm-3">
                    <div class="e-card playing">
                        <div class="image"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="infotop">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="icon">
                                <path fill="currentColor" d="M19.4133 4.89862L14.5863 2.17544C12.9911 1.27485 11.0089 1.27485 9.41368 2.17544L4.58674
  4.89862C2.99153 5.7992 2 7.47596 2 9.2763V14.7235C2 16.5238 2.99153 18.2014 4.58674 19.1012L9.41368
  21.8252C10.2079 22.2734 11.105 22.5 12.0046 22.5C12.6952 22.5 13.3874 22.3657 14.0349 22.0954C14.2204
  22.018 14.4059 21.9273 14.5872 21.8252L19.4141 19.1012C19.9765 18.7831 20.4655 18.3728 20.8651
  17.8825C21.597 16.9894 22 15.8671 22 14.7243V9.27713C22 7.47678 21.0085 5.7992 19.4133 4.89862ZM4.10784
  14.7235V9.2763C4.10784 8.20928 4.6955 7.21559 5.64066 6.68166L10.4676 3.95848C10.9398 3.69152 11.4701
  3.55804 11.9996 3.55804C12.5291 3.55804 13.0594 3.69152 13.5324 3.95848L18.3593 6.68166C19.3045 7.21476
  19.8922 8.20928 19.8922 9.2763V9.75997C19.1426 9.60836 18.377 9.53091 17.6022 9.53091C14.7929 9.53091
  12.1041 10.5501 10.0309 12.3999C8.36735 13.8847 7.21142 15.8012 6.68783 17.9081L5.63981 17.3165C4.69466
  16.7834 4.10699 15.7897 4.10699 14.7235H4.10784ZM10.4676 20.0413L8.60933 18.9924C8.94996 17.0479 9.94402
  15.2665 11.4515 13.921C13.1353 12.4181 15.3198 11.5908 17.6022 11.5908C18.3804 11.5908 19.1477 11.6864
  19.8922 11.8742V14.7235C19.8922 15.2278 19.7589 15.7254 19.5119 16.1662C18.7615 15.3596 17.6806 14.8528
   16.4783 14.8528C14.2136 14.8528 12.3781 16.6466 12.3781 18.8598C12.3781 19.3937 12.4861 19.9021 12.68
   20.3676C11.9347 20.5316 11.1396 20.4203 10.4684 20.0413H10.4676Z">
                                </path>
                            </svg>
                            <br>
                            <h1 style="color: #FFFFFF;"><?php echo $totalProduk ?></h1>
                            <br>
                            <h5 style="color: #FFFFFF;">Total Produk</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>