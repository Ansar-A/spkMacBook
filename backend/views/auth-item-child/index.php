<?php

use common\models\AuthItemChild;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\AuthItemChildSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Auth Item Children';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Info<span class="m-l-5"><i class="fa fa-info"></i></span></button>
                    <ul class="dropdown-menu drop-menu-right" role="menu">
                </div>
                <h4 class="page-title">Auth Item Child</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Panel Auth Item Child
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="auth-item-child-index">
                        <div class="row">
                            <div class="col-sm-9">
                                <?= Html::button('<i class="md-add-box"></i> Add Data', ['value' => Url::to(['auth-item-child/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
                            </div>
                        </div>
                        <p></p>
                        <?php
                        Modal::begin([
                            'header' => 'Create',
                            'id' => 'modal',
                            'size' => 'modal-lg'
                        ]);
                        echo "<div id = 'modalContent'></div>";
                        Modal::end();
                        ?>
                        <?php //echo $this->render('_search', ['model' => $searchModel]);
                        ?>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'summary' => '',
                            'tableOptions' => [
                                'class' => 'table m-0'
                            ],
                            'columns' => [
                                [
                                    'class' => '\yii\grid\ActionColumn',
                                    'headerOptions' => ['style' => 'width:15%'],
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