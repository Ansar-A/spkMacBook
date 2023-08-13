<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Nirkabel $model */

$this->title = 'Update Nirkabel: ' . $model->id_nirkabel;
$this->params['breadcrumbs'][] = ['label' => 'Nirkabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_nirkabel, 'url' => ['view', 'id_nirkabel' => $model->id_nirkabel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nirkabel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
