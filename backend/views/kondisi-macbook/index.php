<?php

use common\models\KondisiMacbook;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KondisiMacbookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kondisi Macbooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kondisi-macbook-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kondisi Macbook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kondisi',
            'kondisi_layar',
            'keyboard',
            'tracpad',
            'audio',
            //'kamera',
            //'koneksi',
            //'kondisi_port',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KondisiMacbook $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kondisi' => $model->id_kondisi]);
                 }
            ],
        ],
    ]); ?>


</div>
