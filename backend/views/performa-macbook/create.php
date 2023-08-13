<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PerformaMacbook $model */

$this->title = 'Create Performa Macbook';
$this->params['breadcrumbs'][] = ['label' => 'Performa Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="performa-macbook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
