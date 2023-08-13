<?php

use common\models\KeamananMacbook;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KeamananMacbookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Keamanan Macbooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keamanan-macbook-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Keamanan Macbook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_keamanan',
            'no_seri',
            'garansi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KeamananMacbook $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_keamanan' => $model->id_keamanan]);
                 }
            ],
        ],
    ]); ?>


</div>
