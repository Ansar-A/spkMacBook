<?php

use common\models\KoneksiEkspansi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KoneksiEkspansiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Koneksi Ekspansis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="koneksi-ekspansi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Koneksi Ekspansi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_koneksi',
            'koneksiEkspansi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KoneksiEkspansi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_koneksi' => $model->id_koneksi]);
                 }
            ],
        ],
    ]); ?>


</div>
