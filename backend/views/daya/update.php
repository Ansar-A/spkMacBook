<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Daya $model */

$this->title = 'Update Daya: ' . $model->id_daya;
$this->params['breadcrumbs'][] = ['label' => 'Dayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_daya, 'url' => ['view', 'id_daya' => $model->id_daya]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
