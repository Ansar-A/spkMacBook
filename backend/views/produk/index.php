<?php

use common\models\JenisProduk;
use common\models\LikeProduk;
use common\models\Pengguna;
use common\models\Produk;
use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii2mod\alert\AlertAsset;
use kartik\editable\Editable;
// use yii\widgets\GridView;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var backend\models\ProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
AlertAsset::register($this);
$this->title = 'Produks';
$this->params['breadcrumbs'][] = $this->title;

$totalServicer = User::find()->count();
$totalJenis = JenisProduk::find()->count();
$totalun = Produk::find()->where('status_produk' == 'Unprocessed')->count();


if (\Yii::$app->user->can('Administrator')) {
    $totalProduk = Produk::find()->count();
    $totalPengguna = Pengguna::find()->count();
} else {
    $totalProduk = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id])->count();
    $totalPengguna = LikeProduk::find()->joinWith('kelayakan.produk.user')->where(['id_servicer' => Yii::$app->user->identity->id])->count();
}

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
                    <?= Html::button('<i class="fa fa-info"></i> Info', ['value' => Url::to(['produk/modal']), 'class' => 'btn btn-primary waves-effect waves-light', 'id' => 'modalButton']) ?>
                </div>
                <h4 class="page-title">Panel MacBook</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['produk/index']) ?>"><i class="ti-apple"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['produk/index']) ?>">Data MacBook</a>
                    </li>
                    <li class="active">
                        Index
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="widget-panel widget-style-2 bg-white"><i class="md md-assessment text-info"></i>
                        <h2 class="m-0 text-dark counter font-800"><b><?php echo $totalProduk ?></b></h2>
                        <div class="text-muted m-t-5">Total Produk MacBook</div>
                    </div>
                </div>
                <?php if (\Yii::$app->user->can('Administrator')) : ?>
                    <div class="col-sm-4">
                        <div class="widget-panel widget-style-2 bg-white"><i class="md md-person text-success"></i>
                            <h2 class=" m-0 text-dark counter font-800"><b><?php echo $totalPengguna ?></b></h2>
                            <div class="text-muted m-t-5">User Website</div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="col-sm-4">
                        <div class="widget-panel widget-style-2 bg-white"><i class="md md-person text-success"></i>
                            <h2 class=" m-0 text-dark counter font-800"><b><?php echo $totalPengguna ?></b></h2>
                            <div class="text-muted m-t-5">Like Produk</div>
                        </div>
                    </div>
                <?php endif ?>
                <div class="col-sm-4">
                    <div class="widget-panel widget-style-2 bg-white"><i class="md md-person text-success"></i>
                        <h2 class=" m-0 text-dark counter font-800"><b><?php echo $totalun ?></b></h2>
                        <div class="text-muted m-t-5">Unproses</div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="produk-index">
                        <?php if (\Yii::$app->user->can('Administrator')) : ?>
                            <div class="row">
                                <!-- <div class=" col-sm-6">
                                    <?= Html::button('<i class="md-add-box"></i> Add MacBook', ['value' => Url::to(['produk/create']), 'class' => 'btn btn-primary waves-effect waves-light', 'id' => 'modalButton']) ?>
                                </div> -->
                                <div class="col-sm-6">
                                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
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
                            </div>
                        <?php else : ?>
                        <?php endif ?>
                        <p></p>
                        <?php if (\Yii::$app->user->can('Administrator')) : ?>
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                // 'filterModel' => $searchModel,
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
                                        'template' => '{view} {update}',
                                        'header' => 'Action',
                                        //'contentOptions' => ['style' => 'max-width:20px;'],
                                        'buttons' => [
                                            // 'class' => 'btn btn-primary dropdown-toggle',
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
                                                        'confirm' => 'Apakah Anda yakin ingin menghapus item ini?',
                                                        'method' => 'post',
                                                    ],
                                                ]);
                                            },
                                        ],
                                    ],
                                    //['class' => 'yii\grid\SerialColumn'],
                                    [
                                        'header' => 'Photo',
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            return '<center>' . Html::img('@web/' . $model->photo, ['style' => 'heigth: 50px; width:50px;', 'class' => 'img-responsive img-rounded']) . '</center>';
                                        }
                                    ],
                                    [
                                        'header' => 'Toko',
                                        'label' => '',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search ID ...',
                                        ],
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'attribute' => 'id_servicer',
                                        'value' => function ($model) {
                                            return $model->user->username;
                                        }
                                    ],
                                    [
                                        'header' => 'Produk',
                                        'label' => '',
                                        'attribute' => 'nama_produk',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search name...',
                                        ],
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center']
                                    ],
                                    [
                                        'class' => 'kartik\grid\EditableColumn',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'attribute' => 'status_produk',
                                        'format' => 'raw',
                                        'label' => 'Status',
                                        'filterType' => GridView::FILTER_SELECT2,
                                        'filter' => ['not' => "Not Received", 'finish' => "Finish"],
                                        'editableOptions' => [
                                            'inputType' => Editable::INPUT_DROPDOWN_LIST,
                                            'data' => ['Finish' => 'Finish', 'Unprocessed' => 'Unprocessed'],
                                            'displayValueConfig' => [
                                                'finish' => 'Finish',
                                                'not' => 'Not Received',
                                            ],
                                        ],
                                        'value' => function ($data, $key, $index, $column) {
                                            if ($data->status_produk == 'Finish') {
                                                return '<span class="label label-table label-success">Finish</span>';
                                            } elseif ($data->status_produk == 'Unprocessed') {
                                                return '<span class="label label-table label-danger">Unprocessed</span>';
                                            }
                                        },
                                    ],
                                    [
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'attribute' => 'role',
                                        'format' => 'raw',
                                        'label' => 'Role User',
                                        'filter'    => ['Administrator' => "Administrator", 'Toko' => "Toko", 'Personal' => 'Personal'],
                                        'value' => function ($data, $key, $index, $column) {
                                            if ($data->user->role == 'Administrator') {
                                                return '<span class="label label-table label-success">Administrator</span>';
                                            } elseif ($data->user->role == 'Toko') {
                                                return '<span class="label label-table label-default">Toko</span>';
                                            } elseif ($data->user->role == 'Personal') {
                                                return '<span class="label label-table label-warning">Personal</span>';
                                            }
                                        },
                                    ],
                                    [
                                        'header' => 'Created',
                                        'label' => ' ',
                                        'attribute' =>  'created_at',
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center'],
                                    ],
                                    [
                                        'header' => 'ID Mac',
                                        'label' => '',
                                        'attribute' => 'id',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search price...',
                                        ],
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center']
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
                                    // 'before' => Html::a('<i class="md-add-box"></i> Add MacBook', ['create'], ['class' => 'btn btn-primary waves-effect waves-light']),
                                    //'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                                    // 'footer' => false
                                ],
                            ]); ?>
                        <?php else : ?>
                            <?= GridView::widget([
                                'filterModel' => $searchModel,
                                'dataProvider' => $dataProvider,
                                'headerRowOptions' => ['class' => 'table m-0'],
                                'filterRowOptions' => ['class' => 'table m-0'],
                                'striped' => false,
                                'hover' => true,
                                'resizableColumns' => true,
                                'persistResize' => true,
                                'floatHeader' => true,
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
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            return '<center>' . Html::img('@web/' . $model->photo, ['style' => 'heigth: 50px; width:50px;', 'class' => 'img-responsive img-rounded']) . '</center>';
                                        }
                                    ],

                                    [
                                        'attribute' => 'nama_produk',
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],
                                    [
                                        'attribute' => 'id_prosesor',
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],
                                    // [
                                    //     'attribute' => 'id_so',
                                    //     'contentOptions' => ['style' => 'text-align:center'],
                                    //     'headerOptions' => ['class' => 'text-center'],
                                    //     'filterInputOptions' => [
                                    //         'class'       => 'form-control',
                                    //         'placeholder' => 'Search...',
                                    //     ],
                                    //     'value' => function ($model) {
                                    //         return $model->so->jenis;
                                    //     }
                                    // ],
                                    [
                                        'attribute' => 'harga',
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                        'value' => function ($model) {
                                            return number_format($model->harga, 0, ',', '.');
                                        },
                                    ],

                                    [
                                        'attribute' => 'status_produk',
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'format' => 'raw',
                                        'filter'    => ['Finish' => "Finish", 'Unprocessed' => "Unprocessed"],
                                        'value' => function ($data, $key, $index, $column) {
                                            $status = isset($data->status_produk) ? $data->status_produk : 'Unprocessed';
                                            if ($status == 'Finish') {
                                                return '<span class="label label-table label-success">Finish</span>';
                                            } else {
                                                return '<span class="label label-table label-danger">Unprocessed</span>';
                                            }
                                        },
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],

                                ],
                                'toolbar' => [
                                    Html::a('<i class="ion-load-a"></i>', ['index'], ['class' => 'btn btn-default']),
                                    // '{export}',
                                    '{toggleData}'
                                ],
                                'panel' => [
                                    'heading' => false,
                                    'type' => 'default',
                                    'before' => Html::a('<i class="md-add-box"></i> Add MacBook', ['create'], ['class' => 'btn btn-success']),
                                ],
                            ]); ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>