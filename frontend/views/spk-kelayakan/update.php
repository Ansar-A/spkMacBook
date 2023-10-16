<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SpkKelayakan $model */

$this->title = 'Update Spk Kelayakan: ' . $model->id_kelayakan;
$this->params['breadcrumbs'][] = ['label' => 'Spk Kelayakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kelayakan, 'url' => ['view', 'id_kelayakan' => $model->id_kelayakan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spk-kelayakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
