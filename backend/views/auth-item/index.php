<?php

use common\models\AuthItem;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\AuthItemSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Auth Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-color panel-custom">
                    <div class="panel-heading" style="padding-top: 0px; padding-bottom: 0px;">
                        <ol class="breadcrumb" style="padding-top: 2px; padding-bottom: 10px;">
                            <li>
                                <h4 class="page-title text-white">Auth Item</h4>
                            </li>
                            <li>
                                <a href="<?= Url::to(['site/index']) ?>">Home</a>
                            </li>
                            <li class="text-white">
                                Panel Auth Item
                            </li>
                        </ol>
                    </div>
                    <div class="panel-body">
                        <div class="auth-item-index">

                            <p style="padding-bottom: 10px;">
                                <?= Html::a('Create Auth Item', ['create'], ['class' => 'btn btn-success']) ?>
                            </p>

                            <?php // echo $this->render('_search', ['model' => $searchModel]); 
                            ?>
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'summary'   => false,
                                'headerRowOptions' => ['class' => 'table m-0'],
                                'filterRowOptions' => ['class' => 'table m-0'],
                                'columns' => [
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'template' => '{view} {update} {delete}',
                                        'header' => 'Action',
                                        'buttons' => [
                                            'class' => 'btn btn-primary dropdown-toggle',
                                            'view' => function ($url, $model) {
                                                return Html::a('', ['view', 'name' => $model->name], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                ]);
                                            },
                                            'update' => function ($url, $model) {

                                                return Html::a('', ['update', 'name' => $model->name], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                            },
                                            'delete' => function ($url, $model) {

                                                return Html::a('', ['delete', 'name' => $model->name], [
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

                                    'name',
                                    'type',
                                    'description:ntext',
                                    //'rule_name',
                                    //'data',
                                    //'created_at',
                                    //'updated_at',


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