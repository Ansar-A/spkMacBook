<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\KetahananMacbook $model */

$this->title = $model->id_ketahanan;
$this->params['breadcrumbs'][] = ['label' => 'Ketahanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ketahanan-macbook-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_ketahanan' => $model->id_ketahanan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_ketahanan' => $model->id_ketahanan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_ketahanan',
            'baterai',
            'kapasitas_pengisian',
            'ket'
        ],
    ]) ?>

</div>