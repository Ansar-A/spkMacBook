<?php

use common\models\KetahananMacbook;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KetahananMacbookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ketahanan Macbooks';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content">
    <div class="container">
        <div class="row">
            <!-- display error message -->
            <?php if (Yii::$app->session->hasFlash('error')) : ?>
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-check"></i>Saved!</h4>
                    <?= Yii::$app->session->getFlash('error') ?>
                </div>
            <?php endif; ?>

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
                <h4 class="page-title">Basic Tables</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Ubold</a>
                    </li>
                    <li>
                        <a href="#">Tables</a>
                    </li>
                    <li class="active">
                        Tables
                    </li>
                </ol>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box widget-box-1 bg-white">
                            <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                            <h4 class="text-dark">Maksimum Kapasitas Daya</h4>

                            <p class="text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>10.25%</span></p>
                        </div>
                    </div>
                </div>
                <div class="ketahanan-macbook-index">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); 
                    ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
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

                            // [
                            //     'attribute' => 'attribute_name',
                            //     'value' => 'attribute_value',
                            //     'filter' => Html::activeDropDownList($searchModel, 'username', ArrayHelper::map(User::find()->asArray()->all(), 'id', 'username'), ['class' => 'form-control', 'prompt' => 'Select Category']),
                            // ],
                            // ['class' => 'yii\grid\SerialColumn'],
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
                            'before' => Html::a('<i class="md-add-box"></i> Create Ketahanan', ['create'], ['class' => 'btn btn-success']),
                            // 'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                            // 'footer' => false
                        ],
                    ]); ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card-box p-0">
                    <div class="profile-widget text-center">

                        <img src="<?= Url::to('@web/' . Yii::$app->user->identity->photo) ?>" class="thumb-lg img-circle img-thumbnail" alt="img">
                        <h4><?php echo Yii::$app->user->identity->username ?></h4>
                        <a href="https://support.apple.com/id-id/HT201585" class="btn btn-sm btn-purple m-t-20">More Information</a>
                        <p class="m-t-0 text-muted p-20">Penjelasan mengenai ketahanan seperti apa</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>