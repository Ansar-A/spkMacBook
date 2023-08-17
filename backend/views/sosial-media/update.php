<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SosialMedia $model */

$this->title = 'Update Sosial Media: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sosial Media', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sosial-media-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
