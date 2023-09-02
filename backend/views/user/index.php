<?php

use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use PHPUnit\TextUI\XmlConfiguration\Constant;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var backend\models\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Users';
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
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Panel Admin</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Admin
                    </li>
                </ol>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="mini-stat clearfix card-box">
                            <span class="mini-stat-icon bg-info"><i class="ion-social-usd text-white"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span class="counter text-dark" data-plugin="counterup">5154</span>
                                Total
                            </div>
                            <div class="tiles-progress">
                                <div class="m-t-20">
                                    <h5 class="text-uppercase">Target <span class="pull-right">60%</span></h5>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="mini-stat clearfix card-box">
                            <span class="mini-stat-icon bg-warning"><i class="ion-ios7-cart text-white"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span class="counter text-dark" data-plugin="counterup">876</span>
                                New
                            </div>
                            <div class="tiles-progress">
                                <div class="m-t-20">
                                    <h5 class="text-uppercase">Target <span class="pull-right">90%</span></h5>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="mini-stat clearfix card-box">
                            <span class="mini-stat-icon bg-pink"><i class="ion-android-contacts text-white"></i></span>
                            <div class="mini-stat-info text-right text-dark">
                                <span class="counter text-dark" data-plugin="counterup">4775</span>
                                New
                            </div>
                            <div class="tiles-progress">
                                <div class="m-t-20">
                                    <h5 class="text-uppercase">Target <span class="pull-right">57%</span></h5>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-pink" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                            <span class="sr-only">57% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-index">
                    <div class="row">
                        <div class="col-sm-1">
                            <?= Html::button('<i class="md-add-box"></i> Add Admin', ['value' => Url::to(['user/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
                        </div>
                        <div class="col-sm-11">
                            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                        </div>
                    </div>
                    <?php
                    Modal::begin([
                        'header' => 'Create',
                        'id' => 'modal',
                        'size' => 'modal-lg'
                    ]);
                    echo "<div id = 'modalContent'></div>";
                    Modal::end();
                    ?>
                    <?= GridView::widget([

                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'responsive' => true,
                        'striped' => false,
                        'resizableColumns' => true,
                        'persistResize' => true,
                        'floatHeader' => true,
                        'headerRowOptions' => ['class' => 'table m-0'],
                        'filterRowOptions' => ['class' => 'table m-0'],
                        //'bootstrap' => true,
                        //'bordered' => false,
                        //'condensed' => false,
                        //'responsiveWrap' => false,
                        //'hover' => true,
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
                            // ['class' => 'yii\grid\SerialColumn'],
                            [
                                'headerOptions' => ['class' => 'text-center'],
                                'contentOptions' => ['style' => 'text-align:center'],
                                'attribute' => 'status',
                                'format' => 'raw',
                                'filter'    => [10 => "Active", 9 => "Suspended"],
                                'value' => function ($data, $key, $index, $column) {
                                    if ($data->status == 10) {
                                        return '<span class="label label-table label-success">Active</span>';
                                    } else {
                                        return '<span class="label label-table label-danger">Suspended</span>';
                                    }
                                }

                            ],
                            'username',
                            //'photo',
                            'address',
                            // 'id',
                            //'auth_key',
                            //'password_hash',
                            //'password_reset_token',
                            //'email:email',
                            //'created_at',
                            //'updated_at',
                            //'verification_token',
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
                            //'before' => Html::a('<i class="md-add-box"></i> Create Admin', ['create'], ['class' => 'btn btn-success']),
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
                        <a href="#" class="btn btn-sm btn-purple m-t-20">Follow Fb</a>
                        <a href="#" class="btn btn-sm btn-pink m-t-20">ig</a>
                        <p class="m-t-10 text-muted p-20">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <ul class="list-inline widget-list clearfix">
                            <li class="col-md-6"><span>109</span>Follow</li>
                            <li class="col-md-6"><span>596</span>Photos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>