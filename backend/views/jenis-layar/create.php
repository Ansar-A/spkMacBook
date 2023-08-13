<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\JenisLayar $model */

$this->title = 'Create Jenis Layar';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Layars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-layar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
