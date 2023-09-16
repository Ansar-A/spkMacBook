<?php

use common\models\KetKomponentLayar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KetKomponentLayarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ket Komponent Layars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="col">
            <div class="col-sm-12">
                <h4 class="page-title">Basic Tables</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Ubold</a>
                    </li>
                    <li>
                        <a href="#">Tables</a>
                    </li>
                    <li class="active">
                        Tables
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="ket-komponent-layar-index">
                        <p>
                            <?= Html::a('Create Ket Komponent Layar', ['create'], ['class' => 'btn btn-success']) ?>
                        </p>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); 
                        ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'id',
                                'ket_Layar',
                                'judul',
                                'photo',
                                'link',
                                [
                                    'class' => ActionColumn::className(),
                                    'urlCreator' => function ($action, KetKomponentLayar $model, $key, $index, $column) {
                                        return Url::toRoute([$action, 'id' => $model->id]);
                                    }
                                ],
                            ],
                        ]); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>