<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KoneksiEkspansi $model */

$this->title = 'Create Koneksi Ekspansi';
$this->params['breadcrumbs'][] = ['label' => 'Koneksi Ekspansis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="koneksi-ekspansi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
