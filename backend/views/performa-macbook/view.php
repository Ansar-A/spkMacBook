<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\PerformaMacbook $model */

$this->title = $model->id_performa;
$this->params['breadcrumbs'][] = ['label' => 'Performa Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="performa-macbook-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_performa' => $model->id_performa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_performa' => $model->id_performa], [
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
            'id_performa',
            'ram',
            'vga',
            'prosesor',
            'storage',
        ],
    ]) ?>

</div>
