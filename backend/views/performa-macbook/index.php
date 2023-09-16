<?php

use common\models\PerformaMacbook;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var backend\models\PerformaMacbookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Performa Macbooks';
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
                        <h4 class="page-title">Performa MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Panel Performa
                    </li>
                </ol>
            </div>
            <div class="col-sm-9">
                <div class="performa-macbook-index">
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
                                        return Html::a('', ['view', 'id_performa' => $model->id_performa], [
                                            'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                        ]);
                                    },
                                    'update' => function ($url, $model) {

                                        return Html::a('', ['update', 'id_performa' => $model->id_performa], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                    },
                                    'delete' => function ($url, $model) {

                                        return Html::a('', ['delete', 'id_performa' => $model->id_performa], [
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
                            'id_performa',
                            'ram',
                            'vga',
                            'prosesor',
                            'storage',
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
                            'before' => Html::a('<i class="md-add-box"></i> Create Performa', ['create'], ['class' => 'btn btn-success']),
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
                                <h5 class="font-600" style="padding-left: 5px;">Performa Description</h5>
                                <p class="text-muted" style="padding-left: 5px;">Salah satu hal paling sederhana yang dapat dilakukan untuk meningkatkan performa iMac atau MacBook adalah dengan menutup semua aplikasi atau program yang tidak digunakan. Mac Anda mungkin memakan memori dan daya CPU untuk program yang jarang Anda gunakan. Oleh sebab itu, ruang dan beban kerja Mac perlu dibebaskan dari program yang tidak diinginkan yang memperlambat performa.</p>
                                <div class="m-t-30 text-center">
                                    <a href="https://www.kingston.com/id/blog/pc-performance/tips-to-speed-up-mac" target="_blank" class="btn btn-info waves-effect waves-light btn-sm">
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