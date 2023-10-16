<?php

use common\models\AuthItemChild;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\AuthItemChildSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Auth Item Children';
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
                                <h4 class="page-title text-white">Auth Item Child</h4>
                            </li>
                            <li>
                                <a href="<?= Url::to(['site/index']) ?>">Home</a>
                            </li>
                            <li class="text-white">
                                Panel Auth Item Child
                            </li>
                        </ol>
                    </div>
                    <div class="panel-body">
                        <div class="auth-item-child-index">

                            <p>
                                <?= Html::a('Create Auth Item Child', ['create'], ['class' => 'btn btn-success']) ?>
                            </p>

                            <?php // echo $this->render('_search', ['model' => $searchModel]); 
                            ?>
                            <p>
                            </p>
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
                                        'template' => '{view} {update} {delete}',
                                        'header' => 'Action',
                                        'buttons' => [
                                            'class' => 'btn btn-primary dropdown-toggle',
                                            'view' => function ($url, $model) {
                                                return Html::a('', ['view', 'parent' => $model->parent, 'child' => $model->child], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                ]);
                                            },
                                            'update' => function ($url, $model) {

                                                return Html::a('', ['update', 'parent' => $model->parent, 'child' => $model->child], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                            },
                                            'delete' => function ($url, $model) {

                                                return Html::a('', ['delete', 'parent' => $model->parent, 'child' => $model->child], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                                    'data' => [
                                                        'confirm' => 'Yakin ingin menghapus item ini?',
                                                        'method' => 'post',
                                                    ],
                                                ]);
                                            },

                                        ],
                                    ],
                                    'parent',
                                    'child',
                                ],
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>