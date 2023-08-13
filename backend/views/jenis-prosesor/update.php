<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\JenisProsesor $model */

$this->title = 'Update Jenis Prosesor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Prosesors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-prosesor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
