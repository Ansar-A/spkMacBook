<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetahananMacbook $model */

$this->title = 'Update Ketahanan Macbook: ' . $model->id_ketahanan;
$this->params['breadcrumbs'][] = ['label' => 'Ketahanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ketahanan, 'url' => ['view', 'id_ketahanan' => $model->id_ketahanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ketahanan-macbook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
