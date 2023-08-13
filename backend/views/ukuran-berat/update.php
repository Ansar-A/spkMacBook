<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UkuranBerat $model */

$this->title = 'Update Ukuran Berat: ' . $model->id_ukuranberat;
$this->params['breadcrumbs'][] = ['label' => 'Ukuran Berats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ukuranberat, 'url' => ['view', 'id_ukuranberat' => $model->id_ukuranberat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ukuran-berat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
