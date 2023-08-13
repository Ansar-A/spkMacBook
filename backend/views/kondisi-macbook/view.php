<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\KondisiMacbook $model */

$this->title = $model->id_kondisi;
$this->params['breadcrumbs'][] = ['label' => 'Kondisi Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kondisi-macbook-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_kondisi' => $model->id_kondisi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kondisi' => $model->id_kondisi], [
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
            'id_kondisi',
            'kondisi_layar',
            'keyboard',
            'tracpad',
            'audio',
            'kamera',
            'koneksi',
            'kondisi_port',
        ],
    ]) ?>

</div>
