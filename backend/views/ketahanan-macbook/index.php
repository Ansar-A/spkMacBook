<?php

use common\models\KetahananMacbook;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KetahananMacbookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ketahanan Macbooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketahanan-macbook-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ketahanan Macbook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ketahanan',
            'baterai',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KetahananMacbook $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_ketahanan' => $model->id_ketahanan]);
                 }
            ],
        ],
    ]); ?>


</div>
