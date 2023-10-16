<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\InformasiRam $model */

$this->title = 'Create Informasi Ram';
$this->params['breadcrumbs'][] = ['label' => 'Informasi Rams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informasi-ram-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>