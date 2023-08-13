<?php

use common\models\Warna;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\WarnaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Warnas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warna-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Warna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_warna',
            'warna',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Warna $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_warna' => $model->id_warna]);
                 }
            ],
        ],
    ]); ?>


</div>
