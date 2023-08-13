<?php

use common\models\BuiltinApps;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\BuiltinAppsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Builtin Apps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="builtin-apps-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Builtin Apps', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_builtinApps',
            'builtinApp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BuiltinApps $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_builtinApps' => $model->id_builtinApps]);
                 }
            ],
        ],
    ]); ?>


</div>
