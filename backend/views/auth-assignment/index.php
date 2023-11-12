<?php

use common\models\AuthAssignment;
use kartik\form\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\AuthAssignmentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Auth Assignments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['auth-assignment/index']) ?>"><i class="ti-key"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['auth-assignment/index']) ?>">Auth Assignment</a>
                    </li>
                    <li class="active">
                        Index
                    </li>
                </ol>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-border panel-custom">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="auth-assignment-index">
                            <?php if (Yii::$app->session->hasFlash('error')) : ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <h4><i class="icon fa fa-lock"></i> Not Access!</h4>
                                    <?= Yii::$app->session->getFlash('error') ?>
                                </div>
                            <?php endif; ?>
                            <p style="padding-bottom: 10px;">
                                <?= Html::a('<i class="md-add-box"></i> Add Data', ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                            </p>

                            <?php // echo $this->render('_search', ['model' => $searchModel]); 
                            ?>
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'summary' => false,
                                'headerRowOptions' => ['class' => 'table m-0'],
                                'filterRowOptions' => ['class' => 'table m-0'],
                                'columns' => [
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'template' => '{view} {update}',
                                        'header' => 'Action',
                                        'buttons' => [
                                            'class' => 'btn btn-primary dropdown-toggle',
                                            'view' => function ($url, $model) {
                                                return Html::a('', ['view', 'item_name' => $model->item_name, 'user_id' => $model->user_id], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                ]);
                                            },
                                            'update' => function ($url, $model) {

                                                return Html::a('', ['update', 'item_name' => $model->item_name, 'user_id' => $model->user_id], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                            },
                                            'delete' => function ($url, $model) {

                                                return Html::a('', ['delete', 'item_name' => $model->item_name, 'user_id' => $model->user_id], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                                    'data' => [
                                                        'confirm' => 'Yakin ingin menghapus item ini?',
                                                        'method' => 'post',
                                                    ],
                                                ]);
                                            },
                                            // 'delete' => function ($url, $model) {
                                            //     return Html::a('', $url, [
                                            //         'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                            //         'data' => [
                                            //             'method' => 'POST',
                                            //             'confirm' => 'Yakin ingin menghapus item ini?',

                                            //         ],
                                            //     ]);
                                            // },
                                        ],
                                    ],
                                    'item_name',
                                    'user_id',
                                    // [
                                    //     'attribute' => 'user_id',
                                    //     'value' => function ($model) {
                                    //         return $model->itemName->name;
                                    //     }
                                    // ]
                                    // 'created_at',

                                ],
                            ]); ?>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <!-- Uin Alauddin Makassar.2019 -->
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div>
</div>