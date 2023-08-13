<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\DetailProduk $model */

$this->title = 'Create Detail Produk';
$this->params['breadcrumbs'][] = ['label' => 'Detail Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-produk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
