<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KeamananMacbook $model */

$this->title = 'Update Keamanan Macbook: ' . $model->id_keamanan;
$this->params['breadcrumbs'][] = ['label' => 'Keamanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_keamanan, 'url' => ['view', 'id_keamanan' => $model->id_keamanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keamanan-macbook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
