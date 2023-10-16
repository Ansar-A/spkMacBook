<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\InformasiVga $model */

$this->title = 'Update Informasi Vga: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Informasi Vgas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="informasi-vga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
