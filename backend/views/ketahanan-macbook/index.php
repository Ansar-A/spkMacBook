<?php

use common\models\KetahananMacbook;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var backend\models\KetahananMacbookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ketahanan Macbooks';
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
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Ketahanan MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Panel Ketahanan
                    </li>
                </ol>
            </div>
            <div class="col-sm-9">
                <div class="ketahanan-macbook-index">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); 
                    ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
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
                                'template' => '{view} {update} {delete}',
                                'header' => 'Action',
                                'buttons' => [
                                    'class' => 'btn btn-primary dropdown-toggle',
                                    'view' => function ($url, $model) {
                                        return Html::a('', ['view', 'id_ketahanan' => $model->id_ketahanan], [
                                            'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                        ]);
                                    },
                                    'update' => function ($url, $model) {

                                        return Html::a('', ['update', 'id_ketahanan' => $model->id_ketahanan], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                    },
                                    'delete' => function ($url, $model) {

                                        return Html::a('', ['delete', 'id_ketahanan' => $model->id_ketahanan], [
                                            'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                            'data' => [
                                                'confirm' => 'Yakin ingin menghapus item ini?',
                                                'method' => 'post',
                                            ],
                                        ]);
                                    },
                                ],
                            ],

                            'id_ketahanan',
                            'baterai',
                            'kapasitas_pengisian',
                            [
                                'headerOptions' => ['class' => 'text-center'],
                                'contentOptions' => ['style' => 'text-align:center'],
                                'attribute' => 'ket',
                                'format' => 'raw',
                                'filter'    => ['Normal' => "Normal", 'Replace Soon' => "Replace Soon"],
                                'value' => function ($data, $key, $index, $column) {
                                    if ($data->ket == 'Normal') {
                                        return '<span class="label label-table label-success">Normal</span>';
                                    } else {
                                        return '<span class="label label-table label-danger">Replace Soon</span>';
                                    }
                                }

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
            <div class="col-sm-3">
                <div class="card-box product-detail-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product-right-info">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6><span class="label label-info m-l-5">New</span><b> Information</b></h6>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="font-600" style="padding-left: 5px;">Ketahanan Description</h5>
                                <p class="text-muted" style="padding-left: 5px;">Bicara performa, laptop ini sudah sangat sering saya pakai untuk edit video dengan kompleksitas tinggi yang membutuhkan rendering berjam-jam, mengedit desain produk dan bangunan dalam 3D, coding, membuat musik, dan beberapa pekerjaan berat lainnya yang mungkin orang lain akan berpikir "apa kuat macbook air buat jalanin itu?".</p>
                                <div class="m-t-30 text-center">
                                    <a href="https://id.quora.com/Berapa-lama-ketahanan-MacBook-Jika-saya-ingin-membeli-laptop-yang-bertahan-7-hingga-10-tahun-apa-saran-laptop-yang-bagus-baik-Windows-maupun-Apple" target="_blank" class="btn btn-info waves-effect waves-light btn-sm">
                                        <span class="btn-label"><i class="fa fa-info"></i>
                                        </span>More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>