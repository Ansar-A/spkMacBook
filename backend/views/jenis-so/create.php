<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\JenisSo $model */

$this->title = 'Create Jenis So';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Sos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-so-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
