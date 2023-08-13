<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\KeamananMacbook $model */

$this->title = $model->id_keamanan;
$this->params['breadcrumbs'][] = ['label' => 'Keamanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="keamanan-macbook-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_keamanan' => $model->id_keamanan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_keamanan' => $model->id_keamanan], [
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
            'id_keamanan',
            'no_seri',
            'garansi',
        ],
    ]) ?>

</div>
