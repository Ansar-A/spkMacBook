<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Kamera $model */

$this->title = 'Update Kamera: ' . $model->id_kamera;
$this->params['breadcrumbs'][] = ['label' => 'Kameras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kamera, 'url' => ['view', 'id_kamera' => $model->id_kamera]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
