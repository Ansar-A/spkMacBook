<?php

use common\models\Kamera;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KameraSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kameras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamera-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kamera', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kamera',
            'kamera',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kamera $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kamera' => $model->id_kamera]);
                 }
            ],
        ],
    ]); ?>


</div>
