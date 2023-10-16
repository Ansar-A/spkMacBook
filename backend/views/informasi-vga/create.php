<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\InformasiVga $model */

$this->title = 'Create Informasi Vga';
$this->params['breadcrumbs'][] = ['label' => 'Informasi Vgas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informasi-vga-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>