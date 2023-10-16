<?php

use common\models\SpkKelayakan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SpkKelayakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Spk Kelayakans';
$this->params['breadcrumbs'][] = $this->title;
?>
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
                        Panel SPK Kelayakan
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="spk-kelayakan-index">
                    <!-- <p>
                            <?= Html::a('Add Data', ['create'], ['class' => 'btn btn-success']) ?>
                        </p> -->

                    <?php // echo $this->render('_search', ['model' => $searchModel]); 
                    ?>
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
                            //'id_kelayakan',
                            [
                                'contentOptions' => ['style' => 'text-align:center'],
                                'headerOptions' => ['class' => 'text-center'],
                                'attribute' => 'get_produk',
                                'value' => function ($model) {
                                    return $model->produk->nama_produk;
                                },

                            ],
                            'dataRKetahanan',
                            'dataRKeamanan',
                            'dataRKondisi',
                            'dataRPerforma',
                            'kode_produk'
                            //'RsquareKetahanan',
                            //'RsquareKeamanan',
                            //'RsquareKondisi',
                            //'RsquarePerforma',
                            //'dataFKetahanan',
                            //'dataFKeamanan',
                            //'dataFKondisi',
                            //'dataFPerforma',
                            //'T_cicleCount',
                            //'T_kapasitasPengisian',
                            //'T_noSeri',
                            //'T_garansi',
                            //'T_ram',
                            //'T_vga',
                            //'T_presesor',
                            //'T_storage',
                            //'T_layar',
                            //'T_keyboard',
                            //'T_tracpad',
                            //'T_audio',
                            //'T_kamera',
                            //'T_koneksi',
                            //'T_port',
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
                            'before' => Html::a('<i class="md-add-box"></i> Add Data', ['create'], ['class' => 'btn btn-success']),
                            // 'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                            // 'footer' => false
                        ],
                    ]); ?>

                </div>
            </div>
        </div>
    </div>
</div>