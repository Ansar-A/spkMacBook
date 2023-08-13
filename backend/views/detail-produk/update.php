<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\DetailProduk $model */

$this->title = 'Update Detail Produk: ' . $model->id_detail;
$this->params['breadcrumbs'][] = ['label' => 'Detail Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detail, 'url' => ['view', 'id_detail' => $model->id_detail]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-produk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
