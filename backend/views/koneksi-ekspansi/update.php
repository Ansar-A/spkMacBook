<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KoneksiEkspansi $model */

$this->title = 'Update Koneksi Ekspansi: ' . $model->id_koneksi;
$this->params['breadcrumbs'][] = ['label' => 'Koneksi Ekspansis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_koneksi, 'url' => ['view', 'id_koneksi' => $model->id_koneksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="koneksi-ekspansi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
