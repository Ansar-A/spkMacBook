<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\JenisPenyimpanan $model */

$this->title = 'Update Jenis Penyimpanan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Penyimpanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-penyimpanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
