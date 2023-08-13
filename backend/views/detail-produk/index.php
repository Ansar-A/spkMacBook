<?php

use common\models\DetailProduk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\DetailProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-produk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detail',
            'ketahanan',
            'performa',
            'kondisi',
            'keamanan',
            //'get_spk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailProduk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_detail' => $model->id_detail]);
                 }
            ],
        ],
    ]); ?>


</div>
