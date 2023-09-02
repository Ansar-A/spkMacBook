<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\LikeProduk $model */

$this->title = $model->id_like;
$this->params['breadcrumbs'][] = ['label' => 'Like Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="like-produk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_like' => $model->id_like], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_like' => $model->id_like], [
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
            'id_like',
            'get_likeProduk',
            'get_pengguna',
            'budget'
        ],
    ]) ?>

</div>