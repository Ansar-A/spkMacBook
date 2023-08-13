<?php

use common\models\Nirkabel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\NirkabelSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Nirkabels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nirkabel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nirkabel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_nirkabel',
            'wifi',
            'bluetooth',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Nirkabel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_nirkabel' => $model->id_nirkabel]);
                 }
            ],
        ],
    ]); ?>


</div>
