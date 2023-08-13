<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\DataSpk $model */

$this->title = 'Update Data Spk: ' . $model->id_spk;
$this->params['breadcrumbs'][] = ['label' => 'Data Spks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_spk, 'url' => ['view', 'id_spk' => $model->id_spk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-spk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
