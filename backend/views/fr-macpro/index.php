<?php

use common\models\FrMacpro;
use common\models\LikeProduk;
use common\models\SpkKelayakan;
use kartik\detail\DetailView;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var backend\models\FrMacproSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Fr Macpros';
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
                        <a href="<?= Url::to(['fr-macpro/index']) ?>">Populer Item</a>
                    </li>
                    <li class="active">
                        Index
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="fr-macpro-index">
                                <p>
                                    <?= Html::a('<i class="md-add-box"></i> Add Data', ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                    <!-- <?= Html::button('<i class="md-add-box"></i> Add Data', ['value' => Url::to(['fr-macpro/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?> -->
                                </p>

                                <?php // echo $this->render('_search', ['model' => $searchModel]); 
                                ?>
                                <?php
                                Modal::begin([
                                    'header' => false,
                                    'id' => 'modal',
                                    'size' => 'modal-lg'
                                ]);
                                echo "<div id = 'modalContent'></div>";
                                Modal::end();
                                ?>
                                <p></p>
                                <?= GridView::widget([
                                    'dataProvider' => $dataProvider,
                                    // 'filterModel' => $searchModel,
                                    'summary' => false,
                                    'columns' => [
                                        // ['class' => 'yii\grid\SerialColumn'],

                                        // [
                                        //     'label'  => 'ID Populer',
                                        //     'attribute' => 'id',
                                        //     'headerOptions' => ['class' => 'text-center'],
                                        //     'contentOptions' => ['style' => 'text-align:center'],
                                        // ],
                                        [
                                            'label'  => 'ID Like',
                                            'attribute' => 'get_like',
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                        ],
                                        [
                                            'label'  => 'MacBook',
                                            'attribute' => 'get_like',
                                            'value' => function ($model) {
                                                return $model->likeProduk->kelayakan->produk->nama_produk;
                                            },
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                        ],

                                        [
                                            'headerOptions' => ['class' => 'text-center'],
                                            'contentOptions' => ['style' => 'text-align:center'],
                                            'class' => ActionColumn::className(),
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
                                    ],
                                ]); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>