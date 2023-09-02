<?php

use common\models\JenisProduk;
use common\models\Produk;
use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var backend\models\ProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Produks';
$this->params['breadcrumbs'][] = $this->title;
$totalProduk = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id])->count();
$totalStok = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id])->sum('stock');
$totalJenis = JenisProduk::find()->count(); ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-10">
                    <h6 class="text-dark">
                        <p><i class="fa fa-calendar"></i><span id="tanggalwaktu"></span></p>
                        <script>
                            var tw = new Date();
                            if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                            else(a = tw.getTime());
                            tw.setTime(a);
                            var tahun = tw.getFullYear();
                            var hari = tw.getDay();
                            var bulan = tw.getMonth();
                            var tanggal = tw.getDate();
                            var hariarray = new Array(" Minggu,", " Senin,", " Selasa,", " Rabu,", " Kamis,", " Jum'at,", " Sabtu,");
                            var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                            document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
                        </script>
                    </h6>
                </div>
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Panel MacBook
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-devices text-primary" style="padding-top:30px; padding-bottom:30px; padding-right:20px; padding-left:20px;"></i>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup"><?php echo $totalJenis  ?></span></h2>
                            <div class="text-muted m-t-5">Jenis MacBook</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-add-shopping-cart text-pink" style="padding-top:30px; padding-bottom:30px; padding-right:20px; padding-left:20px;"></i>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup"><?php echo $totalStok ?></span></h2>
                            <div class="text-muted m-t-5">Total Stok</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-laptop-mac text-info" style="padding-top:30px; padding-bottom:30px; padding-right:20px; padding-left:20px;"></i>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup"><?php echo $totalProduk ?></span></h2>
                            <div class="text-muted m-t-5">Total Produk</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="produk-index">
                    <div class="row">
                        <div class="col-sm-8">
                            <?= Html::button('<i class="md-add-box"></i> Add MacBook', ['value' => Url::to(['produk/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
                        </div>
                        <div class="col-sm-4">
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
                                'template' => '{view} {update} {delete}',
                                'header' => 'Action',
                                //'contentOptions' => ['style' => 'max-width:20px;'],
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
                            //['class' => 'yii\grid\SerialColumn'],
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
                            // [
                            //     'attribute' => 'id',
                            //     'contentOptions' => ['style' => 'text-align:center'],
                            //     'headerOptions' => ['class' => 'text-center']
                            // ],
                            [
                                'attribute' => 'nama_produk',
                                'contentOptions' => ['style' => 'text-align:center'],
                                'headerOptions' => ['class' => 'text-center']
                            ],
                            [
                                'attribute' => 'id_jenis',
                                'value' => function ($model) {
                                    return $model->jenis->jenis;
                                },
                                'filter' => ArrayHelper::map(JenisProduk::find()->all(), 'id', 'jenis'),
                                'filterType' => GridView::FILTER_SELECT2,
                                'filterWidgetOptions' => [
                                    'options' => ['prompt' => ''],
                                    'pluginOptions' => [
                                        'allowClear' => false,
                                    ],

                                ],
                                'headerOptions' => ['class' => 'text-center']
                            ],
                            [
                                'class' => 'kartik\grid\EditableColumn',
                                'attribute' => 'harga',
                                'headerOptions' => ['class' => 'text-center']
                            ],
                            [
                                'attribute' => 'tahun_rilis',
                                'contentOptions' => ['style' => 'text-align:center'],
                                'headerOptions' => ['class' => 'text-center']
                            ],
                            [
                                'attribute' => 'stock',
                                'contentOptions' => ['style' => 'text-align:center'],
                                'headerOptions' => ['class' => 'text-center']
                            ],
                            //'id_servicer',
                            //'id_prosesor',
                            //'id_so',
                            //'id_layar',
                            //'id_penyimpanan',
                            //'get_warna',
                            //'get_daya',
                            //'get_nirkabel',
                            //'get_ukuranberat',
                            //'get_kamera',
                            //'get_builtinApps',
                            //'get_audio',
                            //'get_koneksiekspansi',
                            //'get_detaill',
                        ],
                        'toolbar' => [
                            Html::a('Reset ', ['index'], ['class' => 'btn btn-info']),
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
                            //'before' => Html::a('<i class="md-add-box"></i> Add MacBook', ['create'], ['class' => 'btn btn-success']),
                            // 'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                            // 'footer' => false
                        ],
                    ]); ?>
                </div>
            </div>

            <div class="col-sm-12 ">
                <a href="<?= Url::to(['site/index']) ?>" type="button" class="btn btn-default btn-rounded btn-custom waves-effect waves-light pull-right">
                    <span class="btn-label"><i class="fa fa-arrow-left"></i>
                    </span>Back</a>
            </div>
        </div>
    </div>
</div>