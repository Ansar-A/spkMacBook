<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Warna $model */

$this->title = 'Update Warna: ' . $model->id_warna;
$this->params['breadcrumbs'][] = ['label' => 'Warnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_warna, 'url' => ['view', 'id_warna' => $model->id_warna]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
