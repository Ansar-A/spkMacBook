<?php

use common\models\DataSpk;
use common\models\DetailProduk;
use common\models\KetahananMacbook;
use common\models\KeamananMacbook;
use common\models\KondisiMacbook;
use common\models\PerformaMacbook;

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\DetailProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$totalDetail = DetailProduk::find()->count();
$maxSpk = DataSpk::find()->count('id_spk');
$maxKetahanan = KetahananMacbook::find()->count('id_ketahanan');
$maxKeamanan = KeamananMacbook::find()->count('id_keamanan');
$maxKondisi = KondisiMacbook::find()->count('id_kondisi');
$maxPerforma = PerformaMacbook::find()->count('id_performa');
$this->title = 'Detail Produks';
$this->params['breadcrumbs'][] = $this->title;
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
                <div class="btn-group pull-right m-t-15">
                    <!-- <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button> -->
                    <ul class="dropdown-menu drop-menu-right" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Detail Produk</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Panel Detail Produk
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mini-stat clearfix card-box">
                            <span class="mini-stat-icon bg-custom"><i class="fa fa-pie-chart text-white"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span class="counter text-dark" data-plugin="counterup"><?php echo $totalDetail ?></span>
                                Total
                            </div>
                            <div class="tiles-progress">
                                <div class="m-t-20">
                                    <h5 class="text-uppercase">Detail</h5>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mini-stat clearfix card-box">
                            <span class="mini-stat-icon bg-info"><i class="fa fa-wpforms text-white"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span class="counter text-dark" data-plugin="counterup"><?php echo $maxSpk ?></span>
                                Total
                            </div>
                            <div class="tiles-progress">
                                <div class="m-t-20">
                                    <h5 class="text-uppercase">Spk</h5>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-produk-index">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); 
                    ?>
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
                                'template' => '{view} {update} {delete}',
                                'header' => 'Action',
                                'buttons' => [
                                    'class' => 'btn btn-primary dropdown-toggle',
                                    'view' => function ($url, $model) {
                                        return Html::a('', ['view', 'id_detail' => $model->id_detail], [
                                            'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                        ]);
                                    },
                                    'update' => function ($url, $model) {

                                        return Html::a('', ['update', 'id_detail' => $model->id_detail], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                    },
                                    'delete' => function ($url, $model) {

                                        return Html::a('', ['delete', 'id_detail' => $model->id_detail], [
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
                            'id_detail',
                            //'ketahanan',
                            // [
                            //     'header' => 'Baterai',
                            //     'attribute' => 'ketahanan',
                            //     'value' => function ($model) {
                            //         return $model->ketahanan0->baterai;
                            //     },
                            // ],
                            //'performa',
                            // [
                            //     'header' => 'RAM',
                            //     'attribute' =>  'performa',
                            //     'value' => function ($model) {
                            //         return $model->performa0->ram;
                            //     },
                            // ],
                            //'kondisi',
                            // [
                            //     'header' => 'Kondisi Layar',
                            //     'attribute' =>  'kondisi',
                            //     'value' => function ($model) {
                            //         return $model->kondisi0->kondisi_layar;
                            //     },
                            // ],
                            //'keamanan',
                            // [
                            //     'header' => 'Garansi',
                            //     'attribute' =>  'keamanan',
                            //     'value' => function ($model) {
                            //         return $model->keamanan0->garansi;
                            //     },
                            // ],
                            //'get_spk',
                            [
                                'header' => 'Data F',
                                'attribute' =>  'get_spk',
                                'value' => function ($model) {
                                    return $model->spk->dataF;
                                },
                            ],
                            [
                                'header' => 'Data T',
                                'attribute' =>  'get_spk',
                                'value' => function ($model) {
                                    return $model->spk->dataT;
                                },
                            ],
                            [
                                'header' => 'R',
                                'attribute' =>  'get_spk',
                                'value' => function ($model) {
                                    return $model->spk->rSquare;
                                },
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
                            'before' => Html::a('<i class="md-add-box"></i> Add Data', ['create'], ['class' => 'btn btn-success']),
                            // 'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                            // 'footer' => false
                        ],
                    ]); ?>
                </div>
            </div>
            <!-- <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="mini-stat clearfix card-box">
                    <span class="mini-stat-icon bg-inverse"><i class="fa fa-hourglass-start text-white"></i></span>
                    <div class="mini-stat-info text-right text-dark">
                        <span class="counter text-dark" data-plugin="counterup"><?php echo $maxPerforma ?></span>
                        Total
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            <h5 class="text-uppercase">Performa</h5>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="mini-stat clearfix card-box">
                    <span class="mini-stat-icon bg-warning"><i class="fa fa-gg-circle text-white"></i></span>
                    <div class="mini-stat-info text-right text-dark">
                        <span class="counter text-dark" data-plugin="counterup"><?php echo $maxKetahanan ?></span>
                        Total
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            <h5 class="text-uppercase">Ketahanan</h5>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="mini-stat clearfix card-box">
                    <span class="mini-stat-icon bg-pink"><i class="fa fa-bug text-white"></i></span>
                    <div class="mini-stat-info text-right text-dark">
                        <span class="counter text-dark" data-plugin="counterup"><?php echo $maxKeamanan ?></span>
                        Total
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            <h5 class="text-uppercase">Keamanan</h5>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-pink" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 100%">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="mini-stat clearfix card-box">
                    <span class="mini-stat-icon bg-primary"><i class="fa fa-cogs text-white"></i></span>
                    <div class="mini-stat-info text-right text-dark">
                        <span class="counter text-dark" data-plugin="counterup"><?php echo $maxKondisi ?></span>
                        Total
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            <h5 class="text-uppercase">Kondisi</h5>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>