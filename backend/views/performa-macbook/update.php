<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PerformaMacbook $model */

$this->title = 'Update Performa Macbook: ' . $model->id_performa;
$this->params['breadcrumbs'][] = ['label' => 'Performa Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_performa, 'url' => ['view', 'id_performa' => $model->id_performa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="performa-macbook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
