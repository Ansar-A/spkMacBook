<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\JenisLayar $model */

$this->title = 'Update Jenis Layar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Layars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-layar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
