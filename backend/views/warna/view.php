<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Warna $model */

$this->title = $model->id_warna;
$this->params['breadcrumbs'][] = ['label' => 'Warnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="warna-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_warna' => $model->id_warna], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_warna' => $model->id_warna], [
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
            'id_warna',
            'warna',
        ],
    ]) ?>

</div>
