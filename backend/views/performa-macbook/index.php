<?php

use common\models\PerformaMacbook;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PerformaMacbookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Performa Macbooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="performa-macbook-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Performa Macbook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_performa',
            'ram',
            'vga',
            'prosesor',
            'storage',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerformaMacbook $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_performa' => $model->id_performa]);
                 }
            ],
        ],
    ]); ?>


</div>
