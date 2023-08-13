<?php

use common\models\UkuranBerat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\UkuranBeratSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ukuran Berats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukuran-berat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ukuran Berat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ukuranberat',
            'tinggi',
            'panjang',
            'lebar',
            'berat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UkuranBerat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_ukuranberat' => $model->id_ukuranberat]);
                 }
            ],
        ],
    ]); ?>


</div>
