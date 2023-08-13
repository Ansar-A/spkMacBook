<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\UkuranBerat $model */

$this->title = $model->id_ukuranberat;
$this->params['breadcrumbs'][] = ['label' => 'Ukuran Berats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ukuran-berat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_ukuranberat' => $model->id_ukuranberat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_ukuranberat' => $model->id_ukuranberat], [
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
            'id_ukuranberat',
            'tinggi',
            'panjang',
            'lebar',
            'berat',
        ],
    ]) ?>

</div>
