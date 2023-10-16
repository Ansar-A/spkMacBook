<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\InformasiRam $model */

$this->title = 'Update Informasi Ram: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Informasi Rams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="informasi-ram-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
