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
                <?php if (Yii::$app->session->hasFlash('error')) : ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i>Not Access!</h4>
                        <?= Yii::$app->session->getFlash('error') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li>
                            <h4 class="page-title">SPK MacBook</h4>
                        </li>
                        <li>
                            <a href="<?= Url::to(['site/index']) ?>">Home</a>
                        </li>
                        <li class="active">
                            Panel SPK
                        </li>
                    </ol>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="data-spk-index">
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
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs navtab-bg nav-justified">
                            <li class="">
                                <a href="#home1" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                                    <span class="hidden-xs">F</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#profile1" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                                    <span class="hidden-xs">T</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#messages1" data-toggle="tab" aria-expanded="true">
                                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                    <span class="hidden-xs">RSquare</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" style="padding-bottom:35px">
                            <div class="tab-pane" id="home1">
                                Keterangan Data F.
                                <div class="m-t-30 text-center">
                                    <a href="https://id.quora.com/Berapa-lama-ketahanan-MacBook-Jika-saya-ingin-membeli-laptop-yang-bertahan-7-hingga-10-tahun-apa-saran-laptop-yang-bagus-baik-Windows-maupun-Apple" target="_blank" class="btn btn-info waves-effect waves-light btn-sm">
                                        <span class="btn-label"><i class="fa fa-info"></i>
                                        </span>More Info</a>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile1">
                                Keterangan Data T.
                                <div class="m-t-30 text-center">
                                    <a href="https://id.quora.com/Berapa-lama-ketahanan-MacBook-Jika-saya-ingin-membeli-laptop-yang-bertahan-7-hingga-10-tahun-apa-saran-laptop-yang-bagus-baik-Windows-maupun-Apple" target="_blank" class="btn btn-info waves-effect waves-light btn-sm">
                                        <span class="btn-label"><i class="fa fa-info"></i>
                                        </span>More Info</a>
                                </div>
                            </div>
                            <div class="tab-pane active" id="messages1">
                                Keterangan R Square.
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