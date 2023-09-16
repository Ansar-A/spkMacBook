<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentKamera $model */

$this->title = 'Update Ket Komponent Kamera: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Kameras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ket-komponent-kamera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
