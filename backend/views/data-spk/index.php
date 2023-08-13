<?php

use common\models\DataSpk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\DataSpkSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Spks';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content">
    <div class="container">
        <div class="row">
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
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-custom">
                                            <i class="icon-layers"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                        <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                                        <h5 class="text-muted m-b-0 m-t-0">Visiters</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45" style="display: none;">1/5</span><svg class="peity" height="45" width="50">
                                        </svg>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-custom">
                                            <i class="icon-layers"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                        <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                                        <h5 class="text-muted m-b-0 m-t-0">Visiters</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45" style="display: none;">1/5</span><svg class="peity" height="45" width="50">
                                            <path d="M 25 0 A 22.5 22.5 0 0 1 46.39877161664096 15.547117626563683 L 25 22.5" fill="#5fbeaa"></path>
                                            <path d="M 46.39877161664096 15.547117626563683 A 22.5 22.5 0 1 1 24.999999999999996 0 L 25 22.5" fill="#ebeff2"></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-danger">
                                            <i class="icon-layers"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                        <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                                        <h5 class="text-muted m-b-0 m-t-0">Visiters</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-donut" data-colors="#f05050,#ebeff2" data-width="50" data-height="45" style="display: none;">1/5</span><svg class="peity" height="45" width="50">
                                            <path d="M 25 0 A 22.5 22.5 0 0 1 46.39877161664096 15.547117626563683 L 35.69938580832048 19.02355881328184 A 11.25 11.25 0 0 0 25 11.25" fill="#f05050"></path>
                                            <path d="M 46.39877161664096 15.547117626563683 A 22.5 22.5 0 1 1 24.999999999999996 0 L 24.999999999999996 11.25 A 11.25 11.25 0 1 0 35.69938580832048 19.02355881328184" fill="#ebeff2"></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="data-spk-index">
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
                                                return Html::a('', ['view', 'id_spk' => $model->id_spk], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                ]);
                                            },
                                            'update' => function ($url, $model) {

                                                return Html::a('', ['update', 'id_spk' => $model->id_spk], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                            },
                                            'delete' => function ($url, $model) {

                                                return Html::a('', ['delete', 'id_spk' => $model->id_spk], [
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
                                    'id_spk',
                                    'rSquare',
                                    'dataF',
                                    'dataT',
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
                                    'before' => Html::a('<i class="md-add-box"></i> Create Data', ['create'], ['class' => 'btn btn-success']),
                                    // 'after' => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
                                    // 'footer' => false
                                ],
                            ]); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card-box widget-box-1 bg-white">
                            <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                            <h4 class="text-dark">Income status</h4>
                            <h2 class="text-success text-center">$<span data-plugin="counterup">3652</span></h2>
                            <p class="text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>10.25%</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card-box widget-box-1 bg-white">
                            <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                            <h4 class="text-dark">Sales status</h4>
                            <h2 class="text-pink text-center"><span data-plugin="counterup">683</span></h2>
                            <p class="text-muted">Total sales: 2398 <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>7.85%</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>