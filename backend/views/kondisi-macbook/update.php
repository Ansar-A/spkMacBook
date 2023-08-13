<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KondisiMacbook $model */

$this->title = 'Update Kondisi Macbook: ' . $model->id_kondisi;
$this->params['breadcrumbs'][] = ['label' => 'Kondisi Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kondisi, 'url' => ['view', 'id_kondisi' => $model->id_kondisi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kondisi-macbook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
